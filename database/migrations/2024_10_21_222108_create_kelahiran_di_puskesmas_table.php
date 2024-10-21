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
        Schema::create('kelahiran_di_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->string('nama_bayi')->nullable();
            $table->enum('kelamin', ['l', 'p'])->nullable();
            $table->string('nama_orang_tua')->nullable();
            $table->string('nkk')->nullable();
            $table->string('alamat')->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->integer('bb')->nullable();
            $table->integer('tb')->nullable();
            $table->string('normal_dirujuk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelahiran_di_puskesmas');
    }
};
