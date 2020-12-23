<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = [
            [
                'jenis_pizza' => 'Ultimate Cheese Melt',
                'stock' => 150,
                'harga' => 78000,
                'image' => 'https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/u/l/ultimatecheesemeltnew.png'
            ],  
            [
                'jenis_pizza' => 'Cheese Mania',
                'stock' => 150,
                'harga' => 45000,
                'image' => 'https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/c/h/cheese-mania-550x550px.png'
            ],
            [
                'jenis_pizza' => 'Double Beef Burger',
                'stock' => 150,
                'harga' => 41000,
                'image' => 'https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/d/o/double-beef-burger-550x550px.png'
            ],  
            [
                'jenis_pizza' => 'MeetZza',
                'stock' => 150,
                'harga' => 40000,
                'image' => 'https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/m/e/meatzza-550x550px.png'
            ], 
            [
                'jenis_pizza' => 'Chicken Lovers',
                'stock' => 150,
                'harga' => 45000,
                'image' => 'https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/c/h/chicken-lovers-550x550px.png'
            ], 
            [
                'jenis_pizza' => 'Grilled Beef Supreme',
                'stock' => 150,
                'harga' => 60000,
                'image' => 'https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/g/r/grill-beef-supreme-550x550px.png'
            ], 
       
            ];
        
        foreach($pizza as $key => $value){
            Pizza::create($value);
        }
    }
}
