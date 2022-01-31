<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountyColTo730data extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_lived_address_from_730_data', function (Blueprint $table) {
            $table->string('County', 255)->nullable()->after('City');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_lived_address_from_730_data', function (Blueprint $table) {
            $table->dropColumn('County');
        });
    }
}
