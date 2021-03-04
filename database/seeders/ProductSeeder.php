<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Iphone 12 Pro-Max',
                'price'=>'1000',
                'description'=>('IPhone 12 Pro Max 6.7 Super Retina XDR display2'),
                'category'=>"mobile",
                'gallery'=>"https://hosty.xxx/i/4cf22c047214e9219c7a91136113b1d646db6fea.jpg",
            ],
            [
                'name'=>'Iphone 12 Pro',
                'price'=>'1099',
                'description'=>('Apple iPhone 12 Pro · Released 2020, October 23 · 189g, 7.4mm thickness · iOS 14.1 '),
                'category'=>"mobile",
                'gallery'=>"https://hosty.xxx/i/ed8e7d23eee2900300ccf3a0856b992e1b71df5d.jpg",
            ],
            [
                'name'=>'MacBook Pro',
                'price'=>'1,699.00',
                'description'=>('Apple M1 chip with 8‑core CPU, 8-core GPU and 16-core Neural Engine'),
                'category'=>"Laptop",
                'gallery'=>"https://hosty.xxx/i/028e5001ff546cd152e81915faa7ab83824a7538.jpg",
            ],
            [
                'name'=>'MacBook Air',
                'price'=>'1,299.00 ',
                'description'=>('Apple M1 chip with 8‑core CPU, 7‑core GPU and 16‑core Neural Engine'),
                'category'=>"Laptop",
                'gallery'=>"https://hosty.xxx/i/8da7a97de7ea7acf6e8f02f4adee993a90168edc.jpg",
            ],
            [
                'name'=>'iPad Pro ',
                'price'=>'749.00',
                'description'=>('You can take a notes , Fantastic '),
                'category'=>"iPad",
                'gallery'=>"https://hosty.xxx/i/eb0a0c437618887519c22b7cab1a336e4a668dd6.jpg",
            ],
            [
                'name'=>'Apple iMac ',
                'price'=>'14.099',
                'description'=>(' Display Display 21.5-inch (diagonal) LED-backlit display ·'),
                'category'=>"iMac",
                'gallery'=>"https://hosty.xxx/i/49517c55179dc8229cb331b50470a9eaeb302bc9.jpg",
            ]
        ]);

    }
}
