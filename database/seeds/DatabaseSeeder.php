<?php

use App\User;
use App\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('admins')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);

        DB::table('service_providers')->insert([
            'name' => Str::random(10),
            'email' => 'provider@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);

        DB::table('states')->insert([
            'state' => Str::random(10)
        ]);
        DB::table('cities')->insert([
            'city' => Str::random(10)
        ]);
        DB::table('types')->insert([
            'type' => 'Service provider'
        ]);
        DB::table('types')->insert([
            'type' => 'Material Provider'
        ]);
        DB::table('specialities')->insert([
            'speciality' => 'Mechanic',
        ]);
        DB::table('specialities')->insert([
            'speciality' => 'Electrician',
        ]);
        DB::table('specialities')->insert([
            'speciality' => 'Furniture',
        ]);
        DB::table('specialities')->insert([
            'speciality' => 'Other',
        ]);*/

        DB::table('categories')->insert([
            'name' => 'Electrical',
        ]);
        DB::table('categories')->insert([
            'name' => 'Access Control',
        ]);

        DB::table('categories')->insert([
            'name' => 'Acounts and Finance',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sound System',
        ]);
        DB::table('categories')->insert([
            'name' => 'Human Resource',
        ]);

    }
}
