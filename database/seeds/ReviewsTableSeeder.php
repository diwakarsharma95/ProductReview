<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'This is a good product',
            'product_id' => '1',
            'user_id' => '1'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Very Nice',
            'product_id' => '1',
            'user_id' => '2'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Very good product',
            'product_id' => '1',
            'user_id' => '3'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Awesome man',
            'product_id' => '1',
            'user_id' => '4'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Awesome product',
            'product_id' => '1',
            'user_id' => '5'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Awesome item',
            'product_id' => '1',
            'user_id' => '6'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'good one',
            'product_id' => '1',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Great high end beast of a notebook, capable of performing everything from video editing to high end gaming with its GTX 1070 video card and superior cooling this thing can handle everything I have thrown at it so far and feels high end premium build with no crazy colours so can pass a pro machine in discrete.',
            'product_id' => '6',
            'user_id' => '4'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'capable of performing everything',
            'product_id' => '2',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'high end gaming with its GTX 1070 video',
            'product_id' => '3',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'superior cooling',
            'product_id' => '4',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Great high end beast of a notebook, capable of performing everything',
            'product_id' => '5',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'feels high end premium build',
            'product_id' => '6',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'premium build with no crazy colours',
            'product_id' => '7',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'premium build with no crazy colours so can pass a pro machine in discrete',
            'product_id' => '8',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => ' capable of performing everything',
            'product_id' => '9',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'Great high end beast of a notebook, capable of performing everything from video editing to high end gaming',
            'product_id' => '10',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'high end beast of a notebook',
            'product_id' => '11',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'great notebook',
            'product_id' => '12',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'good one',
            'product_id' => '13',
            'user_id' => '7'
        ]);
        DB::table('reviews')->insert([
            'rating' => '5',
            'review' => 'good product.',
            'product_id' => '14',
            'user_id' => '7'
        ]);
        
        
    }
}
