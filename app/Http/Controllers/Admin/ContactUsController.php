<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = ContactUs::all();

            // Iterasi setiap entitas ContactUs
            foreach ($data as $contactUs) {
                // Ambil media yang berelasi dengan entitas ContactUs
                $media = $contactUs->media()->get();

                // Tambahkan media ke dalam entitas ContactUs
                $contactUs->media = $media;
            }

            return DataTables::of($data)

                ->addIndexColumn()

                ->editColumn('created_at', function (ContactUs $contactUs) {
                    return $contactUs->created_at->diffForHumans();
                })

                ->addColumn(
                    'media',
                    function (ContactUs $contactUs) {
                        $media = $contactUs->media()->get()->first();
                        if ($media) {
                            $url = asset('storage/' . $media->id . '/' . $media->file_name);
                            $html = '<a class="show-detail-image" data-bs-toggle="modal" data-bs-target="#mediaModal"><img src="' . $url . '" class="img-fluid rounded" alt="Contact Us Image" width="100px" height="100px"></a>';
                            return $html;
                        } else {
                            return ''; // Tidak ada media yang tersedia
                        }
                    }
                )

                ->addColumn('action', function ($row) {
                    // <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-pencil-outline me-2"></i> Edit</a>
                    $media = $row->media()->get()->first();
                    $url = asset('storage/' . $media->id . '/' . $media->file_name);
                    $btn = '
                        <div class="dropdown">
                          <button type="button" class="btn btn-primary text-bg-dark p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-card-account-mail"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item show-contact-us" data-bs-toggle="modal" data-bs-target="#backDropModal" href="javascript:void(0);" data-id="' . $row->id . '"data-first-name="' . $row->first_name . '"data-last-name="' . $row->last_name . '"data-email="' . $row->email . '"data-subject="' . $row->subject . '"data-message="' . $row->message . '"data-status="' . $row->status . '"data-created_at="' . $row->created_at . '"data-updated_at="' . $row->updated_at . '"data-media="' . $url . '" ><i class="mdi mdi-eye-outline me-2"></i>Show</a>
                            <a class="dropdown-item edit-contact-us" data-bs-toggle="modal" data-bs-target="#modalCenter" href="javascript:void(0);" data-id="' . $row->id . '"data-status="' . $row->status . '"data-updated_at="' . $row->updated_at . '"><i class="mdi mdi-pencil-outline me-2"></i>Edit</a>
                            <a class="dropdown-item delete-contactUs" href="javascript:void(0);" " data-contactUs-id="' . $row->id . '" data-first-name="' . $row->first_name . '" data-last-name="' . $row->last_name . '"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                          </div>
                        </div>
                      ';
                    return $btn;
                })

                ->rawColumns(['media', 'action'])

                ->make(true);
        }
        return view('accesspoint.admin.contact-us.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // form ini bisa diakses kalo statusnya 'ACCEPTED'
        return view('accesspoint.admin.contactus-create'); // blm dibikin, ntar bisa diupdate
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
    public function show(ContactUs $contactUs)
    {
        $contactUs = ContactUs::findOrFail($contactUs->id);

        return $contactUs;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        return view('accesspoint.admin.contactus-edit'); // blm dibikin, ntar bisa diupdate
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contact_u)
    {
        $status = $request->input('status');

        $contact_u->update([
            "status" => $status
            // Tambahkan field lainnya yang ingin diubah di sini
        ]);

        return redirect()->back()->with('success', 'Contact Us updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contact_u)
    {
        $contact_u->delete();

        return response()->json(['success' => true, 'message' => 'Contact Us deleted successfully']);
    }
}
