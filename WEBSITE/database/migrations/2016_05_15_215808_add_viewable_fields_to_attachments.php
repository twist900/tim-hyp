<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViewableFieldsToAttachments extends Migration
{
/**
    * Make changes to the table.
    *
    * @return void
    */
   public function up()
   {
       Schema::table('attachments', function(Blueprint $table) {

           $table->integer('viewable_id');
           $table->string('viewable_type')->after('viewable_id');

       });

   }

   /**
    * Revert the changes to the table.
    *
    * @return void
    */
   public function down()
   {
       Schema::table('attachments', function(Blueprint $table) {

           $table->dropColumn('viewable_id');
           $table->dropColumn('viewable_type');


       });
   }
}
