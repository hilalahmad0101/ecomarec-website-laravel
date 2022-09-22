<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $title=fake()->sentence(3);
        return [
            'sub_category_name'=>$title,
            'slug'=>$title,
            'image'=>'https://random.imagecdn.app/500/150',
            'cat_id'=>rand(6,15),
        ];
    }
}
