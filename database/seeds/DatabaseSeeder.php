<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(RootUserTableSeeder::class);
    }
}
