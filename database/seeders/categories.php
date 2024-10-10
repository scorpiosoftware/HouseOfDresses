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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'role_id' => 1
            ]
        );
        DB::table('carousels')->insert(
            [
                ['id' => "1",],
                ['id' => "2",],
            ]
        );
        DB::table('categories')->insert(
            [
                ['name_en' => "ABAYAS",],
                ['name_en' => "DRESSES",],
                ['name_en' => "KAFTANS",],
                ['name_en' => "MUKHAWE",],
            ]
        );
        DB::table(table: 'collections')->insert(
            [
                ['name_en' => "YOU ARE A GEM",],
                ['name_en' => "RAMADAN EID 2024",],
                ['name_en' => "SUMMER 2023",],
                ['name_en' => "LOVE YOURSELF",],
            ]
        );
        DB::table(table: 'sizes')->insert(
            [
                ['name_en' => "custom measurement",],
            ]
        );

        DB::table("generals")->insert([
            ["news_title"=> "FREE INTERNATIONAL SHIPPING FOR ORDERS ABOVE AED1000 | NOW ON APPSTORE AND PLAYSTORE",],
        ]);
    }
}
