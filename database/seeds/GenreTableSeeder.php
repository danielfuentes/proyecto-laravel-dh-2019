<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('genres')->exists()) {
            DB::table('genres')->insert([
                'name' => 'Man'
            ]);
            DB::table('genres')->insert([
                'name' => 'Woman'
            ]);
            DB::table('genres')->insert([
                'name' => 'Kids'
            ]);
        }
    }
}
