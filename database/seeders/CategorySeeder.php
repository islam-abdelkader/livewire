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
        Category::create(
            [
                'name' => 'Web Development',
            ]);
        Category::create(

            [
                'name' => 'Mobile Development',
            ]);
        Category::create(
            [
                'name' => 'Web Design',
            ]);
    }
}
