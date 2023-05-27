<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //shoes
        DB::table('products')->insert([
            'name' => 'AMBUSH X AIR FORCE 1 LOW PHANTOM',
            'manu_id' =>1,
            'type_id' =>1,
            'price' =>150,
            'image'=> '1.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'SB X AIR JORDAN 4 RETRO SP PINE GREEN',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>60,
            'image'=> '2.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR FORCE 1 ESSENTIAL LOW WHITE GYM RED',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>200,
            'image'=> '3.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR FORCE 1 ESSENTIAL LOW WHITE GYM RED',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>200,
            'image'=> '4.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR FORCE 1 ESSENTIAL LOW WHITE GYM RED',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>200,
            'image'=> '5.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR FORCE 1 ESSENTIAL LOW WHITE GYM RED',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>200,
            'image'=> '6.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR JORDAN 1 RETRO HIGH OG CHICAGO LOST & FOUND',
            'manu_id' =>1,
            'type_id' =>2,
            'price' =>170,
            'image'=> '7.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'KAWS JAPAN HOLIDAY TEE BLACK',
            'manu_id' =>3,
            'type_id' =>2,
            'price' =>30,
            'image'=> '6.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'UNDEFEATED WHITE',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>40,
            'image'=> '7.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR MAX 97 WHITE DARK GREY',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>600,
            'image'=> '8.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR MAX 97 WHITE DARK GREY',
            'manu_id' =>1,
            'type_id' =>2,
            'price' =>50,
            'image'=> '9.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'MLB PLAYBALL ORIGIN MULE BLACK',
            'manu_id' =>2,
            'type_id' =>3,
            'price' =>200,
            'image'=> '10.png',
            'description' =>  '      
            - Standard quality Rep 1:1
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'AIR FORCE 1 WHITE - REP 1:1',
            'manu_id' =>3,
            'type_id' =>4,
            'price' =>90,
            'image'=> '11.png',
            'description' =>  '      
            Standard quality Rep 1:1 Tushoes (Better price and better quality with 1:1 reps, super high on the market)
            - Shipping nationwide [ Check the goods before paying ]
            -100% Photo taken directly at Tu Shoes
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'MLB NY CREAM',
            'manu_id' =>1,
            'type_id' =>1,
            'price' =>120,
            'image'=> '12.png',
            'description' =>  '      
            - Quality Rep 1:1 [ Cover check ]
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'YEEZY BOOST 350 V2 3M REFLECTIVE',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>200,
            'image'=> '13.png',
            'description' =>  '      
            1:1 quality using upgraded compression boost technology and upgraded upper is more complete
            - Go 1 size up from the standard size
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'MLB PLAYBALL ORIGIN MULE WHITE',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>200,
            'image'=> '14.png',
            'description' =>  '      
            - Standard quality 98% Tu Shoes
            - Wear 1 size back from the standard

            - Can order other color products in 2 weeks
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'DUNK LOW PRO SB LASER ORANGE',
            'manu_id' =>3,
            'type_id' =>4,
            'price' =>70,
            'image'=> '15.png',
            'description' =>  '      
            - Standard quality Rep 1:1
            - Shipping nationwide [ Check the goods before paying ]
            - 100% Photo taken directly at Tu Shoes
            - Product Lifetime Warranty
            - 7 Days Return No Reason
            ',
            'feature' => 1,
            'created_at' => now(),
        ]);
        //prototype 
        DB::table('protypes')->insert([
            'type_id' => 1 ,
            'type_name' => 'Shoes',              
        ]);
            
        DB::table('protypes')->insert([
            'type_id' =>2,
            'type_name' =>'Clothes',
        ]);
        DB::table('protypes')->insert([
            'type_id' =>3,
            'type_name' =>'Accessory',
        ]);
        DB::table('protypes')->insert([
            'type_id' =>4,
            'type_name' =>'Sandal',
        ]);
        //manu
        DB::table('manufactures')->insert([
            'manu_id' => 1 ,
            'manu_name' => 'Nike',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>2,
            'manu_name' =>'Adidas',
        ]);
        DB::table('manufactures')->insert([
            'manu_id' => 3 ,
            'manu_name' => 'Gucci',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>4,
            'manu_name' =>'MC QUEEN',
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>5,
            'manu_name' =>'Balenciaga',
        ]);
        //Slide
        DB::table('sliders')->insert([
            'title1' =>'Sale products',
            'title2' =>'nike Ari max 2023',
            'title3' =>'Lorem Ipsum is simply dummy text of the printing',
            'image' =>'slider-1.jpg',
        ]);
        DB::table('sliders')->insert([
            'title1' =>'Sale products',
            'title2' =>'nike Ari max 2023',
            'title3' =>'Lorem Ipsum is simply dummy text of the printing',
            'image' =>'slider-2.jpg',
        ]);
        DB::table('sliders')->insert([
            'title1' =>'Sale products',
            'title2' =>'nike Ari max 2023',
            'title3' =>'Lorem Ipsum is simply dummy text of the printing',
            'image' =>'slider-3.jpg',
        ]);
        //blogs
        DB::table('blogs')->insert([
            'image' =>'5.jpg',
            'title' =>'WOMEN WORLDWIDE SHOES',
            'author' =>'Tran Dang KHoa',
            'content' =>'
            Buying a pair of famous running shoes is really not an easy task. Not because of a lack of choice, but on the contrary, the problem lies in having too many choices, 
            especially for women is running shoes. At the same time, each person has their own running style and preferences, making shopping more complicated than ever. 
            Before you become confused and make the wrong decision when buying a pair of women is sneakers, 
            let Myshoes help you find the best option.
            We have carefully studied the key factors to make a women is sports shoe, especially when used for running. Let explore these important 
            factors with Myshoes to find the best shoe for you!
            ',
        ]);
        DB::table('blogs')->insert([
            'image' =>'6.jpg',
            'title' =>'Feature Product',
            'author' =>'Le Minh Hieu',
            'content' =>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...',
        ]);
    }
}
