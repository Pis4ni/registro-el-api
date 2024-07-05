<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key

            $table->string('name'); // Nome
            $table->string('surname'); // Cognome
            $table->date('date_of_birth'); // Data di nascita
            $table->string('class'); // Classe
            $table->string('section'); // Sezione
            $table->foreignId('institute_id')->constrained('institutes'); // Foreign key

            $table->timestamps();
            $table->softDeletes(); // Soft delete functionality
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
