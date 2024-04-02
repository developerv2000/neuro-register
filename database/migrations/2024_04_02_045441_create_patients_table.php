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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address', 400)->nullable();
            $table->date('birthday')->nullable();
            $table->string('birth_place', 400)->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->text('job')->nullable();
            $table->string('nationality')->nullable();
            $table->string('desease_start_age')->nullable();

            $table->unsignedSmallInteger('pregnancy_number')->nullable();
            $table->unsignedSmallInteger('mother_age_while_birth')->nullable();
            $table->unsignedSmallInteger('father_age_while_birth')->nullable();
            $table->text('mother_deseases_on_pregnancy_period')->nullable();

            $table->string('weight_and_hieght_after_birth')->nullable();
            $table->string('start_sitting')->nullable();
            $table->string('start_standing')->nullable();
            $table->string('start_walking')->nullable();
            $table->string('start_speaking')->nullable();
            $table->string('start_school')->nullable();

            $table->string('survey_height')->nullable();
            $table->string('survey_weight')->nullable();
            $table->string('survey_constitution')->nullable();
            $table->string('head_circle')->nullable();
            $table->string('head_deformations')->nullable();
            $table->string('face_covers')->nullable();
            $table->string('face_deformation')->nullable();
            $table->string('neck_form')->nullable();
            $table->string('neck_mobility')->nullable();
            $table->string('breast_circle')->nullable();
            $table->string('breast_deformation')->nullable();
            $table->string('stomach_deformation')->nullable();
            $table->string('stomach_deformation')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
