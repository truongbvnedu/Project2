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
        Schema::create('learning_processes', function (Blueprint $table) {
            $table->id();
             $table->integer('maths');
            $table->integer('natural');
            $table->integer('PE');
            $table->integer('soft_skills');
            $table->integer('civic');
            $table->integer('Vietnamese');
            $table->integer('subject');
            $table->integer('total');
            $table->string('comment')->nullable();
            $table->foreignId('childId')->constrained('child');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_processes');
    }
};
