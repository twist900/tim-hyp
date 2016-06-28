<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Eloquent::unguard();

      //disable foreign key check for this connection before running seeders
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');

      DB::table('attachments')->truncate();
      DB::table('services')->truncate();
      DB::table('device_taxon')->truncate();
      DB::table('company_taxon')->truncate();
      DB::table('device_property')->truncate();


      $this->call(TaxonsTableSeeder::class);
      $this->call(CompaniesTableSeeder::class);
      $this->call(AssistanceServicesTableSeeder::class);
      $this->call(FaqsTableSeeder::class);
      $this->call(SmartLivesTableSeeder::class);
      $this->call(DevicesTableSeeder::class);
      $this->call(TestimonialsTableSeeder::class);

      // supposed to only apply to a single connection and reset it's self
      // but I like to explicitly undo what I've done for clarity
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
