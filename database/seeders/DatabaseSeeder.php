<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table("users")->insert([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> hash::make('password'),
            'admin' => '1'

        ]);

        DB::table("users")->insert([
            'id' => '2',
            'name' => 'steve',
            'email' => 'steve@gmail.com',
            'password'=> hash::make('password'),
            'admin' => '0'

        ]);

        DB::table("users")->insert([
            'id' => '3',
            'name' => 'joe',
            'email' => 'joe@gmail.com',
            'password'=> hash::make('password'),
            'admin' => '0'

        ]);

        DB::table('items')->insert([
            'Name' => 'The Long-line puffer jacket',
            'ProductType' => 'Coat',
            'Size' => 'S',
            'Price' => '29.99',
            'Description' => "Keep warm this winter with our unisex Longline Puffer Jacket. This jacket will make a great addition to your winter essentials. So, keep your style the same because it's cold outside!
            ",
            'Image' => 'coat1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'The Long-line puffer jacket',
            'ProductType' => 'Coat',
            'Size' => 'M',
            'Price' => '29.99',
            'Description' => "Keep warm this winter with our unisex Longline Puffer Jacket. This jacket will make a great addition to your winter essentials. So, keep your style the same because it's cold outside!
    ",
            'Image' => 'coat1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'The Long-line puffer jacket',
            'ProductType' => 'Coat',
            'Size' => 'L',
            'Price' => '29.99',
            'Description' => "Keep warm this winter with our unisex Longline Puffer Jacket. This jacket will make a great addition to your winter essentials. So, keep your style the same because it's cold outside!
    ",
            'Image' => 'coat1.png'
        ]);



        DB::table('items')->insert([
            'Name' => 'The fashion first jacket',
            'ProductType' => 'Coat',
            'Size' => 'S',
            'Price' => '24.99',
            'Description' => "Amp up your winter closet with not just warmth but Style! Take your look to new levels with this black aviator jacket.

",
            'Image' => 'coat2.png'
        ]);


        DB::table('items')->insert([
            'Name' => 'The fashion first jacket',
            'ProductType' => 'Coat',
            'Size' => 'M',
            'Price' => '24.99',
            'Description' => "Amp up your winter closet with not just warmth but Style! Take your look to new levels with this black aviator jacket.",
            'Image' => 'coat2.png'
        ]);


        DB::table('items')->insert([
            'Name' => 'The fashion first jacket',
            'ProductType' => 'Coat',
            'Size' => 'L',
            'Price' => '24.99',
            'Description' => "Amp up your winter closet with not just warmth but Style! Take your look to new levels with this black aviator jacket",
            'Image' => 'coat2.png'
        ]);


        DB::table('items')->insert([
            'Name' => 'The faux-fur dream',
            'ProductType' => 'Coat',
            'Size' => 'S',
            'Price' => '29.99',
            'Description' => "This quilted winter jacket with a detachable soft faux fur collar is a must for every student if you ask us!",
            'Image' => 'coat3.png'
        ]);


        DB::table('items')->insert([
            'Name' => 'The faux-fur dream',
            'ProductType' => 'Coat',
            'Size' => 'M',
            'Price' => '29.99',
            'Description' => "This quilted winter jacket with a detachable soft faux fur collar is a must for every student if you ask us!",
            'Image' => 'coat3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'The faux-fur dream',
            'ProductType' => 'Coat',
            'Size' => 'L',
            'Price' => '29.99',
            'Description' => "This quilted winter jacket with a detachable soft faux fur collar is a must for every student if you ask us!",
            'Image' => 'coat3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: Black',
            'ProductType' => 'Hoodie',
            'Size' => 'S',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: Black',
            'ProductType' => 'Hoodie',
            'Size' => 'M',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: Black',
            'ProductType' => 'Hoodie',
            'Size' => 'L',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: light heather grey',
            'ProductType' => 'Hoodie',
            'Size' => 'S',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: light heather grey',
            'ProductType' => 'Hoodie',
            'Size' => 'M',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: light heather grey',
            'ProductType' => 'Hoodie',
            'Size' => 'L',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: Vanilla',
            'ProductType' => 'Hoodie',
            'Size' => 'S',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: Vanilla',
            'ProductType' => 'Hoodie',
            'Size' => 'M',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Custom Style UniLife: Vanilla',
            'ProductType' => 'Hoodie',
            'Size' => 'L',
            'Price' => '15',
            'Description' => "Layer up to lectures this winter with our Custom Style UniLife Hoodies. Featuring long sleeves and ribbed trims for a comfortable fit, an adjustable drawstring hood",
            'Image' => 'hoodie3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Grey',
            'ProductType' => 'Joggers',
            'Size' => 'S',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Grey',
            'ProductType' => 'Joggers',
            'Size' => 'M',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Grey',
            'ProductType' => 'Joggers',
            'Size' => 'L',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Beige',
            'ProductType' => 'Joggers',
            'Size' => 'S',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Beige',
            'ProductType' => 'Joggers',
            'Size' => 'M',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Beige',
            'ProductType' => 'Joggers',
            'Size' => 'L',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers2.png'
        ]);



        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Black',
            'ProductType' => 'Joggers',
            'Size' => 'S',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Black',
            'ProductType' => 'Joggers',
            'Size' => 'M',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Unisex Everyday Joggers - Black',
            'ProductType' => 'Joggers',
            'Size' => 'L',
            'Price' => '10.99',
            'Description' => "The Unisex Everyday Joggers are finally here! Our joggers fit perfectly and feature cuffed ankles, metal-tipped inside drawstring waist & extra-deep pockets.",
            'Image' => 'joggers3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Grey Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'S',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Grey Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'M',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Grey Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'L',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt1.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Black Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'S',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Black Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'M',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Black Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'L',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt2.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Blue Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'S',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Blue Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'M',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt3.png'
        ]);

        DB::table('items')->insert([
            'Name' => 'Everyday Heather Blue Tee',
            'ProductType' => 'T-Shirt',
            'Size' => 'L',
            'Price' => '7.49',
            'Description' => "Our Everyday short-sleeve unisex tees are made from 100% cotton. The regular fit is suitable for any build. Soft stretch, comfortable and stylish, featuring a crew neck placement and a large contrasting print on the front.",
            'Image' => 'T-shirt3.png'
        ]);


        DB::table('adminorders')->insert([
            'Name' => 'The Long-line puffer jacket',
            'ProductType' => 'Coat',
            'stocked' => '70'
        ]);


        DB::table('adminorders')->insert([
            'Name' => 'The fashion first jacket',
            'ProductType' => 'Coat',
            'stocked' => '70'
        ]);

        DB::table('adminorders')->insert([
            'Name' => 'The faux-fur dream',
            'ProductType' => 'Coat',
            'stocked' => '70'
        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Custom Style UniLife: Black',
            'ProductType' => 'Hoodie',
            'stocked' => '100'
        ]);

        DB::table('adminorders')->insert([
            'Name' => 'Custom Style UniLife: light heather grey',
            'ProductType' => 'Hoodie',
            'stocked' => '100'

        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Custom Style UniLife: Vanilla',
            'ProductType' => 'Hoodie',
            'stocked' => '100'

        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Unisex Everyday Joggers - Grey',
            'ProductType' => 'Joggers',
            'stocked' => '80'

        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Unisex Everyday Joggers - Beige',
            'ProductType' => 'Joggers',
            'stocked' => '80'

        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Unisex Everyday Joggers - Black',
            'ProductType' => 'Joggers',
            'stocked' => '80'

        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Everyday Heather Grey Tee',
            'ProductType' => 'T-Shirt',
            'stocked' => '50'

        ]);


        DB::table('adminorders')->insert([
            'Name' => 'Everyday Heather Black Tee',
            'ProductType' => 'T-Shirt',
            'stocked' => '50'

        ]);

        DB::table('adminorders')->insert([
            'Name' => 'Everyday Heather Blue Tee',
            'ProductType' => 'T-Shirt',
            'stocked' => '50'

        ]);


    }
}
