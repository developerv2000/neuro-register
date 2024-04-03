<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'birthday' => fake()->date(),
            'birth_place' => fake()->city(),
            'gender' => fake()->word(),
            'address' => fake()->name(),
            'phone' => fake()->numberBetween(100000000, 999999999),
            'job' => fake()->word(),
            'nationality' => fake()->country(),
            'desease_start_age' => fake()->numberBetween(20, 40),
            'pregnancy_number' => fake()->numberBetween(1, 6),
            'mother_age_while_birth' => fake()->numberBetween(20, 40),
            'father_age_while_birth' => fake()->numberBetween(20, 40),
            'mother_deseases_on_pregnancy_period' => fake()->words(3, true),
            'weight_and_hieght_after_birth' => fake()->numberBetween(1, 3),
            'start_sitting' => fake()->numberBetween(1, 3),
            'start_standing' => fake()->numberBetween(1, 3),
            'start_walking' => fake()->numberBetween(1, 3),
            'start_speaking' => fake()->numberBetween(1, 3),
            'start_school' => fake()->numberBetween(1, 3),
            'past_illnesses' => fake()->numberBetween(1, 3),

            'survey_height' => fake()->numberBetween(10, 50),
            'survey_weight' => fake()->numberBetween(10, 50),
            'survey_constitution' => fake()->numberBetween(10, 50),
            'head_circle' => fake()->numberBetween(10, 50),
            'head_deformations' => fake()->numberBetween(10, 50),
            'face_covers' => fake()->numberBetween(10, 50),
            'face_deformation' => fake()->numberBetween(10, 50),
            'neck_form' => fake()->numberBetween(10, 50),
            'neck_mobility' => fake()->numberBetween(10, 50),
            'breast_circle' => fake()->numberBetween(10, 50),
            'breast_deformation' => fake()->numberBetween(10, 50),
            'stomach_deformation' => fake()->numberBetween(10, 50),
            'stomach_anomalies' => fake()->numberBetween(10, 50),
            'back_deformation' => fake()->numberBetween(10, 50),
            'back_anomalies' => fake()->numberBetween(10, 50),
            'limbs_limited_mobility' => fake()->numberBetween(10, 50),
            'limbs_deformation' => fake()->numberBetween(10, 50),

            'shoulder_circle_right' => fake()->numberBetween(10, 50),
            'shoulder_circle_left' => fake()->numberBetween(10, 50),
            'forearm_circle_right' => fake()->numberBetween(10, 50),
            'forearm_circle_left' => fake()->numberBetween(10, 50),
            'wrist_circle_right' => fake()->numberBetween(10, 50),
            'wrist_circle_left' => fake()->numberBetween(10, 50),
            'hip_circle_right' => fake()->numberBetween(10, 50),
            'hip_circle_left' => fake()->numberBetween(10, 50),
            'shin_circle_right' => fake()->numberBetween(10, 50),
            'shin_circle_left' => fake()->numberBetween(10, 50),
            'ankle_circle_right' => fake()->numberBetween(10, 50),
            'ankle_circle_left' => fake()->numberBetween(10, 50),
        ];
    }
}
