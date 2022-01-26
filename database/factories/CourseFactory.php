<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\User;

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
            'title'=> $this->faker->sentence(),
            'description'=> $this->faker->paragraphs(3,true),
            'user_id'=> User::all()->random()->id
            //
        ];
    }
}
