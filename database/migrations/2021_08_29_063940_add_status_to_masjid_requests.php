<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToMasjidRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('masjid_requests', function (Blueprint $table) {
              $table->string('masjid_name');
            $table->string('applicant');
            $table->string('masjid_address');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('masjid_requests', function (Blueprint $table) {
            //
        });
    }
}
