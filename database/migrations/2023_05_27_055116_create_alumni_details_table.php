<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumni_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nis', 18)->default('-');
            $table->string('nisn', 8)->default('-');
            $table->string('nik', 16)->default('-');
            $table->enum('jk', ['l', 'p']);
            $table->string('tempat_lahir')->default('-');
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_handphone')->default('-');
            $table->text('alamat')->nullable();
            $table->enum('status', ['bekerja', 'tidakbekerja']);
            $table->string('keahlian')->default('-');
            $table->string('organisasi')->default('-');
            $table->string('pengalaman_kerja')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_details');
    }
};
