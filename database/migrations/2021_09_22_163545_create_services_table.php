<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index()->comment('项目名称');
            $table->text('describe')->comment('描述');
            $table->decimal('price', 8, 2)->default(0.00)->comment('价格');
            $table->jsonb('guarantee')->nullable()->comment('保障');
            $table->string('ytd')->default('month')->comment('year 年 month 月');
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
        Schema::dropIfExists('services');
    }
}
