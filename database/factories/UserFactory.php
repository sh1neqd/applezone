<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
//class UserFactory extends Factory
//{
//    /**
//     * The current password being used by the factory.
//     */
//    protected static ?string $password;
//
//    /**
//     * Define the model's default state.
//     *
//     * @return array<string, mixed>
//     */
//    public function definition(): array
//    {
//        return [
//            'name' => fake()->name(),
//            'email' => fake(),
//            'email_verified_at' => now(),
//            'password' => static::$password ??= Hash::make('password'),
//            'remember_token' => Str::random(10),
//'user_name' => fake()
//            $table->string('user_surname');
//            $table->string("phone_number")->unique();
//            $table->string('password');
//            $table->timestamp('created_at')->nullable();
//        ];
//    }
//
//}
