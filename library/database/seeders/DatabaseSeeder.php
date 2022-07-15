<?php

namespace Database\Seeders;

use App\Models\book;
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
        book::create([
            'title' => 'blue moon',
            'author' => 'someone',
            'status' => '1',
            'release_date' => '1500-01-09',
            'description' => 'description'
        ]);
        book::create([
            'title' => 'blue moon1',
            'author' => 'someone1',
            'status' => '1',
            'release_date' => '1000-01-09',
            'description' => 'description 1'
        ]);
        book::create([
            'title' => 'blue moon2',
            'author' => 'someone2',
            'status' => '0',
            'release_date' => '1600-01-09',
            'description' => 'description 2'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
