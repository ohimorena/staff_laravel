<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'surname' => $this->faker->lastName($gender),
            'name' => $this->faker->firstName($gender),
            'patronymic' => $this->faker->middleName($gender),
            'sex' => $gender,
            'date_of_birth' => $this->faker->date
        ];
    }
}