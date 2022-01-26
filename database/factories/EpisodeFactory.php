<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Episode;
use Illuminate\Support\Str;

class EpisodeFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

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
            'course_id'=> Course::all()->random()->id
            //
        ];
    }
}
