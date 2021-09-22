<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescribeAndThumbnailToProductionContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_contents', function (Blueprint $table) {
            //
            $table->text('describe')->comment('作品描述');
            $table->string('thumbnail')->comment('作品小图');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production_contents', function (Blueprint $table) {
            //
            $table->dropColumn(['describe', 'thumbnail']);
        });
    }
}
