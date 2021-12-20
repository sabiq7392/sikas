<?php

namespace Database\Seeders;

use App\Models\Box;
use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
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

        $box = [
            'id' => IdGenerator::generate(['table' => 'boxes', 'length' => 12, 'prefix' => "BOX-"]),
            'status' => 'pending',
            'sender' => 'PT. Jarvis Solusi',
            'receiver' => 'PT. Indomie',
            'address' => 'Jl. Kemangun',
            'telepon' => '08881212123'
        ];

        $items = [
            ['user_id' => 1, 'category_id' => 1, 'box_id' => 'BOX-00000001', 'name' => 'Mie Sedap', 'price' => 144000, 'value' => 48],
            ['user_id' => 2, 'category_id' => 2, 'box_id' => 'BOX-00000001', 'name' => 'Coca Cola', 'price' => 360000, 'value' => 60],
            ['user_id' => 2, 'category_id' => 3, 'box_id' => 'BOX-00000001', 'name' => 'Televisi', 'price' => 27000000, 'value' => 6],
        ];

        Box::create($box);

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
