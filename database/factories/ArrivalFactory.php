<?php

namespace Database\Factories;

use App\Arrival;
use App\Terminal;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArrivalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Arrival::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $terminals = Terminal::all()->pluck('id');
        $rand_time = $this->faker->dateTimeBetween('-3 months', '+3 months');


        return [
            //
            'terminal_id' => $terminals->random(),
            'or_no' => mt_rand(00000000, 999999999),
            'time' => $rand_time,
        ];
    }
}
