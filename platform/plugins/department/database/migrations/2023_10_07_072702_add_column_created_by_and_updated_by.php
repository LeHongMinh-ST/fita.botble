<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCreatedByAndUpdatedBy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->string('code', 10)->nullable()->after('id');
            $table->bigInteger('created_by')->nullable()->after('name');
            $table->bigInteger('updated_by')->nullable()->after('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departments', function (Blueprint $table) {
            if (Schema::hasColumn('departments', 'created_by')) {
                $table->dropColumn(['created_by']);
            }
            if (Schema::hasColumn('departments', 'updated_by')) {
                $table->dropColumn(['updated_by']);
            }
            if (Schema::hasColumn('departments', 'code')) {
                $table->dropColumn(['code']);
            }

        });
    }
}
