<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogjatripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogjatrip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namadestinasi',30);
            $table->string('destinasi',30);
            $table->string('htm',30);
            $table->string('alamat',550);
            $table->string('gambar',550);

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
        Schema::dropIfExists('jogjatrip');
    }
}
