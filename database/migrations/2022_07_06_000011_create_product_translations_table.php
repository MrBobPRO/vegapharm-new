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
        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->integer('product_id');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('instruction')->nullable();
            $table->text('description')->nullable();
            $table->text('composition')->nullable();
            $table->text('indication')->nullable();
            $table->text('use')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_translations');
    }
};
