<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectimages', function (Blueprint $table) {
            $table->id();
            $table->string('project_id');
            $table->integer('service_id')->nullable();
            $table->string('type');
            $table->string('title');
            $table->longText('desc');
            $table->string('image');
            $table->string('created_by')->nullable();
            $table->integer('order_by');
            $table->enum('status', ['Active', 'Inactive', 'Pending']);
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
        Schema::dropIfExists('projectimages');
    }
}
