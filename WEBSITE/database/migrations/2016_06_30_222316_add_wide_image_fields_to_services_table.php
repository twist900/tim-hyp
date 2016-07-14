<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddWideImageFieldsToServicesTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function(Blueprint $table) {

            $table->string('wide_image_file_name')->nullable();
            $table->integer('wide_image_file_size')->nullable()->after('wide_image_file_name');
            $table->string('wide_image_content_type')->nullable()->after('wide_image_file_size');
            $table->timestamp('wide_image_updated_at')->nullable()->after('wide_image_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function(Blueprint $table) {

            $table->dropColumn('wide_image_file_name');
            $table->dropColumn('wide_image_file_size');
            $table->dropColumn('wide_image_content_type');
            $table->dropColumn('wide_image_updated_at');

        });
    }

}