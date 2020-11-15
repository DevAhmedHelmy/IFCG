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
            $table->unsignedInteger('flu')->default(6);
            $table->unsignedInteger('diarrhea')->default(6);
            $table->unsignedInteger('beard')->default(6);
            $table->unsignedInteger('uniform')->default(6);
            $table->unsignedInteger('hairnet')->default(6);
            $table->unsignedInteger('shoes')->default(6);
            $table->unsignedInteger('gloves')->default(6);
            $table->unsignedInteger('pins')->default(6);
            $table->unsignedInteger('cleanness')->default(6);
            $table->unsignedInteger('wounds')->default(6);
            $table->unsignedInteger('nails')->default(6);
            $table->unsignedInteger('mask')->default(6);
            $table->unsignedInteger('accessories')->default(6);
            $table->unsignedInteger('eating')->default(6);
            $table->unsignedInteger('total');
            $table->enum('rosacea',[1,2,3])->default(1);
            $table->enum('shift',[1,2])->default(1);
            $table->enum('area',['production', 'fill','stores'])->default('production');
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
