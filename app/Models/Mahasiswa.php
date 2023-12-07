<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
public function up()
    {
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('alamat');
        $table->date('tanggal_lahir');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('students');
}
}