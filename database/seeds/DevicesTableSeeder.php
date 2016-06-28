<?php

use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
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

        DB::table('devices')->truncate();

        $this->createDevicesForTaxon('All%20Cell%20Phones%20with%20Plans', 'Smartphone e Telefoni');
        $this->createDevicesForTaxon('All%20Tablets', 'Tablet e Computer');
        $this->createDevicesForTaxon('All%20Laptops', 'Tablet e Computer');
        $this->createDevicesForTaxon('Wireless%20Routers', 'Modem e Networking');
        $this->createDevicesForTaxon('4K%20Ultra%20HD%20TVs', 'TV e Smart Living');
        $this->createDevicesForTaxon('Curved%20TVs', 'TV e Smart Living');
        $this->createDevicesForTaxon('All%20Laptops', 'Outlet');


    }

    private function createDevicesForTaxon($bestBuyTaxon, $dbTaxon)
    {

      $dbTaxonModel = App\Taxon::where('name', $dbTaxon)->first();

      foreach($dbTaxonModel->companies as $company){
        $response = $this->client->request('GET', "/v1/products(categoryPath.name=$bestBuyTaxon&manufacturer={$company->name})?format=json&show=name,regularPrice,longDescription,details,image,angleImage,backViewImage,leftViewImage,rightViewImage&apiKey=" . env('BEST_BUY_API_KEY', 'You need a key'));
        $jsonResponse = json_decode($response->getBody());
        foreach( array_slice($jsonResponse->products, 0, 5) as $product){
          $device = new App\Device([ 'name' => $product->name, 'cost' => $product->regularPrice,
            'description' => $product->longDescription]);
          $device->save();
          $dbTaxonModel->devices()->save($device);
          $company->devices()->save($device);
          foreach( $product->details as $detail){
            $detailModel =  App\Property::firstOrCreate(['name' => $detail->name]);
            $detailModel->devices()->save($device, ['value' => $detail->value ]);
          }

          if( !empty($product->image)){
            $deviceImage = App\Attachment::create(['image' => $product->image]);
            $device->attachments()->save($deviceImage);
          }

          if( !empty($product->angleImage)){
            $deviceImage = App\Attachment::create(['image' => $product->angleImage]);
            $device->attachments()->save($deviceImage);
          }

          if( !empty($product->backViewImage)){
            $deviceImage = App\Attachment::create(['image' => $product->backViewImage]);
            $device->attachments()->save($deviceImage);
          }

          if( !empty($product->leftViewImage)){
            $deviceImage = App\Attachment::create(['image' => $product->leftViewImage]);
            $device->attachments()->save($deviceImage);
          }

          if( !empty($product->rightViewImage)){
            $deviceImage = App\Attachment::create(['image' => $product->rightViewImage]);
            $device->attachments()->save($deviceImage);
          }

        }
      }
    }
}
