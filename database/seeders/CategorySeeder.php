<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'General',
            'slug' => 'general',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General1',
            'slug' => 'general1',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General2',
            'slug' => 'general2',
            'status' => Category::STATUS_ACTIVE,
        ]);
    }
}
