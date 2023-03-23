<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

return new class extends Migration{
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('nationality')->nullable();
            $table->string('status')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('position')->nullable();
            $table->string('type')->nullable();
            $table->string('venue')->nullable();
            $table->string('system_role')->nullable();
            $table->string('reporting_to')->nullable();
            $table->string('address')->nullable();
            $table->string('contacts')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'firstname' => 'Thato',
            'lastname' => 'Obuseng',
            'gender' => 'M',
            'dob' => fake()->date(),
            'Cellphone' => '71 86 97 52',
            'nationality' => 'Motswana',
            'status' => 'Current',
            'profile_image' => 'avatar-1.jpg',
            'position' => 'Technical Support',
            'type' => 'Permanent',
            'venue' => 'Office 5',
            'system_role' => 'Administrator',
            'reporting_to' => '',
            'address' => 'Kgale View, Plot 51223',
            'contacts' => '72 975 342',
            'qualifications' => 'Computer Science',
            'email' => 'support@imagelife.co',
            'password' => Hash::make('Obuseng87'),
        ]);
    }

    public function down(){
        Schema::dropIfExists('users');
    }
};
