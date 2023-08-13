<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            "name"=>"Samsung Glaxay C10",
            "price"=>"40000",
            "description"=>"A smart mobile with 6GB ram and much more features.",
            "catagory"=>"Mobile",
            "gallary"=>"https://hamariweb.com/mobiles/samsung/samsung-galaxy-c10-images"
        
            ] ,
            
            [
            "name"=>"Samsung QN85C 4K",
            "price"=>"375000",
            "description"=>"A smart TV much more features.",
            "catagory"=>"TV",
            "gallary"=>"https://bakar.pk/cdn/shop/products/50au70007_1024x1024.jpg?v=1663145133"
        
            ]
            ,
            
         [
                "name"=>"TCL S400",
                "price"=>"56990",
                "description"=>"A smart TV with much more features.",
                "catagory"=>"TV",
                "gallary"=>"https://aws-obg-image-lb-2.tcl.com/content/dam/brandsite/product/tv/s/s5400/ksp-image/kv-pc-2.jpg"
            
        ]
            ,
        [
                "name"=>"Dawalance DW 132S",
                "price"=>"44000",
                "description"=>"A smart microwave oven with much more features.",
                "catagory"=>"Microwave Oven",
                "gallary"=>"https://www.dawlance.com.pk/media/resize/F11061012600_LO3_20220624_155837.png/265Wx265H/image.webp"
            
        ]
                
    
    ]);
    }
}
