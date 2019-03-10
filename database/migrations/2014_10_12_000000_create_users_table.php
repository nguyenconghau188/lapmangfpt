<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('id');
            $table->string('username');
            $table->string('password');
            $table->string('role');
            $table->integer('status')->default(0);
            $table->string('fullname');
            $table->timestamp('birthday')->nullable();
            $table->integer('level')->default(0);
            $table->string('address')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('phone_number')->unique();
            $table->string('phone_number_verify_status')->default(0);
            $table->string('phone_number_verify_code', 6)->nullable();
            $table->integer('phone_number_verify_count')->nullable();
            $table->timestamp('phone_number_verify_at')->nullable();
            $table->string('email')->unique();
            $table->integer('email_verify_status')->default(0);
            $table->string('email_verify_token')->nullable();
            $table->timestamp('email_verify_at')->nullable();
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
