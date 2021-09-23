<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->comment('昵称');
            $table->string('email')->unique()->index()->comment('邮箱');
            $table->string('avatar')->comment('头像');
            $table->text('introduction')->nullable()->comment('简介');
            $table->string('realname', 5)->nullable()->index()->comment('真实姓名');
            $table->string('occupation', 30)->nullable()->index()->comment('职位');
            $table->string('slug',30)->comment('主页后缀');
            $table->string('domain', 120)->nullable()->comment('自定义域名');
            $table->text('excerpt')->nullable()->comment('简介摘录');
            $table->boolean('fredom')->default(true)->comment('自由职业 true 接受 false 不接受');
            $table->timestamp('email_verified_at')->nullable()->comment('邮箱认证时间');
            $table->string('password')->comment('密码');
            $table->rememberToken()->comment('记住我 token');
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
        Schema::dropIfExists('users');
    }
}
