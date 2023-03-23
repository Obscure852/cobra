<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory{

    public function definition(){
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'gender' => fake()->randomElement(['F','M']),
            'dob' => fake()->date(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'cellphone' => fake()->randomElement(['71869852','72975342','71471232','71627274']),
            'nationality' => fake()->randomElement(['Botswana','Namibia','Uganda','South Africa','Zimbabwe']),
            'status' => fake()->randomElement(['Current','Left','Sick Leave','Unpaid Leave']),
            'profile_image' => "default.png",
            'position' => fake()->randomElement(['Technical Support','Support Manager','Operations Manager','Manging Director']),
            'type' => fake()->randomElement(['Permanent','Temporary','Contract']),
            'venue' => fake()->randomElement(['Office 1','Office 2','Office 3','Office 4','Office 5']),
            'system_role' => fake()->randomElement(['Administrator','HR Admin','HR View','Tasks Admin','Tasks View']),
            'reporting_to' => "",
            'address' => fake()->address(),
            'contacts' => fake()->numerify('#######'),
            'qualifications' => fake()->randomElement(['BSc Computer Science','BSc Accounting','BICA','ACCA','Diploma In Computer Studies']),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(){
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
