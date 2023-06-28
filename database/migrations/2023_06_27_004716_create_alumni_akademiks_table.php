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
        Schema::create('alumni_akademiks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nis', 16)->nullable();
            $table->string('nisn', 8)->nullable();
            $table->string('angkatan')->nullable();
            $table->enum('jurusan', ['tkj', 'rpl']);
            $table->string('rombel')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('rata_ijazah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_akademiks');
    }
};