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
        Schema::create('tbl_project', function (Blueprint $table) {
        $table->id('id_project');
        $table->string('title');
        $table->string('type');
        $table->string('area_size');
        $table->string('design_style');
        $table->string('address');
        $table->string('status');
        $table->date('date');
        $table->text('description');
        $table->string('image_thumbnail');
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
        Schema::dropIfExists('tbl_project');
    }
};
