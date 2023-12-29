<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRugiBulanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rugi_bulanans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->decimal('jumlah', 10, 2); // Ubah sesuai tipe data dan presisi yang diperlukan
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
        Schema::dropIfExists('rugi_bulanans');
    }
}
