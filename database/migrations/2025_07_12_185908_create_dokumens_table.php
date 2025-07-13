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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_id'); // relasi ke biodata
            $table->string('nama_dokumen'); // misal: Ijazah, Transkrip, dsb
            $table->string('path_file'); // path file PDF
            $table->string('tipe_dokumen')->nullable(); // opsional: tipe dokumen
            $table->timestamps();

            $table->foreign('biodata_id')->references('id')->on('biodatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
