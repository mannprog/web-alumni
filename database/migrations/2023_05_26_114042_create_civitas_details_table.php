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
        Schema::create('civitas_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nip', 18)->unique()->default('-');
            $table->string('nuptk', 16)->unique()->default('-');
            $table->string('nik', 16)->unique()->default('-');
            $table->enum('jk', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('tempat_lahir')->default('-');
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_handphone')->default('-');
            $table->enum('status', ['PNS', 'Non Pns'])->nullable();
            $table->text('alamat')->nullable();
            $table->string('foto')->default('default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civitas_details');
    }
};
