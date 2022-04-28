<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToPackageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_contents', function (Blueprint $table) {
            $table->dropColumn('day');
            $table->dropColumn('price');
            $table->dropColumn('discount');
            $table->foreignId('package_id')->nullable()->constrained('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('package_contents', function (Blueprint $table) {
            //
        });
    }
}
