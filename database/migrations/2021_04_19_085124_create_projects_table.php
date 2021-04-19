<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $p_table) {
            $p_table->id();
            $p_table->string('p_name', 30);
            $p_table->string('p_description');
            $p_table->unsignedBigInteger('e_id');
            $p_table->timestamps();
            $p_table->foreign('e_id')->references('id')->on('employees')
            ->onDelete('cascade')
            ->onUpdate('restrict');  
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
