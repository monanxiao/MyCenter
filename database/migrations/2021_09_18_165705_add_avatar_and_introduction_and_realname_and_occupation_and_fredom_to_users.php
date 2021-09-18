<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarAndIntroductionAndRealnameAndOccupationAndFredomToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('introduction')->nullable()->comment('简介');
            $table->string('realname', 5)->nullable()->index()->comment('真实姓名');
            $table->string('occupation', 30)->nullable()->index()->comment('职位');
            $table->boolean('fredom')->default(true)->comment('自由职业');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['avatar', 'introduction', 'realname', 'occupation', 'fredom']);
        });
    }
}
