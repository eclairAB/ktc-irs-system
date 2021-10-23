<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterContainerReleasingsPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('container_releasings', function (Blueprint $table) {
            $table->dropColumn('upload_photo');
            $table->bigInteger('container_photo_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('container_releasings', function (Blueprint $table) {
            $table->dropColumn('upload_photo');
        });
    }
}
