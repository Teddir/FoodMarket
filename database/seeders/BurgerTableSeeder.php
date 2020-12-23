<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Burger;

class BurgerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $burger = [
            [
                'jenis_burger' => 'SanSpicy Chicken',
                'stock' => 150,
                'harga' => 35000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/November2019/0nR6ysDcMRuLttBeJ4Ho.png'
            ],  
            [
                'jenis_burger' => 'SanChicken',
                'stock' => 150,
                'harga' => 30000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2020/8d2xhfpKHuHnJANcaMZ7.png'
            ],
            [
                'jenis_burger' => 'SanFish',
                'stock' => 150,
                'harga' => 32000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/BFcnGCUwrw4CxkxDkahi.png'
            ],  
            [
                'jenis_burger' => 'Triple CheeseBurger',
                'stock' => 150,
                'harga' => 40000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/AfYw3Cwp5YqZ7wOP9aQu.png'
            ], 
            [
                'jenis_burger' => 'Double CheeeseBurger',
                'stock' => 150,
                'harga' => 35000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/apZ1DxDmKvwS2lV12Elp.png'
            ], 
            [
                'jenis_burger' => 'Burger Deluxe',
                'stock' => 150,
                'harga' => 30000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/August2020/NUfkX3XBlwCVguapu681.png'
            ], 
       
            ];
        
        foreach($burger as $key => $value){
            Burger::create($value);
        }
    }
}
