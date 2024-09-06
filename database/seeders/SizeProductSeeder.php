<?php

namespace Database\Seeders;

use App\Models\SizeProduct;
use Illuminate\Database\Seeder;

class SizeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizeProducts = ['Small', 'Medium', 'Large', '0.3 L', '0.5 L', '1 L', '1 PCS', '2 PCS', '4 PCS', 'Combo'];

        foreach ($sizeProducts as $sizeProduct) {
            $visible = true;
            if ($sizeProduct === 'Combo'){
                $visible = false;
            }
            SizeProduct::factory()->create(['name' => $sizeProduct, 'visible' => $visible]);
        }
    }
}
