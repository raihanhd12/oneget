<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables as DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::all();

            return DataTables::of($data)
                ->addColumn('role', function (User $user) {
                    return  $user->getRoleNames()->first();
                })
                ->editColumn('created_at', function (User $user) {
                    return $user->created_at->format('d-m-Y | H:i:s');
                })
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item delete-user" href="javascript:void(0);" data-user-id="' . $row->id . '" data-first-name="' . $row->firstName . '"data-last-name="' . $row->lastName . '"><i class="mdi mdi-trash-can-outline me-2"></i> Delete</a>
                                </div>
                            </div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('accesspoint.admin.user-management.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    public function show(User $user)
    {
        $user = User::join('tiktoks', 'users.id', '=', 'tiktoks.user_id')
            ->join('instagrams', 'users.id', '=', 'instagrams.user_id')
            ->join('facebooks', 'users.id', '=', 'facebooks.user_id')
            ->where('users.id', $user->id)
            ->select('users.*', 'tiktoks.*', 'instagrams.*', 'facebooks.*');

        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['success' => true, 'message' => 'User deleted successfully']);
    }
}
