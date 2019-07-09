<?php

use Illuminate\Database\Seeder;
use App\User;

class RootUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('users')->exists()) {
        $rootUser = factory(User::class, 1)->create();
        }
    }
}
