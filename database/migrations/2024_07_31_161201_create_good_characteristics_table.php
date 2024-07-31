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
        Schema::create('good_characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->unsignedBigInteger('characteristic_id')->index();
            $table->unsignedBigInteger('good_id')->index();
            $table->foreign('characteristic_id')->references('id')->on('characteristics');
            $table->foreign('good_id')->references('id')->on('goods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goog_characteristics');
    }
};
