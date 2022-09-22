<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title=fake()->sentence();
        return [
            'category_name'=>$title,
            'slug'=>Str::slug($title,'-'),
            'image'=>'https://random.imagecdn.app/500/150',
            'status'=>1
        ];
    }
}
