<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemTrans;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        Item::create([
            'name' => 'Kikil'
        ]);
        Item::create([
            'name' => 'Buntut'
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'pembeli',
            'email' => 'pembeli@gmail.com',
            'password' => bcrypt('pembeli')
        ]);
        User::create([
            'name' => 'penjual',
            'email' => 'penjual@gmail.com',
            'password' => bcrypt('penjual')
        ]);
        ItemTrans::create([
            'item_id' => 1,
            'kgprice' => 100000,
            'weight' => 12,
            'status' => 'out',
            'user_id' => 2
        ]);
        ItemTrans::create([
            'item_id' => 1,
            'kgprice' => 80000,
            'weight' => 13,
            'status' => 'in',
            'user_id' => 2
        ]);

    }
}
