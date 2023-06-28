<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('petugas_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nip', 18)->unique()->nullable();
            $table->string('nuptk', 16)->unique()->nullable();
            $table->string('nik', 16)->unique()->nullable();
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('status', ['pns', 'nonpns']);
            $table->enum('pendidikan_terakhir', ['sma', 'd1', 'd2', 'd3', 's1', 's2', 's3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas_details');
    }
};