<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->string('health_id_card')->unique();
            $table->string('name_kh')->nullable();
            $table->string('name_en')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mental_health_id_card')->nullable();
            $table->string('other_id_card')->nullable();
            $table->boolean('is_disabled')->default(false);
            $table->bigInteger('province_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('commune_id')->nullable();
            $table->bigInteger('village_id')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
