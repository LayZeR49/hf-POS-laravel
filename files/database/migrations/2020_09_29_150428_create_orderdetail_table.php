<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->bigIncrements('lid');
            $table->timestamps();
            $table->foreignId('oid');
            $table->foreignId('iid');
            $table->foreign('oid')->references('oid')->on('order');
            $table->foreign('iid')->references('iid')->on('item');
            $table->integer('iqty');
        });

        Artisan::call('db:seed', [
            '--class' => OrderDetailSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
}

