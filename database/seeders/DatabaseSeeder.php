<?php

namespace Database\Seeders;

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HomeSliderSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SongSeeder::class);
        $this->call(PlaylistSeeder::class);
    }
}
