<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    private $client = null;

    public function __construct()
    {
      $this->client = new GuzzleHttp\Client(['base_uri' => 'https://api.bestbuy.com/']);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->truncate();

      $this->createCompaniesForTaxon('All%20Cell%20Phones%20with%20Plans', 'Smartphone e Telefoni');
      $this->createCompaniesForTaxon('All%20Tablets', 'Tablet e Computer');
      $this->createCompaniesForTaxon('All%20Laptops', 'Tablet e Computer');
      $this->createCompaniesForTaxon('Wireless%20Routers', 'Modem e Networking');
      $this->createCompaniesForTaxon('4K%20Ultra%20HD%20TVs', 'TV e Smart Living');
      $this->createCompaniesForTaxon('Curved%20TVs', 'TV e Smart Living');
      $this->createCompaniesForTaxon('All%20Laptops', 'Outlet');

    }

    private function createCompaniesForTaxon($bestBuyTaxon, $dbTaxon)
    {
      $response = $this->client->request('GET', "/v1/products(categoryPath.name=$bestBuyTaxon)?format=json&show=deviceManufacturer&facet=manufacturer&apiKey=" . env('BEST_BUY_API_KEY', 'You need a key'));
      $jsonResponse = json_decode($response->getBody());
      $manufacturerArray = [];
      foreach( $jsonResponse->facets->manufacturer as $key => $value){
        if( $key != 'insignia™' ){
          $manufacturerArray[] =  App\Company::firstOrNew(['name' => $key]);
        }
      }
      $taxon = App\Taxon::where('name', $dbTaxon)->first();
      $taxon->companies()->saveMany($manufacturerArray);
    }
}
