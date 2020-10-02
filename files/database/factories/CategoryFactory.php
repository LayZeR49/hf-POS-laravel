<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    private $categories = ["Food", "Toys", "Pet", "Habitat", "Accesories"];
    private $categoryNo = 0;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        if ($this->categoryNo == 5) $this->categoryNo = 0;

        return [
            'cname' => $this->categories[$this->categoryNo++]
        ];
    }
}
