<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jasmin Secusana',
            'email' => 'jasminsecusana38@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('jas_secusana123'),
            'admin' => 1,
            'approved_at' => now(),
            'contact_no' => '09361652609',
            'advisory' => 'Grade 11 - Wisdom',
            'adviser_id' => '6066267',
            'role' => 'editor'
        ]);
    }
}
