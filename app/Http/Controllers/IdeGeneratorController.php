<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\IdeGenerator;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreIdeGeneratorRequest;
use App\Http\Requests\UpdateIdeGeneratorRequest;

class IdeGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accesspoint.user.ide_generator_page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdeGeneratorRequest $request)
    {
        $request->validated();

        $keyword = $request->keyword;

        $ideGenerator = IdeGenerator::create([
            'user_id' => Auth::id(),
            'keyword' => $keyword,
            'response' => $request->response,
        ]);

        return to_route('ide-generator.show', $ideGenerator->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(IdeGenerator $ideGenerator)
    {
        $ideGenerator = IdeGenerator::findOrFail($ideGenerator->id);

        $createdAt = Carbon::parse($ideGenerator->created_at);
        $now = Carbon::now();

        $diffInMinutes = $createdAt->diffInMinutes($now);
        $diffInHours = $createdAt->diffInHours($now);
        $diffInDays = $createdAt->diffInDays($now);

        if ($diffInMinutes < 60) {
            $timeAgo = $diffInMinutes . ' menit yang lalu';
        } elseif ($diffInHours < 24) {
            $timeAgo = $diffInHours . ' jam yang lalu';
        } else {
            $timeAgo = $diffInDays . ' hari yang lalu';
        }

        return response()->json([$ideGenerator, $timeAgo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IdeGenerator $ideGenerator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdeGeneratorRequest $request, IdeGenerator $ideGenerator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IdeGenerator $ideGenerator)
    {
        $ideGenerator->delete();

        // Kembali ke halaman sebelumnya
        return back();
    }

    function ideGeneratorPage()
    {
        return view('accesspoint.user.ide_generator_page');
    }

    function ideGeneratorSend(Request $request)
    {
        $result = OpenAI::Completions()->create([
            'max_tokens' => 2000,
            'model' => 'text-davinci-003',
            'prompt' => $request->input,
        ]);

        $response = array_reduce($result->toArray()['choices'], fn(string $result, array $choice) => $result . $choice['text'], '');

        $ideGenerator = IdeGenerator::create([
            'user_id' => Auth::id(),
            'keyword' => $request->input,
            'response' => str_replace("\n\n", '', $response),
        ]);

        return $response;
    }

    public function historyPage($userId)
    {
        $histories = IdeGenerator::where('user_id', $userId)->get();

        return view('accesspoint.user.ide_generator_history', [
            'histories' => $histories,
        ]);
    }
}
