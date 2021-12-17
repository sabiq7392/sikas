<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Kasir']
        ];
        $status = [
            ['name' => 'Active'],
            ['name' => 'Unactive']
        ];
        $users = [
            ['status_id' => 1, 'role_id' => 1, 'name' => 'Azmi', 'email' => 'azmi@gmail.com', 'password' => bcrypt('password')],
            ['status_id' => 1, 'role_id' => 2, 'name' => 'Sabiq', 'email' => 'sabiq@gmail.com', 'password' => bcrypt('password')],
            ['status_id' => 2, 'role_id' => 2, 'name' => 'Alfatih', 'email' => 'alfatih@gmail.com', 'password' => bcrypt('password')]
        ];

        $categories = [
            ['name' => 'Makanan'],
            ['name' => 'Minuman'],
            ['name' => 'Elektronik'],
        ];

        $items = [
            ['user_id' => 1, 'category_id' => 1, 'name' => 'Mie Sedap', 'price_per_box' => 144000, 'product_per_box' => 48, 'stock_box' => 10],
            ['user_id' => 2, 'category_id' => 2, 'name' => 'Coca Cola', 'price_per_box' => 360000, 'product_per_box' => 60, 'stock_box' => 10],
            ['user_id' => 2, 'category_id' => 3, 'name' => 'Televisi', 'price_per_box' => 27000000, 'product_per_box' => 6, 'stock_box' => 4],
        ];


        for ($i = 0; $i < count($roles); $i++) {
            Role::create($roles[$i]);
            Status::create($status[$i]);
        }

        for ($i = 0; $i < count($categories); $i++) {
            User::create($users[$i]);
            Category::create($categories[$i]);
            Item::create($items[$i]);
        }
    }
}
