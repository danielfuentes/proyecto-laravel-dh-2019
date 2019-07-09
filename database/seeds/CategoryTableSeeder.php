<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('categories')->exists()) {
            DB::table('categories')->insert([
                'name' => 'Buzos'
            ]);
            DB::table('categories')->insert([
                'name' => 'Jeans'
            ]);
            DB::table('categories')->insert([
                'name' => 'Remeras'
            ]);
        }

    }
}
