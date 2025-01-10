<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "subscription_plan_id",
        "price",
        "expired_date",
        "payment_status",
        "snap_token",
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function SubscriptionPlan()
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }
}
