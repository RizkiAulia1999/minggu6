<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //menambahkan foreign key pada tabel students dan menghapus kolom class
        Schema::table('students', function(Blueprint $table){
            $table->dropColumn('class');
            $table->unsignedBigInteger('class_id')->nullable()->after('nim');
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //menambah kolom class dan menghapus kolom foreign key
        Schema::table('students', function(Blueprint $table){
            $table->string('class');
            $table->dropForeign(['class_id']);
        });
    }
}
