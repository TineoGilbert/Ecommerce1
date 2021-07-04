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
        //
        DB::table('products')->insert([
            [
            'name' => 'Samsung s6 Edge +',
            'price' => '120',
            'description' => 'SmartPhone with a 4GB of RAM',
            'category' => 'Mobile',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8NEyH7nQJl33E1lC7Npsi6z7YAfogEtOt8A&usqp=CAU'
            ],

            [
            'name' => 'Iphone 10',
            'price' => '260',
            'description' => 'SmartPhone with a 16GB of RAM and more features',
            'category' => 'Mobile',
            'gallery' => 'https://i.blogs.es/17a962/iphonex-front-homescreen/450_1000.jpg'
            ],

            [
            'name' => 'Laptop NoteBook',
            'price' => '375',
            'description' => 'Newest Laptop 15.6 12GB RAM - Windows 10',
            'category' => 'Laptop',
            'gallery' => 'https://ae01.alicdn.com/kf/Hb09f6a167496492baa3af0bbac45fa14z/Newest-Laptop-15-6-J4125-12G-RAM-Windows-10-Pro-Notebook-IPS-Business-PC-Computer-Laser.jpg_Q90.jpg_.webp'
            ]
        ]);
    }
}
