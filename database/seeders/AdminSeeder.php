<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@svipb.ac.id'], // cek email biar ga dobel
            [
                'name' => 'Administrator',
                'password' => Hash::make('password123'),
            ]
        );
}
}