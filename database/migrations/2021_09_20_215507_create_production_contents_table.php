<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_contents', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->comment('名称');
            $table->string('link',150)->comment('外链');
            $table->integer('view_count')->default(0)->comment('查看人数');
            $table->foreignId('production_categorie_id')->constrained()->onDelete('cascade')->comment('分类ID');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->comment('用户ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_contents');
    }
}
