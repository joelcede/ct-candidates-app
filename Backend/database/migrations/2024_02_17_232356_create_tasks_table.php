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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('order');
            $table->boolean('completed');
            $table->bigInteger('usercreate')->unsigned();
            $table->bigInteger('userassigned')->unsigned();
            $table->timestamps();
            $table->foreign('usercreate')->references('id')->on('users');
            $table->foreign('userassigned')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
