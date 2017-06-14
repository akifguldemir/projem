<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Akif Güldemir",
            "email"=>"akifguldemir@gmail.com",
            "password"=>bcrypt(190500)
        ]);

        DB::table("role_user")->insert(["role_id"=>"1","user_id"=>"1"]);
        DB::table("role_user")->insert(["role_id"=>"2","user_id"=>"1"]);
        DB::table("role_user")->insert(["role_id"=>"3","user_id"=>"1"]);
    }
}
