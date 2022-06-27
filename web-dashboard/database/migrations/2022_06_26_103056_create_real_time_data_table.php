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
        Schema::create('real_time_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('entry_name');
            $table->double('temp');
            $table->double('humidity');
            $table->double('co2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_time_data');
    }
};
