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
        Category::create([
            'name' => 'General3',
            'slug' => 'general3',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General4',
            'slug' => 'general4',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General5',
            'slug' => 'general5',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General6',
            'slug' => 'general6',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General7',
            'slug' => 'general7',
            'status' => Category::STATUS_ACTIVE,
        ]);
        Category::create([
            'name' => 'General8',
            'slug' => 'general8',
            'status' => Category::STATUS_ACTIVE,
        ]);
    }
}
