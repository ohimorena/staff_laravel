<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('employee_positions', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('empl_id');
        $table->unsignedBigInteger('posit_id');

        $table->index('empl_id', 'empl_posit_empl_idx');
        $table->index('posit_id', 'empl_posit_posit_idx');

        $table->foreign('empl_id', 'empl_posit_empl_fk')->on('employees')->references('id');
        $table->foreign('posit_id', 'empl_posit_posit_fk')->on('positions')->references('id');
        
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
        Schema::dropIfExists('employee_positions');
    }
}
