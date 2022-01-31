<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMortgageAddressColumnsToTblPropertyResidentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_property_resident', function (Blueprint $table) {
            $table->string('mortgage_city')->after('mortgage_address')->nullable();
            $table->string('mortgage_state')->after('mortgage_city')->nullable();
            $table->string('mortgage_zip')->after('mortgage_state')->nullable();
            $table->string('mortgage_county')->after('mortgage_zip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_property_resident', function (Blueprint $table) {
            $table->dropColumn('mortgage_city');
            $table->dropColumn('mortgage_state');
            $table->dropColumn('mortgage_zip');
            $table->dropColumn('mortgage_county');
        });
    }
}
