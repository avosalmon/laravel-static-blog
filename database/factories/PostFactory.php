<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

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
        $body = '';
        $paragraphs = $this->faker->paragraphs(10);
        foreach ($paragraphs as $paragraph) {
            $body .= "<p>{$paragraph}</p>";
        }

        return [
            'id' => $this->faker->uuid(),
            'author_id' => '0ef38926-14b8-43be-907c-2b8f25460b34',
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(5),
            'body' => $body,
            'published' => true,
            'publish_date' => $this->faker->dateTimeThisYear(),
            'featured_image' => 'https://d3kvywu94yn7wx.cloudfront.net/images/E5oIsdodQqGbBDxuDOzY76ae7QX007tm4aC7VmSo.png',
            'featured_image_caption' => 'Deploy your laravel app as a static site.',

        ];
    }
}
