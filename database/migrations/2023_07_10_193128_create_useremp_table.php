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
        Schema::create('useremp', function (Blueprint $table) {

            $table->increments("id");
            $table->string("nombre");
			$table->string("apellido");
			$table->string("tipodoc");
			$table->string("documento");
			$table->string("cargo");
			$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useremp');
    }
};