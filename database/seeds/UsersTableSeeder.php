<?php

use Illuminate\Database\Seeder;

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
            'fname' => "diwakar",
            'lname' => "sharma",
            'DOB' => '1993-09-12',
            'type' => 'moderator',
            'email' => 'diwakar@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'fname' => "tarak",
            'lname' => "prabhu",
            'DOB' => '1993-09-12',
            'type' => 'regular',
            'email' => 'tarak@gmail.com',
            'password' => bcrypt('1234'),
        ]);
         DB::table('users')->insert([
            'fname' => "harry",
            'lname' => "patel",
            'DOB' => '1993-09-12',
            'type' => 'moderator',
            'email' => 'harry@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'fname' => "mani",
            'lname' => "jajula",
            'DOB' => '1993-09-12',
            'type' => 'regular',
            'email' => 'mani@gmail.com',
            'password' => bcrypt('1234'),
        ]);
         DB::table('users')->insert([
            'fname' => "chhavi",
            'lname' => "sharma",
            'DOB' => '1993-09-12',
            'type' => 'regular',
            'email' => 'chhavi@gmail.com',
            'password' => bcrypt('1234'),
        ]);
         DB::table('users')->insert([
            'fname' => "anil",
            'lname' => "kumar",
            'DOB' => '1993-09-12',
            'type' => 'regular',
            'email' => 'anil@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'fname' => "James",
            'lname' => "Taylor",
            'DOB' => '1993-09-12',
            'type' => 'regular',
            'email' => 'james@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
