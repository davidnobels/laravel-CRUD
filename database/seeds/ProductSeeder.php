<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) {
          $product = new Product;
          $product->nama = $faker->text($maxNbChars = 20);
          $product->jumlah = $faker->randomDigit;
          $product->satuan = $faker->randomElement($array = array ('kg','ton','pcs'));
          $product->harga_awal = $faker->numberBetween($min = 1000, $max = 9000);
          $product->save();
        }
    }
}
