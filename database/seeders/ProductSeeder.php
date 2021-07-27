<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = "1225441";

        function test($value)
        {
            for ($i = 0; $i > strlen($value); $i++) {
                echo substr($value, $i, $i + 1) . substr("000000", 1, (strlen($value) - $i));
            }
        }
        // Product::factory()->count(100)->create();
    }
}
