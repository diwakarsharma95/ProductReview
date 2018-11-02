<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProductUserTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(DislikesTableSeeder::class);
    }
}
