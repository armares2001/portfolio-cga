<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gianluca',
            'email' => 'gianluca@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$O0bB06w1Zj6ofIbzNiUHmuWukDxIH8Dq..FUxp1YjqgqW8upqVIUu',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
        User::create([
            'name' => 'Armando',
            'email' => 'zadolinnyi@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$O0bB06w1Zj6ofIbzNiUHmuWukDxIH8Dq..FUxp1YjqgqW8upqVIUu',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
        User::create([
            'name' => 'Marco',
            'email' => 'marco@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$O0bB06w1Zj6ofIbzNiUHmuWukDxIH8Dq..FUxp1YjqgqW8upqVIUu',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
    }
}
