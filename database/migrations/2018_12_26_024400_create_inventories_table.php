<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('material_id');
//            $table->unsignedInteger('user_id');
            $table->integer('quantity');
            $table->timestamps();


//            $table->integer('user_id')->unsigned();
//            $table->integer('approver_id')->nullable()->unsigned();
//            $table->integer('status_id');
//            $table->date('expiration_date');
//            $table->integer('uom_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
