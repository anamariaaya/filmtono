<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Electronics";
        $category->status = true;
        $category->save();

        $category = new Category();
        $category->name = "Gaming";
        $category->status = true;
        $category->save();

        $category = new Category();
        $category->name = "Suspense";
        $category->status = true;
        $category->save();
    }
}
