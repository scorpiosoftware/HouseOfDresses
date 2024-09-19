<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
        [
            'name'=>'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1
        ]
        );
        DB::table('categories')->insert(
            [
                [ 'name_en' =>"Best Seller",],
                [ 'name_en' =>"HAIR CARE",],
                [ 'name_en' =>"BODY CARE",],
                [ 'name_en' =>"FACE CARE",],
                [ 'name_en' =>"SUN CARE",],
            ]
        );
    }
}
