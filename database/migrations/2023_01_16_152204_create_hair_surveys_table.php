<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hair_surveys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_dyed');
            $table->enum('hair_type', ['Straight', 'Wavy', 'Curly','Coily']);
            $table->enum('hair_Structure', ['Fine', 'Medium', 'Coarse']);
            $table->enum('hair_Moisture', ['Dry', 'Balanced', 'Oily']);
            $table->enum('hair_Thickness', ['Thin', 'Medium', 'Thick']);
            $table->integer('age');

            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hair_surveys');
    }
};
