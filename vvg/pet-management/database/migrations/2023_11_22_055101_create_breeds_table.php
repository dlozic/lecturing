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
        Schema::create('breeds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->unique();

            /* created_at and updated_at */
            $table->timestamps();
        });

        $seed = [
            ['name' => 'German Shepherd'],
            ['name' => 'Bulldog'],
            ['name' => 'Beagle'],
            ['name' => 'Poodle'],
            ['name' => 'Rottweiler'],
            ['name' => 'Yorkshire Terrier'],
            ['name' => 'Pointer'],
            ['name' => 'Boxer']
        ];

        DB::table('breeds')->insert($seed);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
