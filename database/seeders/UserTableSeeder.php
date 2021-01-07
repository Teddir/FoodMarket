<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'email' => 'narithachy@gmail.com',
                'name' => 'naritha cahya',
                'password' => bcrypt('daus231213')
            ], 
            [
                'email' => 'sfdaus27@gmail.com',
                'name' => 'sukma firdaus',
                'password' => bcrypt('daus231213')
            ]
            ];
        
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
