<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Admin', function (Blueprint $table) {
            $table->id('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('role')->default(0)->index('index_admin_role')->comment('ロール');
            $table->rememberToken();
            $table->timestamp('last_login_at')->nullable()->comment('最終ログイン日時');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Admin');
    }
}
