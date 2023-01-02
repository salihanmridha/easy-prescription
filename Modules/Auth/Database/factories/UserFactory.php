<?php
namespace Modules\Auth\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Auth\Entities\User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $userType = ["Admin", "Doctor", "Patient"];
      return [
          'email' => $this->faker->unique()->safeEmail(), //user unique email
          'user_type' => $userType[array_rand($userType)], //user unique email
          'email_verified_at' => now(),
          'password' => '$2b$10$4aQY.aO6vh8pa3n7TEPtQO/yMnsOUiQp5gy940zIjHUcLGCeAf4Ki', // password

      ];
    }
}
