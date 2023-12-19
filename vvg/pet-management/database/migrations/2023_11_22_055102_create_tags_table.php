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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->unique();

            /* created_at and updated_at */
            $table->timestamps();
        });

        $seed = [
            ['name' => 'Crazy'],
            ['name' => 'Lazy'],
            ['name' => 'Sleepy'],
            ['name' => 'Hungry'
        ]];

        DB::table('tags')->insert($seed);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
