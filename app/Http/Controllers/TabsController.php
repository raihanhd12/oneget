<?php

namespace App\Http\Controllers;

use App\Models\Tabs;
use App\Models\Tiktok;
use App\Models\Facebook;
use App\Models\HasilAnalisisPostTiktok;
use App\Models\HasilAnalisisTiktok;
use App\Models\Instagram;
use App\Models\TiktokPost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class TabsController extends Controller
{

    public function store(Request $request): JsonResponse
    {
        // Create a new tab
        $tab = Tabs::create([
            'user_id' => auth()->user()->id,
            // 'title' => "Tambah Akun",
            'slug' => Str::uuid()->toString(),
        ]);

        $tab->TabDetails()->create([
            'tab_id' => $tab->id,
        ]);

        return response()->json(['message' => 'Tab added successfully', 'tab' => $tab]);
    }

    public function delete($slug)
    {
        // Find and delete the tab with the given slug
        Tabs::where('slug', $slug)->delete();

        return response()->json(['message' => 'Tab deleted successfully']);
    }

    public function showDetails($slug)
    {
        // Logic to retrieve tab details by slug
        $tab = Tabs::where('slug', $slug)->first();


        $relatedSocialMedia = null;

        //Tiktok
        $hasilAnalisisTiktok = null;
        $postinganTiktok = null;
        $postinganTiktokLike = null;

        if ($tab->TabDetails->socialmedia_type) {
            $relatedSocialMedia = $tab->TabDetails->socialmedia_type::find($tab->TabDetails->socialmedia_id);
            $hasilAnalisisTiktok = HasilAnalisisTiktok::where('tiktok_id', $relatedSocialMedia->id)->get();

            $postinganTiktok = TiktokPost::where(
                'tiktok_posts.tiktok_id',
                $relatedSocialMedia->id
            )
            ->join("hasil_analisis_post_tiktoks", "tiktok_posts.id", "hasil_analisis_post_tiktoks.tiktok_post_id")
            ->select("hasil_analisis_post_tiktoks.*", "tiktok_posts.*")
            ->get();
            // where('hasil_analisis_post_tiktoks.tiktok_post_id',$postinganTiktok[0]->id)
            $postinganTiktokLike = HasilAnalisisPostTiktok::
                join("tiktok_posts", "hasil_analisis_post_tiktoks.tiktok_post_id", "tiktok_posts.id")
                ->orderBy(
                    'hasil_analisis_post_tiktoks.tiktok_post_like_count',
                    'desc'
                )
                ->select("hasil_analisis_post_tiktoks.*", "tiktok_posts.*")
                ->take(5) // Limit the number of posts to 5
                ->get();
        } else {
            $relatedSocialMedia = null;
        }

        // Check if the tab is not found
        if (!$tab) {
            abort(404); // Or handle the case where the tab is not found
        }

        // Pass the $tab variable to the view
        return view('accesspoint.user.partials.tab_content', compact('tab'), [
            'facebook' => Facebook::where('user_id', Auth::id())->get(),
            'instagram' => Instagram::where('user_id', Auth::id())->get(),
            'tiktok' => Tiktok::where('user_id', Auth::id())->get(),
            'tabs' => Tabs::where('user_id', Auth::id())->get(),
            'relatedSocialMedia' => $relatedSocialMedia,
            'socialmediatype' => $tab->TabDetails->socialmedia_type,
            'hasilAnalisisTiktok' => $hasilAnalisisTiktok,
            'postinganTiktok' => $postinganTiktok,
            'postinganTiktokLike' => $postinganTiktokLike,
        ]);
    }

    public function showInstagramPage($slug, $username)
    {

        // Logic to retrieve Instagram page details by slug and username
        $tab = Tabs::where('slug', $slug)->first();
        // update tab
        $tab->update([
            'title' => $username,
        ]);

        $relatedInstagram = Instagram::where('username', $username)->first();

        $tab->TabDetails()->update([
            'socialmedia_type' => Instagram::class,
            'socialmedia_id' => $relatedInstagram->id,
        ]);

        // Check if the tab is found
        if (!$tab) {
            abort(404); // Or handle the case where the tab is not found
        }

        // You can pass additional data to the view if needed
        return redirect()->back();
    }

    public function showFacebookPage($slug, $username)
    {

        // Logic to retrieve Instagram page details by slug and username
        $tab = Tabs::where('slug', $slug)->first();

        // update tab
        $tab->update([
            'title' => $username,
        ]);

        $relatedFacebook = Facebook::where('username', $username)->first();

        $tab->TabDetails()->update([
            'socialmedia_type' => Facebook::class,
            'socialmedia_id' => $relatedFacebook->id,
        ]);

        // Check if the tab is found
        if (!$tab) {
            abort(404); // Or handle the case where the tab is not found
        }

        // You can pass additional data to the view if needed
        return redirect()->back();
    }
    public function showTiktokPage($slug, $username)
    {
        // Logic to retrieve Instagram page details by slug and username
        $tab = Tabs::where('slug', $slug)->first();

        // update tab
        $tab->update([
            'title' => $username,
        ]);

        $relatedTiktok = Tiktok::where('username', $username)->first();

        $tab->TabDetails()->update([
            'socialmedia_type' => Tiktok::class,
            'socialmedia_id' => $relatedTiktok->id,
        ]);

        // Check if the tab is found
        if (!$tab) {
            abort(404); // Or handle the case where the tab is not found
        }

        // You can pass additional data to the view if needed
        return redirect()->back();
    }
}
