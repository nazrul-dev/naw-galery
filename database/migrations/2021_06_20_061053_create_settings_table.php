<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_dark');
            $table->string('logo_white');
            $table->string('company');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('favicon');
            $table->string('playstore_link');
            $table->string('ios_link');
            $table->string('email');
            $table->string('TELEGRAM_API');
            $table->string('TELEGRAM_ROOM_ID');
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
        Schema::dropIfExists('settings');
    }
}
