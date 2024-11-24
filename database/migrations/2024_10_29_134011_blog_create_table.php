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
        Schema::create('blogs', function(Blueprint $table){
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('images')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
