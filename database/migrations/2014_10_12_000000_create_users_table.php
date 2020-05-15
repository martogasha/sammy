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
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->integer('user_phone')->unique();
            $table->string('user_location')->nullable();
            $table->integer('user_role')->default(2);
            $table->mediumText('user_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(\Illuminate\Support\Facades\Hash::make('123456'));
            $table->rememberToken();
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
