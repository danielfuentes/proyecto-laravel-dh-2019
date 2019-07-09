<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('sizes')->exists()) {

        DB::table('sizes')->insert([
            'size' => 'S'
        ]);
        DB::table('sizes')->insert([
            'size' => 'M'
        ]);
        DB::table('sizes')->insert([
            'size' => 'L'
        ]);
        DB::table('sizes')->insert([
            'size' => 'XL'
        ]);
        }
    }
}
