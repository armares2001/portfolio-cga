<?php

namespace Database\Seeders;

// use App\Models\Basic;

use App\Models\Basic;
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
            'surname'=>'SalPietro',
            'email' => 'gianluca.salpietro@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$O0bB06w1Zj6ofIbzNiUHmuWukDxIH8Dq..FUxp1YjqgqW8upqVIUu',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
        $user1=User::find(1);
        $user1->basic()->create([
            'rule'=>'owner',
        ]);

        User::create([
            'name' => 'Armando',
            'surname'=>'Zadolinnyi',
            'email' => 'armando.zadolinnyi@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$O0bB06w1Zj6ofIbzNiUHmuWukDxIH8Dq..FUxp1YjqgqW8upqVIUu',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
        $user2=User::find(2);
        $user2->basic()->create([
            'rule'=>'owner',
        ]);
        User::create([
            'name' => 'Marco',
            'surname'=>"D'izza",
            'email' => 'marco.d_izza@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$O0bB06w1Zj6ofIbzNiUHmuWukDxIH8Dq..FUxp1YjqgqW8upqVIUu',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
        $user3=User::find(3);
        $user3->basic()->create([
            'rule'=>'owner',
        ]);
    }
}
