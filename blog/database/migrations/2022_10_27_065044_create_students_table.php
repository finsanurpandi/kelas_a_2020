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
            $table->string('kelas', 2); // A, B, C, NR
            $table->text('alamat');
            $table->char('nidn',10);
            $table->timestamps();

            $table->index('nidn');
            $table->foreign('nidn')->references('nidn')->on('lectures')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        $table->dropIndex('nidn');
    }
}
