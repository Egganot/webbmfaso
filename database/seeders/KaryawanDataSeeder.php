<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class KaryawanDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $karyawanData = [];
        $usedNumbers = [];

        for ($i = 1; $i <= 20; $i++) {
            do {
                $randomNumber = rand(1, 20);
            } while (in_array($randomNumber, $usedNumbers));

            $usedNumbers[] = $randomNumber;

            $karyawanData[] = [
                'id_user' => $i,
                'nama' => $faker->name,
                'email' => 'test.seed' . $i . '@gmail.com',
                'telegram' => '@tele.gram' . $i,
                'foto' => 'karyawan/' . $randomNumber . '.png'
            ];
        }

        Karyawan::insert($karyawanData);
    }
}
