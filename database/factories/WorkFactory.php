<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'name' => $title,
            'description' => $this->faker->sentence(),
            'slug' => preg_replace('/[^A-Za-z0-9-]+/', '-', $title),
            'keywords' => 'ciao',
            'cover' => '',
        ];
    }
}
