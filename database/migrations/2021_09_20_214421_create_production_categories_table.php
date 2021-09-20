<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->comment('名称');
            $table->text('description')->nullable()->comment('描述');
            $table->integer('post_count')->default(0)->comment('作品数量');
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
        Schema::dropIfExists('production_categories');
    }
}
