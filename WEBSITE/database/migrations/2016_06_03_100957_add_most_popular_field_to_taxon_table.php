<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMostPopularFieldToTaxonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('taxons', function (Blueprint $table) {
            $table->boolean('most_popular')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taxons', function (Blueprint $table) {
            $table->dropColumn('most_popular');
        });
    }
}
