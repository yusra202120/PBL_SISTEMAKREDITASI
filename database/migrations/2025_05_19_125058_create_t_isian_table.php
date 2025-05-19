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
        Schema::create('t_isian', function (Blueprint $table) {
            $table->id('isian_id');
            $table->text('isi');
            $table->string('file')->nullable();
            $table->date('tanggal');
            $table->string('status');
            $table->unsignedBigInteger('sub_id');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('sub_id')->references('sub_id')->on('m_subkriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_isian');
    }
};
