<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Position');
            $table->string('Phone_no'); 
            $table->string('Email');
            $table->string('DOB');
            $table->string('F_Name');
            $table->string('M_Name');
            $table->string('Present_Address');
            $table->string('Permanent_Addres');
            $table->string('NID');
            $table->string('Bank_Name');
            $table->string('Ac_No');
            $table->string('Status');
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
        Schema::dropIfExists('emps');
    }
}
