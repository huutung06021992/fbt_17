<?php

use Illuminate\Database\Seeder;


class BookTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Book::class, 5)->create();
    }
}
