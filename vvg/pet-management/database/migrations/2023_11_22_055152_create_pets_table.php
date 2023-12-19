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
            $table->foreignId('breed_id')
                  ->nullable()
                  ->constrained('breeds');
            
            /* created_at and updated_at */
            $table->timestamps();
        });

        $seed = [[
                'name' => 'Rex',
                'weight' => 25.5,
                'age' => 2,
                'user_id' => 1,
                'breed_id' => 1
        ], [
                'name' => 'Max',
                'weight' => 15.5,
                'age' => 1,
                'user_id' => 1,
                'breed_id' => 2
        ]];

        DB::table('pets')->insert($seed);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
