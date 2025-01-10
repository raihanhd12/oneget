<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.contactus');
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
    public function store(StoreContactUsRequest $request)
    {
        $request->validated();

        $contactUs = ContactUs::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        if ($request->hasFile('contact_files')) {
            foreach ($request->file('contact_files') as $evidence) {
                $contactUs->addMedia($evidence)->usingFileName(Str::random(16) . '')->toMediaCollection('contact_files');
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactUsRequest $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
