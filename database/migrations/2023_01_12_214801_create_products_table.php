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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posted_by')->constrained()->cascadeOnDelete();
            $table->string('product_name');
            $table->string('Brand');
            $table->enum('Category', ['Shampoo', 'Conditioner', 'Leave_In_Conditioner',"Gel","Hair_Volume","Hair_Mask","Hair_wash"]);
            $table->enum('Type', ["Protein", "moisturizer"]);
            $table->text('description');
            $table->string('tags');
            $table->binary('product_image');
            $table->boolean('has_sulfate');
            $table->boolean('has_silicon');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
