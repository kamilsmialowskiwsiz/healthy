<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'w61277@student.wsiz.rzeszow.pl',
                'is_admin'=>'1',
                'bmi'=>'0',
                'bmr'=>'0',
                'maxrep'=>'0',
               'password'=> bcrypt('98090306591'),
            ],
            [
               'name'=>'User',
               'email'=>'user@student.wsiz.rzeszow.pl',
                'is_admin'=>'0',
                'bmi'=>'0',
                'bmr'=>'0',
                'maxrep'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}