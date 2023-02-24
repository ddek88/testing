<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_login');
            $table->string('sidebar_daftar');
            $table->string('sidebar_login');
            $table->string('tanggung_jawab');
            $table->string('dukungan_browser');
            $table->string('refferal');
            $table->string('postslink');
            $table->string('livechat');
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
        Schema::dropIfExists('links');
    }
};
