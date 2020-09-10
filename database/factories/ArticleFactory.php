<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       => 1,
            'title'         => $this->faker->sentence(5),
            'author'        => $this->faker->name,
            'description'   => $this->faker->text(100),
            'category'      => $this->faker->word,
            'body'          => $this->faker->text(300),
            'image'         => $this->faker->imageUrl($width = 770, $height = 450),
        ];
    }
}
