<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Webkul\Installer\Database\Seeders\DatabaseSeeder as BagistoDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BagistoDatabaseSeeder::class);

        DB::table('customers')->insert([
            'first_name'              => "Classic User",
            'last_name'              => "Classic User",
            'email'             => "user@example.com",
            'remember_token'    => Str::random(10),
            'gender'            => Arr::random(['male', 'female', 'other']),
            'status'            => 1,
            'password'          => Hash::make('password'),
            'customer_group_id' => 2,
            'is_verified'       => 1,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
