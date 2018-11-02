<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'MacBook Air',
            'price'=>'600',
            'manufacturer_id'=>1,
            'image'=>'products_images/1.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Notebook 7',
            'price'=>'567',
            'manufacturer_id'=>2,
            'image'=>'products_images/2.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Surface Pro 4',
            'price'=>'987',
            'manufacturer_id'=>3,
            'image'=>'products_images/3.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'MacAir',
            'price'=>'1325',
            'manufacturer_id'=>1,
            'image'=>'products_images/4.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'MacPro',
            'price'=>'1600',
            'manufacturer_id'=>1,
            'image'=>'products_images/5.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Dell Inspiron 1525',
            'price'=>'768',
            'manufacturer_id'=>4,
            'image'=>'products_images/6.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Dell Inspiron Mini Series',
            'price'=>'1200',
            'manufacturer_id'=>4,
            'image'=>'products_images/7.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Dell Latitude',
            'price'=>'1500',
            'manufacturer_id'=>4,
            'image'=>'products_images/8.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Dell Studio',
            'price'=>'1000',
            'manufacturer_id'=>4,
            'image'=>'products_images/9.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Portege R30-D',
            'price'=>'1400',
            'manufacturer_id'=>5,
            'image'=>'products_images/10.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);DB::table('products')->insert([
            'name'=>'Portege R30-C',
            'price'=>'980',
            'manufacturer_id'=>5,
            'image'=>'products_images/11.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Portégé X20-E',
            'price'=>'1800',
            'manufacturer_id'=>5,
            'image'=>'products_images/12.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Portégé X20',
            'price'=>'1100',
            'manufacturer_id'=>5,
            'image'=>'products_images/13.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=>'Portégé X30 (4G)',
            'price'=>'1250',
            'manufacturer_id'=>5,
            'image'=>'products_images/14.jpg',
            'description'=>'Whether you are looking for premium materials, pure mobility or meaningful innovation for an upgraded experience, the Inspiron family has it all. .With up to the latest generation Intel® and AMD processors, robust memory and storage and up to UHD displays, This laptop and 2-in-1s offer everything you might need in a compact design. Transition between laptop, tent, tablet or stand modes as you edit photos, update your blog, stream your favorite entertainment or prepare a report.',
             'link'=> 'https://www.google.com',
            'updated_at'=>\DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
