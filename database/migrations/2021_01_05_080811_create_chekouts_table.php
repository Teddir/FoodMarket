<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChekoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chekouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jumlah_pesanan');
            $table->string('quantity');
            $table->string('subtotal');
            $table->string('status')->comment('0 = proses, 1 = dikirim');
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
        Schema::dropIfExists('chekouts');
    }
}
