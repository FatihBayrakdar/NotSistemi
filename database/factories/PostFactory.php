<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug(),
            'Yazili1' => $this->faker->sentence(),
            'Yazili2' => $this->faker->sentence(),
            'Yazili3' => $this->faker->sentence(),
            'Performans1' => $this->faker->sentence(),
            'Performans2' => $this->faker->sentence(),
            'Proje' => $this->faker->sentence(),
        ];
    }
}
