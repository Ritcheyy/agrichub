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
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->integer('search_points')->default(0);
            $table->string('referral_url')->nullable();
            $table->integer('avg_rating')->default(0);
            $table->integer('ratings_count')->default(0);
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('town')->nullable();
            $table->string('bio')->nullable();
            $table->string('profile_status')->default('NotCompleted');
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
