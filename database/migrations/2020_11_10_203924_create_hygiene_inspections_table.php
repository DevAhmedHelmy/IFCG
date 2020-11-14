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
            $table->integer('flu')->default(6);
            $table->integer('diarrhea')->default(6);
            $table->integer('beard')->default(6);
            $table->integer('uniform')->default(6);
            $table->integer('hairnet')->default(6);
            $table->integer('shoes')->default(6);
            $table->integer('gloves')->default(6);
            $table->integer('pins')->default(6);
            $table->integer('cleanness')->default(6);
            $table->integer('wounds')->default(6);
            $table->integer('nails')->default(6);
            $table->integer('mask')->default(6);
            $table->integer('accessories')->default(6);
            $table->integer('eating')->default(6);
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
