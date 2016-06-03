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
              ['name' => 'TV & Entertainment'], ['name' => 'Salute e benessere'],
              ['name' => 'Casa e Famiglia'], ['name' => 'Servizi alla persona']
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
