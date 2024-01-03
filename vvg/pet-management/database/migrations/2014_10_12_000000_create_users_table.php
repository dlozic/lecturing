<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('name', 30);
            $table->string('email')->unique();
            $table->string('password');

            /* created_at and updated_at */
            $table->timestamps();
        });

        $seed = [[
                'name' => 'John Admin',
                'email' => 'admin@pet-management.com',
                'password' => bcrypt('admin') // hashing password
        ], [
                'name' => 'Jane User',
                'email' => 'user@pet-management.com',
                'password' => bcrypt('user')
        ]];

        DB::table('users')->insert($seed);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
