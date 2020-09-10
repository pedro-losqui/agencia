<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       => 1, 
            'title'         => $this->faker->sentence(1), 
            'description'   => $this->faker->sentence(5), 
            'image'         => $this->faker->imageUrl($width = 370, $height = 270),
        ];
    }
}
