<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->string('nama', 50);
            $table->char('kelas', 2);
            $table->text('address');
            $table->char('nidn', 10);
            $table->timestamps();
            
            $table->index('nidn');
            $table->foreign('nidn')->references('nidn')->on('lectures')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
