<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'team leader', 'user'];
        $divisions = ['optima','aso','psb'];
        $users = [];

        for ($i = 1; $i <= 20; $i++) {
            $username = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
            $users[] = [
                'username' => $username,
                'password' => Hash::make('12345678'),
                'division' => $divisions[array_rand($divisions)],
                'role' => $roles[array_rand($roles)]
            ];
        }
        User::insert($users);
    }
}
