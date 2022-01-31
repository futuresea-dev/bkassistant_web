<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertyType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_property_vehicle', function (Blueprint $table) {
            $table->string('property_type', 250)->after('own_any_property');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_property_vehicle', function (Blueprint $table) {
        $table->dropColumn('property_type');
        });
    }
}
