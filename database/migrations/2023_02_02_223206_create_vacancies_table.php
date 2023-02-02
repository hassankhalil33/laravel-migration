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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title", 200)->nullable();
            $table->string("type", 45)->nullable();
            $table->string("description", 2000)->nullable();
            $table->timestamps();
            $table->timestamp("deleted_at")->nullable();
            $table->tinyInteger("expired")->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
};
