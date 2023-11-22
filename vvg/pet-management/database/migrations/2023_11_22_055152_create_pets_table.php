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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->float('weight')->default(0);
            $table->integer('age')->nullable();

            /* foreign keys, connected with other tables */
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('breed_id')->constrained('breeds');
            
            /* created_at and updated_at */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
