<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegistrationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('bn_BD'); // Use Bangla locale

        for ($i = 0; $i < 10; $i++) {
            DB::table('registrations')->insert([
                'name' => $faker->name,
                'batch' => $faker->numberBetween(2000, 2022),
                'father_name' => $faker->name('male'),
                'blood' => $faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
               'photo' => 'photos/' . $faker->numberBetween(1, 2) . '.jpg',
                'tshirt' => $faker->randomElement(['M', 'L', 'XL']),
                'phone' => '01' . $faker->numberBetween(5,9) . $faker->numerify('########'),
                'email' => $faker->safeEmail,
                'profession' => $faker->randomElement(['শিক্ষক', 'ইঞ্জিনিয়ার', 'ডাক্তার', 'ব্যবসায়ী', 'সরকারি চাকরিজীবী']),
                'present_address' => $faker->address,
                'permanent_address' => $faker->address,
                'representative_name' => $faker->boolean ? $faker->name : null,
                'registration_type' => $faker->randomElement(['single', 'group']),
                'participant_count' => $faker->numberBetween(1, 5),
                'terms_agreed' => true,
                'amount' => $faker->randomFloat(2, 500, 2000),
                'bkash_num' => '01' . $faker->numberBetween(5,9) . $faker->numerify('########'),
                'bkash_trans_id' => strtoupper($faker->bothify('??##??##')),
                'payment_method' => $faker->randomElement(['bkash Agent', 'bkash personal']),
                'status' => $faker->randomElement(['painding', 'Approved', 'Cancel']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
