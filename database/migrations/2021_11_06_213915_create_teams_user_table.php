<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teams_id')
            ->constrained('teams')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('user_id')
             ->constrained('users')
             ->onUpdate('cascade')
             ->onDelete('cascade');

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
        Schema::dropIfExists('teams_user');
    }
}
