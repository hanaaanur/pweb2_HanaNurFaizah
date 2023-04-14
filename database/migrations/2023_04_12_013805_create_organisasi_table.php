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
        Schema::create('organisasi', function (Blueprint $table) {
            $table->id();
            $table->string('id_organisasi', 30)->nullable(false);
            $table->string('jenis', 30)->nullable(false);
            $table->string('nama', 70)->nullable(false);
            $table->integer('periode')->nullable(false);
            $table->string('ketua', 70)->nullable(false);
            $table->integer('nis')->nullable(false);
            $table->string('pembina', 70)->nullable(false);
            $table->integer('anggaran')->nullable(false);
            $table->unique(array('nis'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasi');
    }
};
