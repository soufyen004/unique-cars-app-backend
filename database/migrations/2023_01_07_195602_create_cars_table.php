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
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('carName');
            $table->string('manufacturerName');
            $table->integer('manufacturerId');
            $table->string('manufacturerLogo');
            $table->integer('manufacturerLogoId');
            $table->integer('acceleration');
            $table->integer('mileage');
            $table->string('coverImage');
            $table->string('colorName');
            $table->integer('colorId');
            $table->integer('cilynders');
            $table->integer('energyTypeId');
            $table->string('energyTypeName');
            $table->integer('horsePower');
            $table->string('modelName');
            $table->string('modelId');
            $table->string('transmissionName');
            $table->integer('transmissionId');
            $table->integer('yearOfConstruction');
            $table->string('publisherFullName');
            $table->integer('publisherUserId');
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
        Schema::dropIfExists('cars');
    }
};
