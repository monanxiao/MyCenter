<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugAndDomainAndExcerptToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('slug',30)->comment('主页后缀');
            $table->string('domain', 120)->nullable()->comment('自定义域名');
            $table->text('excerpt')->nullable()->comment('简介摘录');
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
            $table->dropColumn(['slug', 'domain', 'excerpt']);
        });
    }
}
