<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Reynaldo',
            'lname' => 'Salvador',
            'email' => 'salvador@test.com',
            'phonenumber' => '9123456789',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '2',
            'user_id' => '2',
            'province' => 'Ilocos Norte',
            'city' => 'Pasuquin',
            'barangay' => 'Secret',
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Keith Angelo',
            'lname' => 'Tumaneng',
            'email' => 'tumaneng@test.com',
            'phonenumber' => '9123456788',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '3',
            'user_id' => '3',
            'province' => 'Cagayan',
            'city' => 'Secret',
            'barangay' => 'Secret',
        ]);

        DB::table('users')->insert([
            'id' => '4',
            'name' => 'Clyde Jolo',
            'lname' => 'Abinsay',
            'email' => 'abinsay@test.com',
            'phonenumber' => '9123456787',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '4',
            'user_id' => '4',
            'province' => 'Ilocos Norte',
            'city' => 'San Nicolas',
            'barangay' => 'Secret',
        ]);

        DB::table('users')->insert([
            'id' => '5',
            'name' => 'John Christopher',
            'lname' => 'De la Fuente',
            'email' => 'delafuente@test.com',
            'phonenumber' => '9123456723',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '5',
            'user_id' => '5',
            'province' => 'Ilocos Norte',
            'city' => 'Laoag',
            'barangay' => 'Secret',
        ]);

        DB::table('users')->insert([
            'id' => '6',
            'name' => 'Maverick Dave',
            'lname' => 'Aguinaldo',
            'email' => 'aguinaldo@test.com',
            'phonenumber' => '9123456782',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '6',
            'user_id' => '6',
            'province' => 'Ilocos Norte',
            'city' => 'Pasuquin',
            'barangay' => 'Secret',
        ]);


        DB::table('users')->insert([
            'id' => '7',
            'name' => 'Earl John',
            'lname' => 'Bumanglag',
            'email' => 'bumanglag@test.com',
            'phonenumber' => '9123456785',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '7',
            'user_id' => '7',
            'province' => 'Ilocos Norte',
            'city' => 'Banna',
            'barangay' => 'Secret ah',
        ]);

        DB::table('users')->insert([
            'id' => '8',
            'name' => 'Jomel',
            'lname' => 'Estavillo',
            'email' => 'estavillo@test.com',
            'phonenumber' => '9123456712',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '8',
            'user_id' => '8',
            'province' => 'Ilocos Norte',
            'city' => 'Dik ammo',
            'barangay' => 'Secret ah',
        ]);

        DB::table('users')->insert([
            'id' => '9',
            'name' => 'Jenno',
            'lname' => 'Vea',
            'email' => 'vea@test.com',
            'phonenumber' => '9123456713',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('user_details')->insert([
            'id' => '9',
            'user_id' => '9',
            'province' => 'Ilocos Norte',
            'city' => 'Dik ammo latta',
            'barangay' => 'Secret ah',
        ]);
    }
}
