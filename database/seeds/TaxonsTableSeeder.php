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
                [ 'name' => 'Smartphone e Telefoni',
                  'icon' => 'https://img.tim.it:443/sdr/01_SmartphoneTelefoni_1.png'
                ],
                [ 'name' => 'Tablet e Computer',
                  'icon' => 'https://img.tim.it/sdr/02_TabletComputer.png'
                ],
                [ 'name' => 'Modem e Networking',
                  'icon' => 'https://img.tim.it/sdr/03_ModemChiavette.png'
                ],
                [ 'name' => 'TV e Smart Living',
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
                'short_description' => 'SERIE TV, FILM, MUSICA, LIBRI, GIOCHI E CALCIO. Scopri il tipo di intrattenimento che preferisci. Il divertimento comincia subito! Quando vuoi e come vuoi.',
                'icon' => 'https://img.tim.it:443/sdr/01_Intrattenimento_0.png'],
              ['name' => 'Salute e benessere',
                'short_description' => 'Prova gli ultimi wearables. Scopri come salute e benessere possono cambiare in meglio la tua vita. Libera la tua voglia di movimento. Condividi con gli amici i tuoi risultati. Il futuro è smart.',
                'icon' => 'https://img.tim.it:443/sdr/02_icona_salute_benessere.png'],
              ['name' => 'Casa e Famiglia',
                'short_description' => 'Smart Life vuol dire anche una vita più semplice e sicura. Anche per la tua casa e i tuoi cari.',
                'icon' => 'https://img.tim.it:443/sdr/03_casa_famiglia_v2.png'],
              ['name' => 'Servizi alla persona',
                'short_description' => 'Un nuovo approccio al mondo dell’ e-payment e dell’identità digitale. Potrai organizzare e gestire con semplicità e in tutta sicurezza i tuoi pagamenti digitali, il tuo archivio personale.',
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
