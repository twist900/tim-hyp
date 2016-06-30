<?php

use Illuminate\Database\Seeder;

class TaxonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxons')->truncate();

        $deviceTaxonTree = App\Taxon::create([
            'name' => 'Prodotti',
            'children' => [
                [ 'name' => 'Smartphone e Telefoni'],[ 'name' => 'Tablet e Computer' ],
                [ 'name' => 'Modem e Networking'], [ 'name' => 'TV e Smart Living' ],
                [ 'name' => 'Outlet' ]
            ]
        ]);

        $SLServicesTaxonTree = App\Taxon::create([
            'name' => 'Smart Life',
            'children' => [
              ['name' => 'TV & Entertainment',
                'short_description' => 'TV SHOWS, MOVIES, MUSIC, BOOKS, GAMES AND FOOTBALL. Find out the entertainment you prefer. Fun starts now! Whenever and however you want.',
                'icon' => 'https://img.tim.it:443/sdr/01_Intrattenimento_0.png'],
              ['name' => 'Salute e benessere',
                'short_description' => 'Try last wearables devices. Find out how health and wellnes can change your life for the best. Free your desire to move. Share your results with friends. The future is smart.',
                'icon' => 'https://img.tim.it:443/sdr/02_icona_salute_benessere.png'],
              ['name' => 'Casa e Famiglia',
                'short_description' => 'Smart Life means also a simpler and more secure life. Also for your home and your loved ones.',
                'icon' => 'https://img.tim.it:443/sdr/03_casa_famiglia_v2.png'],
              ['name' => 'Servizi alla persona',
                'short_description' => 'A new approach to the e-payment and digital identity world. You will be able to organize and manage with ease and safely your digital payments, your personal archive.',
                'icon' => 'https://img.tim.it:443/sdr/04_identita_payment.png'
              ]
            ]
        ]);

        $SLServicesTaxonTree = App\Taxon::create([
            'name' => 'Assistenza',
            'children' => [
              ['name' => 'Gestione linea e servizi'], ['name' => 'Controlla costi e pagamenti'],
              ['name' => 'Supporto tecnico e configurazione'], ['name' => 'Smart Life Services'],
              ['name' => 'Highlights', 'most_popular' => true]
            ]
        ]);
    }
}
