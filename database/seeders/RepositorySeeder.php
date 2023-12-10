<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Repository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID"); 
        Repository::create([
            'title' => 'Repository 1',
            'author' => 'Author 1', 
            'year' => '2023', 
            'description' => 'Description 1'
        ]);
    }
}       