<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('iid');
            $table->timestamps();
            $table->string('iname');
            $table->integer('iprice');
            $table->integer('iquantity');
            $table->foreignId('cid');
            $table->foreign('cid')->references('cid')->on('category');
        });

        Artisan::call('db:seed', [
            '--class' => ItemSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
