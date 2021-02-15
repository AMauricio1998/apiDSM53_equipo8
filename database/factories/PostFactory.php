<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' =>$this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text(800),
            'image' => $this->faker->imageUrl(12800,720),
            'metatag' => $this->faker->text(7),
            'autor' => $this->faker->sentence,
            'date' => $this->faker->datetime,

            'user_id' =>rand(1,100),
            'category_id' =>rand(1,100),

        ];
    }
}
