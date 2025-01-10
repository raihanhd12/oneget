<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        \Midtrans\Config::$isProduction = config('services.midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('services.midtrans.is_sanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is_3ds');
    }

    public function paymentPage()
    {
        return view('accesspoint.user.payment_page', [
            'snap_token' => null
        ]);
    }

    // TODO ngarahinnya ke sini mas ntar
    public function paymentHandler($id)
    {
        $subscriptionPlan = SubscriptionPlan::where('id', $id)->get();

        $data = [
            'user_id' => Auth::id(),
            'subscription_plan_id' => $subscriptionPlan[0]->id,
            'price' => $subscriptionPlan[0]->price,
            'expired_date' => Carbon::now()->addMonth(1),
            'payment_status' => 'pending',
        ];

        $userSubscription = UserSubscription::create($data);

        $params = [
            'transaction_details' => [
                'order_id' => $userSubscription->id . '-' . Str::random(16),
                'gross_amount' => $userSubscription->price,
            ],
            'item_details' => [
                [
                    'id' => $userSubscription->id . '-' . Str::random(16),
                    'price' => $subscriptionPlan[0]->price,
                    'quantity' => 1,
                    'name' => 'Subscription for ' . $subscriptionPlan[0]->name,
                ],
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $userSubscription->update([
            // 'snap_token' => $snapToken->token,
            'snap_token' => $snapToken,
        ]);

        // $date = Carbon::createFromFormat('Y-m-d', $userSubscription->create_date);
        // $formattedDate = $date->format('j F Y');

        return response()->json(['snapToken' => $snapToken]);
    }

    public function paymentCallback()
    {
        // Membuat input string yang bernama json menjadi json kembali
        $notif = new Notification();

        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $transaction_id = explode('-', $notif->order_id)[0];
        $userSubscription = UserSubscription::find($transaction_id);

        error_log("Order ID $notif->order_id: " . "transaction status = $transaction_status, fraud staus = $fraud");

        // Membuat semua kondisi yang terjadi setelah transaksi dilakukan
        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'challenge'
                $userSubscription->payment_status = 'pending';
            } elseif ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'success'
                $userSubscription->payment_status = 'paid';
            }
        } elseif ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'failure'
                $userSubscription->payment_status = 'failed';
            } elseif ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'failure'
                $userSubscription->payment_status = 'failed';
            }
        } elseif ($transaction_status == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            $userSubscription->payment_status = 'failed';
        } elseif ($transaction_status == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $userSubscription->payment_status = 'paid';
        } elseif ($transaction_status == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $userSubscription->payment_status = 'pending';
        } elseif ($transaction_status == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $userSubscription->payment_status = 'failed';
        }

        $userSubscription->save();

        return;
    }
}
