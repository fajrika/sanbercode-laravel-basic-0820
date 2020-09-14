<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::insert([
            [
                'fullname' => "Admin",
                'email' => "admin",
                'photo' => '',
            ],
            [
                'fullname' => "Fajrika",
                'email' => "fajrika",
                'photo' => '',
            ]
        ]);
    }
}
