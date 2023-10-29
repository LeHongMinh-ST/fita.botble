<?php

use Botble\Department\Enums\DepartmentStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('status', 60)->default(DepartmentStatusEnum::ACTIVE);
            $table->string('icon', 255)->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::create('departments_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->integer('departments_id');
            $table->string('name', 255)->nullable();

            $table->primary(['lang_code', 'departments_id'], 'departments_translations_primary');
        });

        Schema::create('department_items', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('link', 255)->nullable();
            $table->integer('order')->unsigned()->default(0);
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
        Schema::dropIfExists('departments');
        Schema::dropIfExists('departments_translations');
        Schema::dropIfExists('department_items');
    }
};
