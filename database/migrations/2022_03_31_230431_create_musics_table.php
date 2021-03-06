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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('artist_id')->constrained();
            $table->foreignId('style_id')->constrained();
            $table->foreignId('album_id')->nullable()->constrained();
            $table->string('image');
            $table->string('mp3_320')->nullable();
            $table->string('mp3_128')->nullable();
            $table->text('description');
            $table->date('is_publish');
            $table->integer('count_view')->default(0);
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
        Schema::dropIfExists('musics');
    }
};
