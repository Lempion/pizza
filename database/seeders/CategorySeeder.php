<?php

namespace Database\Seeders;

use App\Enums\CategoryEnum;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slugs = CategoryEnum::getValues();

        foreach ($slugs as $slug) {
            Category::factory()->create([
                'slug' => $slug,
                'name' => Str::ucfirst($slug),
            ]);
        }
    }
}
