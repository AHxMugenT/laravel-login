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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("tanggal_lahir")->nullable();
            $table->string("usia")->nullable();
            $table->string('pekerjaan')->nullable();
            $table->enum("jk", ["P", "L", "None"])->default("None");
            $table->string('pendidikan')->nullable();
            $table->enum('golongan_darah', ['A', 'AB','B' ,'O', 'None'])->default('None');
            $table->string('nik')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota_kab')->nullable();
            $table->string('kec')->nullable();
            $table->string('kel')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('user_data');
    }
};
