<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(SizeProductSeeder::class);

        $this->call(ProductSeeder::class);
    }
}
