<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = "Faizan";
        $user->email = "faizan.rehman52@gmail.com";
        $user->password = Hash::make("password"); // password
        $user->save();

        $user = new User();

        $user->name = "John";
        $user->email = "JohnDoe@gmail.com";
        $user->password = Hash::make("password"); // password
        $user->save();


    }
}
