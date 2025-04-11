<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function withCustomData()
    {
        return [

            [
                'service_code' => '101',
                'name' => 'BVN Verification',
                'category' => 'Verifications',
                'type' => 'Uncategorized',
                'amount' => 70.00,
                'description' => 'BVN Verification Fee',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '102',
                'name' => 'Standard Slip',
                'category' => 'Verifications',
                'type' => 'Uncategorized',
                'amount' => 30.00,
                'description' => 'BVN Standard Slip',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '103',
                'name' => 'BVN Premium Slip',
                'category' => 'Verifications',
                'type' => 'Uncategorized',
                'amount' => 60.00,
                'description' => 'BVN Premium Slip FEE',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '104',
                'name' => 'NIN Verification',
                'category' => 'Verifications',
                'type' => 'Uncategorized',
                'amount' => 130.00,
                'description' => 'NIN Verification fee',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '105',
                'name' => 'Regular NIN Slip',
                'category' => 'Verifications',
                'type' => 'Uncategorized',
                'amount' => 50.00,
                'description' => 'Regular NIN Slip',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '106',
                'name' => 'Standard NIN Slip',
                'category' => 'Verifications',
                'type' => 'Uncategorized',
                'amount' => 70.00,
                'description' => 'Standard NIN Slip',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '107',
                'name' => 'Premium NIN Slip',
                'category' => 'Verifications',
                'type' => null,
                'amount' => 100.00,
                'description' => 'Premium NIN Slip',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'service_code' => '118',
                'name' => 'NIN Personalization',
                'category' => 'Verifications',
                'type' => null,
                'amount' => 200.00,
                'description' => 'NIN Verification fee using tracking No',
                'status' => 'enabled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
    }
}
