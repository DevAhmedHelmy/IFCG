<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHygieneInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hygiene_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();
            $table->enum('flu',[0,3,5])->default(0);
            $table->enum('diarrhea',[0,3,5])->default(0);
            $table->enum('beard',[0,3,5])->default(0);
            $table->enum('uniform',[0,3,5])->default(0);
            $table->enum('hairnet',[0,3,5])->default(0);
            $table->enum('shoes',[0,3,5])->default(0);
            $table->enum('gloves',[0,3,5])->default(0);
            $table->enum('pins',[0,3,5])->default(0);
            $table->enum('cleanness',[0,3,5])->default(0);
            $table->enum('wounds',[0,3,5])->default(0);
            $table->enum('nails',[0,3,5])->default(0);
            $table->enum('mask',[0,3,5])->default(0);
            $table->enum('accessories',[0,3,5])->default(0);
            $table->enum('eating',[0,3,5])->default(0);
            $table->enum('rosacea',[1,2,3])->default(1);
            $table->enum('shift',[1,2])->default(1);
            $table->string('area');
            $table->text('notes');
            $table->text('corrective_action');
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
        Schema::dropIfExists('hygiene_inspections');
    }
}
