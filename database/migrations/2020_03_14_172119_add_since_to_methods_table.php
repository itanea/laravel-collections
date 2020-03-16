<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSinceToMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('methods', function (Blueprint $table) {
            // add 'since' fields to know which laravel's version implments this collection
            $table->string('since')->nullable()->after('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('methods', function (Blueprint $table) {
            // remove since column
            $table->dropColumn('since');
        });
    }
}
