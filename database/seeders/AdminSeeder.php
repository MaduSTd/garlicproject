<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create(["name" => "Seif", "email" => "seif@admin.com", "password" => Hash::make("garlicfirst")]);
        Admin::create(["name" => "Mohamed", "email" => "mohamed@admin.com", "password" => Hash::make("garlicfirst")]);
    }
}



