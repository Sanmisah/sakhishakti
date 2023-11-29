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
        Schema::create('medical_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visitor_id', 11)->nullable();
            $table->string('email',255)->nullable();
            $table->string('disease',255)->nullable();
            $table->string('surgery',255)->nullable();
            $table->string('medication',255)->nullable();
            $table->string('allergies',255)->nullable();
            $table->string('height',255)->nullable();
            $table->string('weight',255)->nullable();
            $table->string('bmi',255)->nullable();
            $table->string('blood_pressure',255)->nullable();
            $table->string('heart_rate',255)->nullable();
            $table->string('respiratory_rate',255)->nullable();
            $table->string('sign',255)->nullable();
            $table->string('hair',255)->nullable();
            $table->string('skin',255)->nullable();
            $table->string('nail_health',255)->nullable();
            $table->string('oral_health',255)->nullable();
            $table->string('swelling',255)->nullable();
            $table->string('weakness',255)->nullable();
            $table->string('poor_health',255)->nullable();
            $table->string('fatigue',255)->nullable();
            $table->string('observation',255)->nullable();
            $table->string('hemoglobin_level',255)->nullable();
            $table->string('serum',255)->nullable();
            $table->string('vitamin_level',255)->nullable();
            $table->string('vitamin_d',255)->nullable();
            $table->string('vitamin_b',255)->nullable();
            $table->string('relevant_vitamin',255)->nullable();
            $table->string('laboratory_test',255)->nullable();
            $table->string('food_preference',255)->nullable();
            $table->string('dietory_restrictions',255)->nullable();
            $table->string('nutrition',255)->nullable();
            $table->string('breakfast',255)->nullable();
            $table->string('lunch',255)->nullable();
            $table->string('dinner',255)->nullable();
            $table->string('snack',255)->nullable();
            $table->string('other_info',255)->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_assessments');
    }
};
