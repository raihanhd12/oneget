<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\UserSubscription;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcribers = UserSubscription::where('expired_date', '<=', Carbon::now())->get();

        return $subcribers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserSubscription $userSubscription)
    {
        $subcriber = UserSubscription::findOrFail($userSubscription->id);

        return $subcriber;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSubscription $userSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserSubscription $userSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSubscription $userSubscription)
    {
        //
    }
}
