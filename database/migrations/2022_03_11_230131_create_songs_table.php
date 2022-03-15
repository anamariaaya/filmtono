<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video_url');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->restrictOnUpdate()
                ->restrictOnDelete();

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
        Schema::dropIfExists('songs');
    }
}
