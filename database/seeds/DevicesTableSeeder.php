<?php

use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('devices')->truncate();

        $devicesRoot = App\Taxon::where('name', 'Prodotti')
          ->where('parent_id', null)->first();

        $smartphoneTaxon = $devicesRoot->descendants()
          ->where('name', 'Smartphone e Telefoni')->first();

        $tabletTaxon = $devicesRoot->descendants()
          ->where('name', 'Tablet e Computer')->first();

        $modemTaxon = $devicesRoot->descendants()
          ->where('name', 'Modem e Networking')->first();

        $tvTaxon = $devicesRoot->descendants()
          ->where('name', 'TV e Smart Living')->first();

        $outletTaxon = $devicesRoot->descendants()
          ->where('name', 'Outlet')->first();

        $LGCompany = App\Company::where('name', 'LG')->first();
        $device1 = new App\Device(
          [ 'name' => 'G5', 'company_id' => $LGCompany->id,
            'description' => "Il nuovo LG G5 è uno nuovo tipo di smartphone che supera tutti i limiti, con un design modulare completamete in metallo che rivoluziona i canoni di design. Espandi le funzioni, interagisci con gli innovativi LG Friends e prova un'esperienza smartphone realmente innovativa. La rivoluzione di G5 continua con la doppia fotocamera grandangolare, che cattura più di quanto i tuoi occhi riescano a vedere. Anche sotto il sole, perché il nuovo display IPS Quantum è più ricco, luminoso e colorato anche sotto la luce diretta del sole. E ti mostra sempre le notifiche principali anche quando non è attivo. Nuovo LG G5: quello che non ti aspetti, nel palmo della tua mano.", 'cost' => '699,90'

          ]
        );
        $device1->save();
        $smartphoneTaxon->devices()->save($device1);
        $device1Image = App\Attachment::create(['image' => 'https://img.tim.it/sdr/LG_G5_titan_01_1.jpg']);
        $device1->attachments()->save($device1Image);



    }
}
