<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->truncate();

      App\Company::create(['name' => 'Samsung']);
      App\Company::create(['name' => 'Apple']);
      App\Company::create(['name' => 'BlackBerry']);
      App\Company::create(['name' => 'LG']);
      App\Company::create(['name' => 'Huawei']);
      App\Company::create(['name' => 'TIM']);
    }
}
