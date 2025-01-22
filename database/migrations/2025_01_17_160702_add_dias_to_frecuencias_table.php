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
        Schema::table('frecuencias', function (Blueprint $table) {
            $table->integer('dias')->nullable(); // Nueva columna añadida
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('frecuencias', function (Blueprint $table) {
            $table->dropColumn('dias');
        });
    }
};
