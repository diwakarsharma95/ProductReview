<?php

use Illuminate\Database\Seeder;

class ProductUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_user')->insert([
            'user_id' => 1,
            'product_id' => 1,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 1,
            'product_id' => 2,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 1,
            'product_id' => 3,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 2,
            'product_id' => 1,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 2,
            'product_id' => 4,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 3,
            'product_id' => 6,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 3,
            'product_id' => 5,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('product_user')->insert([
            'user_id' => 3,
            'product_id' => 4,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
