<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Ana Maria Aya";
        $user->email = "anamariaaya@gmail.com";
        $user->password = Hash::make('ark2021*');
        $user->assignRole('Admin');
        $user->save();

        $user = new User();
        $user->name = "Rogelio Tangarife";
        $user->email = "rtangarife@gmail.com";
        $user->password = Hash::make('Rto.2021');
        $user->assignRole('Admin');
        $user->save();
        
        User::factory(12)->create();
    }
}
