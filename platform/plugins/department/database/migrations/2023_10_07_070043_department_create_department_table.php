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
            $table->timestamps();
        });

        Schema::create('departments_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->integer('departments_id');
            $table->string('name', 255)->nullable();

            $table->primary(['lang_code', 'departments_id'], 'departments_translations_primary');
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
    }
};
