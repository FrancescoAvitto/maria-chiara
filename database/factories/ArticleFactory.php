<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
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
            'title' => $title,
            'slug' => preg_replace('/[^A-Za-z0-9-]+/', '-', $title),
            'subtitle' => $this->faker->sentence(),
            'body' => $this->faker->text(),
            'published' => false,
            'in_evidence' => false,
            'metadescription' => $this->faker->sentence(),
        ];
    }
}
