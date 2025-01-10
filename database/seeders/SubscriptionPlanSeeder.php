<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptionPlans = [
            [
                'name' => 'Standard',
                'price' => 49900,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Premium',
                'price' => 99900,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Exclusive',
                'price' => 149900,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        SubscriptionPlan::insert($subscriptionPlans);
    }
}
