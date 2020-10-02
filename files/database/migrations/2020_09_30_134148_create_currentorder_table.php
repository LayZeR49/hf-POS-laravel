<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currentorder', function (Blueprint $table) {
            $table->bigIncrements('coid');
            $table->timestamps();
            $table->foreignId('iid')->unique();
            $table->foreign('iid')->references('iid')->on('item');
            $table->integer('iqty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currentorder');
    }
}
