<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
               "image" => "https://cdn.shopify.com/s/files/1/1400/5987/products/black-coffee-mug-with-seahorse-design-deep-etched-integrity-bottles-2540705316980_2000x.png?v=1571303305",
               "name" => "Premium Coffee Mug",
               "category" => "mugs",
               "description" => "pretty mug",
               "price" => 30
        
            ],
            [
                "image" => "https://shopiranart.com/wp-content/uploads/2021/03/Enamel-on-pottery-mug-Garden-Design-1.jpg",
                "name" => "Enamel on pottery mug",
                "category" => "mugs",
                "description" => "enamel mug",
                "price" =>  35
         
            ],
             [
                "image"=> "https://i.pinimg.com/originals/3c/52/ad/3c52ad3337cef040cbb0abc3442416c2.jpg",
                "name"=> "Dashiki design",
                "category"=> "hoodies",
                "description"=> "warm designer hoodie",
                "price" => 150
         
             ],
        ];
        
        DB::table('products')->insert($products);
    }
}
