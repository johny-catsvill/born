<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function($table) {
            $table->string('main_link');
            $table->string('main_link_name');
            $table->longText('top_text')->comment('tone');
            $table->string('h3');
            $table->longText('middle_text')->comment('ttwo');
            $table->string('h3_2')->comment('h32');
            $table->longText('bottom_text')->comment('tthree');
            $table->string('distance')->comment('dest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function($table) {
            $table->removeColumn('main_link');
            $table->removeColumn('main_link_name');
            $table->removeColumn('top_text');
            $table->removeColumn('h3');
            $table->removeColumn('middle_text');
            $table->removeColumn('h3_2');
            $table->removeColumn('bottom_text');
            $table->removeColumn('distance');
        });
    }
}
