<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        $product_name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($product_name);
        return [
            //
            'name'=>$product_name,
            'slug'=>$slug,
            'short-desc'=>$this->faker->text(100),
            'desc'=>$this->faker->text(500),
            'price'=>$this->faker->numberBetween(100,1000),
            'SKU'=>'CHIRON'.$this->faker->unique()->numberBetween(10,2000),
            'stock_status'=> 'Instock' ,
            'quantity'=>$this->faker->numberBetween(10,100),
            'image'=>'product'.$this->faker->numberBetween(1,50).'.jpg',
            'category_id'=>$this->faker->numberBetween(1,9),
            'weight'=>$this->faker->numberBetween(10,1000)
        ];
    }
}
