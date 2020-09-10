<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       => 1, 
            'responsible'   => $this->faker->name, 
            'title'         => $this->faker->sentence(1), 
            'description'   => $this->faker->sentence(5), 
            'local'         => $this->faker->streetAddress, 
            'date'          => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'hour'          => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'image'         => $this->faker->imageUrl($width = 370, $height = 270),
        ];
    }
}
