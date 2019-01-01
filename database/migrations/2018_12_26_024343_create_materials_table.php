<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();



//            $table->integer('created_by')->unsigned();
//            $table->unsignedInteger('user_id');
//            $table->integer('approved_by')->nullable()->unsigned();
//            $table->integer('rejected_by')->nullable()->unsigned();
//            $table->integer('updated_by')->nullable()->unsigned();
//            $table->unsignedInteger('material_type_id')->unsigned();
//            $table->integer('status')->default(0);
//            $table->integer('authorized')->nullable();


//            $table->foreign('material_type_id')->references('id')->on('material_types');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
