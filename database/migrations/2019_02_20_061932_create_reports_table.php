<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('client_id');
            $table->integer('report_type_id');
            $table->integer('agency_id');
            
            $table->string('general_deformities');
            $table->string('general_anaemia');
            $table->string('general_jaundice');
            $table->string('general_goitre');
            $table->string('general_varicose_vein');
            $table->string('general_skin');

            $table->string('vision_left');
            $table->string('vision_right');

            $table->string('hearing_left');
            $table->string('hearing_right');

            $table->string('cardio_pulse')->nullable();
            $table->string('cardio_blood_presure')->nullable();
            $table->string('cardio_heart_sound')->nullable();

            $table->string('respiratory_lungs')->nullable();
            $table->string('respiratory_chest_x_ray')->nullable();

            $table->string('gastrointestinal_abdomen')->nullable();
            $table->string('gastrointestinal_hernia')->nullable();

            $table->string('genitourinary_hydrocele')->nullable();
            $table->string('genitourinary_orchitis')->nullable();

            $table->string('locomotor_gait')->nullable();
            $table->string('locomotor_joints')->nullable();
            $table->string('locomotor_extremities')->nullable();

            $table->string('other_remarks')->nullable();

            $table->string('urine_sugar')->nullable();
            $table->string('urine_albumin')->nullable();
            // $table->string('urine_bilirubin');
            $table->string('urine_hcg')->nullable();

            $table->string('stool_helminths')->nullable();
            $table->string('stool_bilharziasis')->nullable();
            $table->string('stool_salmonella_shigella')->nullable();
            $table->string('stool_others')->nullable();

            $table->string('blood_group')->nullable();
            $table->string('blood_haemoglobin')->nullable();
            $table->string('blood_esr')->nullable();
            $table->string('blood_malaria_film')->nullable();
            $table->string('blood_micro_filaris')->nullable();

            $table->string('serology_vdrl')->nullable();
            $table->string('serology_tpha')->nullable();
            $table->string('serology_hiv')->nullable();
            $table->string('serology_hb')->nullable();
            $table->string('serology_hep')->nullable();
            $table->string('serology_hcv')->nullable();
            $table->string('serology_pregnancy')->nullable();
            $table->string('serology_fbs')->nullable();
            $table->string('serology_creatinine')->nullable();
            $table->string('serology_sgot')->nullable();
            $table->string('serology_sgpt')->nullable();
            $table->string('serology_cholesterol')->nullable();
            $table->string('serology_phosphatase')->nullable();
            $table->string('serology_uria')->nullable();
            $table->string('serology_bilirunin')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
