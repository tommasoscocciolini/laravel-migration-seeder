<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::table('packets', function (Blueprint $table) {
      //   $table->tinyInteger('all_inclusive')->after('tour');
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Schema::table('packets', function (Blueprint $table) {
      //   $table->dropColumn('all_inclusive');
      // });
    }
}
