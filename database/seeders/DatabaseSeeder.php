<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Admin;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Teacher::create([

            'first_name' => 'Michael',
            'last_name' => 'Oluwaseun',
            'email' => 'seunmichael68@gmail.com',
            'gender' => 'Male',
            'core_skills' => 'Full Stack developer',
            'qualification' => 'B.Sc Mathematics',
            'phone_number' => '09096784147',
            'location' => 'Lagos',
            'contact_address' => 'College Bus stop',
            'slug' => 'editing-page',
            'image_path' => '\images\IMG_0577.JPG'
        ]);

        User::create([
            'first_name' => 'Michael',
            'last_name' => 'Oluwaseun',
            'email' => 'seunmichael68@gmail.com',
            'password' => '12345678',
            'location' => 'Lagos'
        ]);

        Admin::create([
            'name' => 'Michael',
            'email' => 'seunmichael68@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
