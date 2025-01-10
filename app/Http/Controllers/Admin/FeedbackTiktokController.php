<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeedbackTiktok;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedbackTiktokRequest;
use App\Http\Requests\UpdateFeedbackTiktokRequest;

class FeedbackTiktokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = FeedbackTiktok::all();

        return $datas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("accesspoint.admin.feedback.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackTiktokRequest $request)
    {
        $request->validated();

        FeedbackTiktok::create([
            "tiktok_id" => $request->tiktok_id,
            "feedback" => $request->feedback
        ]);

        return redirect()->route("admin.feedback-tiktok.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(FeedbackTiktok $feedbackTiktok)
    {
        $feedback = FeedbackTiktok::findOrFail($feedbackTiktok->id);

        return $feedback;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeedbackTiktok $feedbackTiktok)
    {
        return view("accesspoint.admin.feedback.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedbackTiktokRequest $request, FeedbackTiktok $feedbackTiktok)
    {
        $feedbackTiktok->update([
            "feedback" => $request->feedback
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeedbackTiktok $feedbackTiktok)
    {
        $feedbackTiktok->delete();

        return redirect()->route("admin.feedback-tiktok.index");
    }
}
