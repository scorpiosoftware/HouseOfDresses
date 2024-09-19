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
                'id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                ['name_en' => "ABAYAS",],
                ['name_en' => "SUMMER DRESSES",],
                ['name_en' => "FALL / WINTER",],
                ['name_en' => "RAMADAN / EID",],
                ['name_en' => "SALES",],
                ['name_en' => "COLLECTIONS",],
            ]
        );
    }
}
