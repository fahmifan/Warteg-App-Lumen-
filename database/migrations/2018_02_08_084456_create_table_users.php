<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function(Blueprint $table)
        //     {
        //         $table->increments('id');
        //         $table->string('email')->unique();
        //         $table->string('name');
        //         $table->string('password', 20);
        //         $table->string('api_token', 60)->unique();
        //         $table->rememberToken();
        //         $table->timestamps();
        //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('users');
    }
}
