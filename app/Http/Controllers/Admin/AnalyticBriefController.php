<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\HasilLaporan;
use Illuminate\Http\Request;
use App\Models\AnalyticBrief;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnalyticBriefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = AnalyticBrief::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)->diffForHumans();
                })
                ->addColumn('email', function ($row) {
                    return $row->hasilLaporan->User->email;
                })
                ->addColumn('socialmedia', function ($row) {
                    return $row->hasilLaporan->socialmedia_type;
                })

                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="dropdown">
                          <button type="button" class="btn btn-primary text-bg-dark p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-card-account-mail"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item show-analytic-brief" data-bs-toggle="modal" data-bs-target="#backDropModal" href="javascript:void(0);" data-id="' . $row->id . '"data-first-name="' . $row->hasilLaporan->User->firstName . '"data-last-name="' . $row->hasilLaporan->User->lastName . '"data-email="' . $row->hasilLaporan->User->email . '"data-social-media="' . $row->hasilLaporan->socialmedia_type . '"data-judul="' . $row->hasilLaporan->judul . '"data-periode="' . $row->hasilLaporan->periode . '"data-status="' . $row->status . '"data-feedback="' . $row->feedback .  '"data-created_at="' . $row->created_at . '"data-updated_at="' . $row->updated_at . '" ><i class="mdi mdi-eye-outline me-2"></i>Show</a>
                            <a class="dropdown-item edit-analytic-brief" data-bs-toggle="modal" data-bs-target="#modalCenter" href="javascript:void(0);" data-id="' . $row->id . '"data-status="' . $row->status . '"data-feedback="' . $row->feedback . '"><i class="mdi mdi-pencil-outline me-2"></i>Edit</a>
                            <a class="dropdown-item delete-analytic-brief" href="javascript:void(0);" " data-analytic-brief-id="' . $row->id . '" data-first-name="' . $row->hasilLaporan->User->firstName . '" data-last-name="' . $row->hasilLaporan->User->lastName . '"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                          </div>
                        </div>
                      ';
                    return $btn;
                })

                ->rawColumns(['action'])

                ->make(true);
        }
        return view('accesspoint.admin.analytic-brief.index');
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
    public function show(AnalyticBrief $analyticBrief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnalyticBrief $analyticBrief)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnalyticBrief $analytic_brief)
    {
        $analytic_brief->update([
            'status' => $request->input('status'),
            'feedback' => $request->input('feedback')
        ]);

        return redirect()->back()->with('success', 'Analytic Brief updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnalyticBrief $analytic_brief)
    {
        $analytic_brief->delete();

        return response()->json(['success' => true, 'message' => 'Analytic Brief deleted successfully']);
    }
}
