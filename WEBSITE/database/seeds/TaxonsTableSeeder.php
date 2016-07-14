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
            'name' => 'Products',
            'children' => [
                [ 'name' => 'Smartphone and Mobile',
                  'icon' => 'https://img.tim.it:443/sdr/01_SmartphoneTelefoni_1.png'
                ],
                [ 'name' => 'Tablet and Computer',
                  'icon' => 'https://img.tim.it/sdr/02_TabletComputer.png'
                ],
                [ 'name' => 'Modem and Networking',
                  'icon' => 'https://img.tim.it/sdr/03_ModemChiavette.png'
                ],
                [ 'name' => 'TV and Smart Living',
                  'icon' => 'https://img.tim.it/sdr/04_TVDigitalHome.png'
                ],
                [
                  'name' => 'Outlet',
                  'icon' => 'https://img.tim.it/sdr/05_Outlet_2.png'
                ]
            ]
        ]);

        $SLServicesTaxonTree = App\Taxon::create([
            'name' => 'Smart Life',
            'children' => [
              ['name' => 'TV & Entertainment',
                'short_description' => 'TV SHOWS, MOVIES, MUSIC, BOOKS, GAMES AND FOOTBALL. Find out the entertainment you prefer. Fun starts now! Whenever and however you want.',
                'icon' => 'https://img.tim.it:443/sdr/01_Intrattenimento_0.png'],
              ['name' => 'Health and wellness',
                'short_description' => 'Try last wearables devices. Find out how health and wellnes can change your life for the best. Free your desire to move. Share your results with friends. The future is smart.',
                'icon' => 'https://img.tim.it:443/sdr/02_icona_salute_benessere.png'],
              ['name' => 'Home and Family',
                'short_description' => 'Smart Life means also a simpler and more secure life. Also for your home and your loved ones.',
                'icon' => 'https://img.tim.it:443/sdr/03_casa_famiglia_v2.png'],
              ['name' => 'Personal services',
                'short_description' => 'A new approach to the e-payment and digital identity world. You will be able to organize and manage with ease and safely your digital payments, your personal archive.',
                'icon' => 'https://img.tim.it:443/sdr/04_identita_payment.png'
              ]
            ]
        ]);

        $SLServicesTaxonTree = App\Taxon::create([
            'name' => 'Assistance',
            'children' => [
              ['name' => 'Connection management and services'], ['name' => 'Cost and payment control'],
              ['name' => 'Hardware and configuration support'], ['name' => 'Smart Life Services'],
              ['name' => 'Highlights', 'most_popular' => true]
            ]
        ]);
    }
}
