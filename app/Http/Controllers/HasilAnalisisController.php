<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\AnalyticBrief;
use App\Models\Facebook;
use App\Models\Instagram;
use App\Models\Tiktok;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\HasilLaporan;

class HasilAnalisisController extends Controller
{
    public function hasilPage()
    {
        $laporans = HasilLaporan::where('user_id', '=', auth()->user()->id)->get();

        $socialMediaUsernames = [];
        $statuses = [];

        foreach ($laporans as $laporan) {
            // Status
            $status = AnalyticBrief::where('hasil_laporan_id', $laporan->id)
                ->value('status'); // Use value instead of pluck
            $statuses[$laporan->id] = $status;

            // Social Media Username
            $socialMediaType = $laporan->socialmedia_type;
            $socialMediaId = $laporan->socialmedia_id;

            $socialMediaModel = $socialMediaType::find($socialMediaId);
            $socialMediaUsernames[$laporan->id] = $socialMediaModel ? $socialMediaModel->username : 'N/A';
        }

        return view('accesspoint.user.hasil_page', compact('laporans', 'socialMediaUsernames', 'statuses'));
    }


    public function addReportPage()
    {

        $tiktok = Tiktok::where("user_id", auth()->user()->id)->get();
        $instagram = Instagram::where("user_id", auth()->user()->id)->get();
        $facebook = Facebook::where("user_id", auth()->user()->id)->get();

        return view('accesspoint.user.add_report_page', [
            "tiktok" => $tiktok,
            "instagram" => $instagram,
            "facebook" => $facebook
        ]);
    }

    public function store(Request $request)
    {
        // Tentukan tipe social media berdasarkan input yang dipilih
        $socialMediaType = null;
        if ($request->input('select-tiktok') != null) {
            $socialMediaType = Tiktok::class;
        } elseif ($request->input('select-instagram') != null) {
            $socialMediaType = Instagram::class;
        } elseif ($request->input('select-facebook') != null) {
            $socialMediaType = Facebook::class;
        }
        // Simpan data ke dalam database
        $hasilLaporan = HasilLaporan::create([
            'user_id' => auth()->user()->id,
            'socialmedia_type' => $socialMediaType,
            'socialmedia_id' => $request->input('socialmedia_id'),
            'judul' => $request->input('judul'),
            'format' => $request->input('formatRadio'),
            'send_email' => $request->input('emailRadio'),
            'periode' => $request->input('dateRange')
        ]);

        if ($request->input('analyticBriefsRadio') == "ya") {
            AnalyticBrief::create([
                'hasil_laporan_id' => $hasilLaporan->id,
                'status' => 'PENDING',
                // other fields...
            ]);
        }

        // Redirect atau lakukan sesuatu setelah menyimpan data
        return redirect()->route('hasil')->with('success', $hasilLaporan->judul . ' berhasil ditambahkan!');
    }

    public function viewPDF()
    {
        return view('accesspoint.user.hasil_pdf');
    }

    public function export()
    {
        return Excel::download(new UsersExport, "users.xlsx");
    }
}
