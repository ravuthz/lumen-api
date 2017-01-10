<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('description')->default('');
            $table->string('book')->default('notebook');
            $table->integer('author');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('notes');
    }
}
