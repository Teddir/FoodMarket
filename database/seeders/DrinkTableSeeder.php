<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drink = [
            [
                'jenis_minuman' => 'Coke',
                'stock' => 150,
                'harga' => 12000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/D8LeTajQpFSuUbAsugUq.png'
            ],  
            [
                'jenis_minuman' => 'Sprite',
                'stock' => 150,
                'harga' => 12000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/5nIDFH9VTNE16UcjnnyW.png'
            ],
            [
                'jenis_minuman' => 'Fanta',
                'stock' => 150,
                'harga' => 12000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/4kZxwImpnHUrHGb4KDL5.png'
            ],  
            [
                'jenis_minuman' => 'Mineral Water',
                'stock' => 150,
                'harga' => 10000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/QtyJ4HRDfdF07TI8VuBr.png'
            ], 
            [
                'jenis_minuman' => 'Lemon Tea',
                'stock' => 150,
                'harga' => 12000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/mx9q6nIAPvTEzA6l2e61.png'
            ], 
            [
                'jenis_minuman' => 'Iced Milo',
                'stock' => 150,
                'harga' => 12000,
                'image' => 'https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/qiex9z1po0AbZv5PDIhd.png'
            ], 
        ];
       
        
        foreach($drink as $key => $value){
            Drink::create($value);
        }
    }
}