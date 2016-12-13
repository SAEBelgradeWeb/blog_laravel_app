<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['title' => 'music']);
        Tag::create(['title' => 'sport']);
        Tag::create(['title' => 'lifestyle']);
        Tag::create(['title' => 'travel']);

    }
}
