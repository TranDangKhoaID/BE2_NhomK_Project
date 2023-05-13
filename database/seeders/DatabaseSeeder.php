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
            'id' => 1,
            'name' => 'Giay De Vuong',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>34090000,
            'image'=> '1.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => 'Giay De Vuong 2',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>34090000,
            'image'=> '2.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Giay De Vuong 3',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>34090000,
            'image'=> '3.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'Giay De Vuong 3',
            'manu_id' =>1,
            'type_id' =>3,
            'price' =>1460000,
            'image'=> '4.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Giay De Vuong 3',
            'manu_id' =>2,
            'type_id' =>4,
            'price' =>5790000,
            'image'=> '3.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 6,
            'name' => 'Giay De Vuong 3',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>9090000,
            'image'=> '7.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => 'Giay De Vuong 3',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>2090080,
            'image'=> '7.png',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        //prototype
        
        DB::table('protypes')->insert([
            'type_id' => 1 ,
            'type_name' => 'Shoes',              
        ]);
            
        DB::table('protypes')->insert([
            'type_id' =>2,
            'type_name' =>'Footwear',
        ]);
        DB::table('protypes')->insert([
            'type_id' =>3,
            'type_name' =>'Accessories',
        ]);
        DB::table('protypes')->insert([
            'type_id' =>4,
            'type_name' =>'Dresses',
        ]);        
        DB::table('protypes')->insert([
            'type_id' =>5,
            'type_name' =>'Handbags',
        ]);  
        //manu
        DB::table('manufactures')->insert([
            'manu_id' => 1 ,
            'manu_name' => 'Adidas',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>2,
            'manu_name' =>'Balenciaga',
        ]);
        DB::table('manufactures')->insert([
            'manu_id' => 3 ,
            'manu_name' => 'Nike',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>4,
            'manu_name' =>'Luis Vuiton',
        ]);
    }
}
