<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->string('slug')->unique();
            $table->string('cover')->nullable();

            $table->boolean('available');
            $table->float('US_price', 5, 2);
            $table->date('on_sale_date');
            $table->integer('volume_issue');
            $table->string('trim_size');
            $table->integer('page_count');
            $table->string('rated');
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
        Schema::dropIfExists('comics');
    }
}
