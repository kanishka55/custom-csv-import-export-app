<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    
    public function definition(): array
    {
        //generate a random number of skills
        $numberOfSkills = rand(1,5);

        //generate an array of random skills
        $skills = [];
        for($i = 0; $i<$numberOfSkills; $i++)
        {
            $skills[] = $this->faker->jobTitle;
        }

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'address' => $this->faker->address(),
            'skills' => json_encode($skills),
            'basic_salary' => $this->faker->randomFloat(2, 20000, 50000)
        ];
    }
}
