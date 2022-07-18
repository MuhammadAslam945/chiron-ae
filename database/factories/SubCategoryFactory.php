<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($category_name);
        return [
            //
            'category_id'=>$this->faker->numberBetween(1,9),
            'name'=>$category_name,
            'slug'=>$slug,
            
        ];
    }
}
