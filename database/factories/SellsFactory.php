<?php

namespace Database\Factories;

use App\Models\sells;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sells::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'fecha' => now(),
            'dia' => rand(1,31),
            'cantidad' => rand(1,10),
            'precio' => 12,
            'impPagado' => 0,
            'impDebe' => 0,
            'producto' => 'agua',
            'observaciones' => '-'
        ];
    }
}
