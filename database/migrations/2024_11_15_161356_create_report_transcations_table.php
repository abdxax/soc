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
        Schema::create('report_transcations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_id');
            $table->unsignedBigInteger('depart_from_id');
            $table->unsignedBigInteger('depart_to_id');
            $table->string('note');
            $table->boolean('is_open')->default(false);
            $table->timestamps();

            $table->foreign('report_id')->on('reports')->references('id')->onDelete('cascade');
            $table->foreign('depart_from_id')->on('departments')->references('id')->onDelete('cascade');
            $table->foreign('depart_to_id')->on('departments')->references('id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_transcations');
    }
};
