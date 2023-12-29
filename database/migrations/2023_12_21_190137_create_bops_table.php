<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBopsTable extends Migration
{
    public function up()
    {
        Schema::create('bops', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('item');
            $table->unsignedInteger('nominal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bops');
    }
}
