<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\Package;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Meal::create([
            'name' => 'veg',
            'slug' => 'veg'
        ]);

        Meal::create([
            'name' => 'non veg',
            'slug' => 'non-veg'
        ]);

        Package::create([
            'name' => 'half veg',
            'slug' => 'half-veg',
            'meal_id' => 1,
            'type' => 0,
            'price' => 65
        ]);

        Package::create([
            'name' => 'full non veg',
            'slug' => 'full-non-veg',
            'meal_id' => 2,
            'type' => 1,
            'price' => 150
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'mobile' => '9876543210',
            'role' => 1,
            'status' => 1,
        ]);

        User::create([
            'name' => 'Delivery',
            'email' => 'delivery@gmail.com',
            'password' => bcrypt('12345678'),
            'mobile' => '9876543210',
            'role' => 2,
            'status' => 1,
        ]);
        User::create([
            'name' => 'User 1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'mobile' => '9876543210',
            'role' => 3,
            'status' => 1,
        ]);
        User::create([
            'name' => 'User 2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('12345678'),
            'mobile' => '9876543210',
            'role' => 3,
            'status' => 1,
        ]);

        UserDetail::create([
            'user_id' => 3,
            'package_id' => 1,
            'time' => 'MN',
            'home_address' => 'xyz',
            'office_address' => 'pqr',
        ]);

        UserDetail::create([
            'user_id' => 4,
            'package_id' => 2,
            'time' => 'N',
            'home_address' => 'abc',
        ]);
    }
}
