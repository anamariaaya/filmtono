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
        $user->status = true;
        $user->assignRole('Admin');
        $user->save();

        $user = new User();
        $user->name = "Rogelio Tangarife";
        $user->email = "rtangarife@gmail.com";
        $user->password = Hash::make('Rto.2021');
        $user->status = true;
        $user->assignRole('Admin');
        $user->save();
        
        $user = new User();
        $user->name = "Cantante 1";
        $user->email = "cantante1@gmail.com";
        $user->password = Hash::make('cantante1');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 2";
        $user->email = "cantante2@gmail.com";
        $user->password = Hash::make('cantante2');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 3";
        $user->email = "cantante3@gmail.com";
        $user->password = Hash::make('cantante3');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 4";
        $user->email = "cantante4@gmail.com";
        $user->password = Hash::make('cantante4');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 5";
        $user->email = "cantante5@gmail.com";
        $user->password = Hash::make('cantante5');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 6";
        $user->email = "cantante6@gmail.com";
        $user->password = Hash::make('cantante6');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 7";
        $user->email = "cantante7@gmail.com";
        $user->password = Hash::make('cantante7');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 8";
        $user->email = "cantante8@gmail.com";
        $user->password = Hash::make('cantante8');
        $user->status = true;
        $user->assignRole('Artist');
        $user->save();

        $user = new User();
        $user->name = "Cantante 9";
        $user->email = "cantante9@gmail.com";
        $user->password = Hash::make('cantante9');
        $user->status = false;
        $user->assignRole('Artist');
        $user->save();
    }
}
