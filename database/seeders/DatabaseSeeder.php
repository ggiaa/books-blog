<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Book::factory(25)->create();
        Writer::factory(5)->create();

        Category::create([
            "name_category" => "Fiction",
            "category_slug" => "fiction"
        ]);
        Category::create([
            "name_category" => "Nonfiction",
            "category_slug" => "nonfiction"
        ]);
    }
}
