<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('m_subkriteria', function (Blueprint $table) {
            $table->id('sub_id');
            $table->string('nama_sub');
            $table->unsignedBigInteger('kriteria_id');
            $table->timestamps();

            // Foreign Key
            $table->foreign('kriteria_id')->references('kriteria_id')->on('m_kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_subkriteria');
    }
};
