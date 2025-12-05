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
        Schema::create('penawaran', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->unique();
            $table->date('tanggal');
            $table->string('pemberi');
            $table->string('jenis_aset');
            $table->text('maksud')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('nilai_kebutuhan')->nullable();
            $table->decimal('biaya', 15, 2)->nullable();
            $table->string('norek')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penawaran');
    }
};
