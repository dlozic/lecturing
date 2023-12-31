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
        Schema::create('pet_tag', function (Blueprint $table) {

            /* foreign keys, connected with other tables */
            $table->foreignId('tag_id')->constrained('tags');
            $table->foreignId('pet_id')->constrained('pets');

            /* primary key */
            $table->primary(['pet_id', 'tag_id']);

            /* created_at and updated_at */
            $table->timestamps();
        });

        $seed = [[
                'tag_id' => 1,
                'pet_id' => 1
        ], [
                'tag_id' => 2,
                'pet_id' => 1
        ]];

        DB::table('pet_tag')->insert($seed);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_tag');
    }
};
