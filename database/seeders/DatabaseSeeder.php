<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\CoAuthor;
use App\Models\User;
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
//         User::factory(10)->create();
        Book::factory()
            ->count(9)
            ->for(Author::factory())
            ->hasAttached(CoAuthor::factory()->count(3))
            ->create();
    }
}
