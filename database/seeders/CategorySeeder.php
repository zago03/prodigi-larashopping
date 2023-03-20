<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     private $categories= [
            [
                "id"=> 1,
                "name"=> "Uomo"  
            ],
            [
                "id"=> 2,
                "name"=> "Donna" 
            ],
            [
                "id"=> 3,
                "name" => "Bambino" 
            ]
        ];

    public function run():void
    {
        foreach($this->categories as $category)
        {
            //insert nel db
            Category::create([
                "name"=> $category['name']
            ]);
        }
         
    }
}
