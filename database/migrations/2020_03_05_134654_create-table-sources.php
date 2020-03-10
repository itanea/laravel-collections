<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('order');
            $table->text('comment');
            $table->timestamps();
            $table->unsignedBigInteger('method_id');
            $table->foreign('method_id')
                ->references('id')
                ->on('methods')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sources');
    }
}
