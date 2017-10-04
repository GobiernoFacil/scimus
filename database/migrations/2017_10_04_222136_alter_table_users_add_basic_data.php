<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsersAddBasicData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->string('lastname')->nullable();
            $table->text('city')->nullable();
            $table->string('state')->nullable();
            $table->text('town')->nullable();
            $table->string('type')->nullable();
            $table->integer('enabled')->nullable();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
          Schema::dropIfExists('users');
    }
}
