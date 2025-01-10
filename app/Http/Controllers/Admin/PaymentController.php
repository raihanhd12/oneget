<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserSubscription;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = UserSubscription::all();

            return DataTables::of($data)

                ->addIndexColumn()

                ->editColumn('user_id', function ($row) {
                    $user = User::find($row->user_id);
                    return $user->email;
                })

                ->editColumn('subscription_plan_id', function ($row) {
                    $subscription_plan = SubscriptionPlan::find($row->subscription_plan_id);
                    return $subscription_plan->name;
                })

                ->addColumn('action', function ($row) {
                    $btn = '
                        <div class="dropdown">
                          <button type="button" class="btn btn-primary text-bg-dark p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-card-account-mail"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item show-contact-us" data-bs-toggle="modal" data-bs-target="#backDropModal" href="javascript:void(0);" ><i class="mdi mdi-eye-outline me-2"></i>Show</a>
                            <a class="dropdown-item edit-contact-us" data-bs-toggle="modal" data-bs-target="#modalCenter" href="javascript:void(0);" ><i class="mdi mdi-pencil-outline me-2"></i>Edit</a>
                            <a class="dropdown-item delete-contactUs" href="javascript:void(0);" " data-contactUs-id="' . $row->id . '" data-first-name="' . $row->first_name . '" data-last-name="' . $row->last_name . '"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                          </div>
                        </div>
                      ';
                    return $btn;
                })

                ->rawColumns(['action'])

                ->make(true);
        }
        return view('accesspoint.admin.payment.index');
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
        $payment = UserSubscription::findOrFail($userSubscription->id);

        return $payment;
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
