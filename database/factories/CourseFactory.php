<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       => 1, 
            'title'         => $this->faker->sentence, 
            'body'          => $this->faker->text(100), 
            'teacher'       => $this->faker->name, 
            'date_start'    => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'date_end'      => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'date_limit'    => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'limit_number'  => $this->faker->randomDigit, 
            'image'         => $this->faker->imageUrl($width = 370, $height = 270),
        ];
    }
}
