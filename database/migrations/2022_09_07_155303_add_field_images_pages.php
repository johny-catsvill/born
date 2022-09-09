<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldImagesPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function($table) {
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function($table) {
            $table->removeColumn('image_1');
            $table->removeColumn('image_2');
            $table->removeColumn('image_3');
            $table->removeColumn('image_4');

        });
    }
}
