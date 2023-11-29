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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_code',50)->nullable();
            $table->string('full_name',100)->nullable();
            $table->date('dob')->nullable();
            $table->string('gender',20)->nullable();
            $table->string('parent_name',100)->nullable();
            $table->string('parent_contact_no',50)->nullable();
            $table->string('address',255)->nullable();
            $table->string('village',20)->nullable();
            $table->string('taluka',20)->nullable();
            $table->string('district',20)->nullable();
            $table->string('state',20)->nullable();
            $table->integer('height')->unsigned()->nullable();
            $table->integer('weight')->unsigned()->nullable();
            $table->decimal('bmi',10,2)->nullable();
            $table->string('blood_group',20)->nullable();
            $table->string('allergy',255)->nullable();
            $table->string('medication',255)->nullable();
            $table->string('surgery',255)->nullable();
            $table->string('illness',255)->nullable();
            $table->integer('no_of_meals')->unsigned()->nullable();
            $table->enum('food_type', array('Vegetarian','Non-Vegetarian','Eggetarian'))->nullable();
            $table->string('junk_food',20)->nullable();
            $table->string('diet_restriction',255)->nullable();
            $table->string('frequency_of_food_intake',255)->nullable();
            $table->string('favourite_food', 255)->nullable();
            $table->string('high_qualification', 50)->nullable();
            $table->string('occupation', 50)->nullable();
            $table->string('school_college_name', 255)->nullable();
            $table->string('distance', 50)->nullable();
            $table->string('mobile_phone_access', 20)->nullable();
            $table->string('laptop_access', 20)->nullable();
            $table->string('child_contact_no', 20)->nullable();
            $table->string('child_email_id', 155)->nullable();
            $table->string('other_data', 255)->nullable();
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
        Schema::dropIfExists('visitors');
    }
};
