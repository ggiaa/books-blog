<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Writer;
use App\Models\Category;
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

        Genre::create([
            "category_id" => "1",
            "genre_name" => "Fantasy",
            "slug_name" => "fantasy"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Science Fiction",
            "slug_name" => "science-fiction"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Action & Adventure",
            "slug_name" => "action-&-adventure"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Mystery",
            "slug_name" => "mystery"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Horror",
            "slug_name" => "horror"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Thriller",
            "slug_name" => "thriller"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Historical Fiction",
            "slug_name" => "historical-fiction"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Romance",
            "slug_name" => "romance"
        ]);
        Genre::create([
            "category_id" => "1",
            "genre_name" => "Children’s",
            "slug_name" => "children’s"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Autobiography",
            "slug_name" => "autobiography"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Biography",
            "slug_name" => "biography"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Food & Drink",
            "slug_name" => "food-&-drink"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Art & Photography",
            "slug_name" => "art-&-photography"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Self-help",
            "slug_name" => "self-help"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "History",
            "slug_name" => "history"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "True Crime",
            "slug_name" => "true-crime"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Humor",
            "slug_name" => "humor"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Guide / How-to",
            "slug_name" => "guide-/-how-to"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Humanities & Social Sciences",
            "slug_name" => "humanities-&-social-sciences"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Parenting & Families",
            "slug_name" => "parenting-&-families"
        ]);
        Genre::create([
            "category_id" => "2",
            "genre_name" => "Science & Technology",
            "slug_name" => "science-&-technology"
        ]);
    }
}
