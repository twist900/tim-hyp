<?php

use Illuminate\Database\Seeder;

class SmartLivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\SmartLifeService::truncate();

        //TV & Entertainment

        $smartLifeTaxon = App\Taxon::where('name', 'TV & Entertainment')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'TV',
          'description' => "Divertimento senza limiti",
          "benefits" => "<p>Scopri il grande cinema, le serie più appassionanti, i cartoni animati più amati, lo sport
e tanto altro ancora su TV, PC, tablet e smartphone</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMmusic',
          'description' => "La colonna sonora della tua vita",
          "benefits" => "<p>Ascolta milioni di brani in streaming, tutte le novità discografiche,
anteprime esclusive e tante playlist di tutti i generi. Su smartphone
senza consumare GB, pc e tablet. Quando vuoi e quanto vuoi.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMreading',
          'description' => "Leggi quando vuoi, cosa vuoi",
          "benefits" => "<p>Porta sempre con te su Smartphone e Tablet i tuoi eBook preferiti,
segui tutte le tue passioni scegliendo tra i magazine più amati e sfoglia
il tuo quotidiano dalle prime ore del mattino.
Su TIMreading trovi ciò che ami leggere, dove e quando vuoi.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMgames',
          'description' => "Mettiti in gioco, una nuova sfida ti aspetta!",
          "benefits" => "<p>Sparatutto, sport estremi, i migliori Classici e molto altro ancora...
Con TIMgames hai a disposizione centinaia di giochi per il tuo
smartphone e tablet, per divertirti dove e quando vuoi.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Serie A TIM',
          'description' => "Il calcio è di chi lo ama",
          "benefits" => "<p>Vivi il meglio della Serie A TIM e i migliori momenti del Campionato 2015/2016
con tutte le notizie, i video-goal, le sintesi sul tuo Smartphone o Tablet
e senza consumare GB. L’unica App ufficiale della Serie A TIM.
Scarica l’App e vivi la magia del calcio!</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        //Salute e benessere

        $smartLifeTaxon = App\Taxon::where('name', 'Salute e benessere')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'Salute e benessere',
          "benefits" => "<p>Prova gli ultimi wearables. Scopri come salute e benessere possono cambiare in meglio la tua vita. Libera la tua voglia di movimento. Condividi con gli amici i tuoi risultati. Il futuro è smart.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        // Casa e Famiglia

        $smartLifeTaxon = App\Taxon::where('name', 'Casa e Famiglia')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMTag',
          'description' => "Smart Life vuol dire anche una vita più semplice e sicura. Anche per la tua casa e i tuoi cari.",
          "benefits" => "<p>TIMTag, è il dispositivo che ti informa sulla posizione del tuo amico a quattro zampe e delle cose a te più care.
Segui in tempo reale i suoi spostamenti sul tuo smartphone senza perderlo mai di vista./p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIM Home Connect',
          'description' => "Smart Life vuol dire anche una vita più semplice e sicura. Anche per la tua casa e i tuoi cari.",
          "benefits" => "<p>La soluzione ideale per gestire tutti i sistemi di domotica presenti nella tua casa, dalla semplice caldaia domestica, ai sistemi di protezione della casa, ai più avanzati sistemi di monitoraggio.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'D-Link SmartHome',
          'description' => "Smart Life vuol dire anche una vita più semplice e sicura. Anche per la tua casa e i tuoi cari.",
          "benefits" => "<p>D-Link SmartHome Starter Kit ti offre la possibilità di impostare, controllare, monitorare e automatizzare la tua casa ovunque ti trovi.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        //Servizi alla persona

        $smartLifeTaxon = App\Taxon::where('name', 'Servizi alla persona')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'Pagamenti',
          'description' => "Scegli le carte di pagamento di Intesa Sanpaolo, BNL o Mediolanum: pagare è semplice e conveniente!",
          "benefits" => "<p>Accedere ai servizi, pagare per una sottoscrizione o per un acquisto, le transazioni digitali sono ormai parte della nostra vita quotidiana e si stanno via via diffondendo. L’affidabilità è una componente cruciale. Lo storage di denaro, oltre che di dati personali, può essere più comodo e anche più sicuro</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Trasporti',
          'description' => "Acquista i biglietti dei trasporti della tua città, attraverso il servizio SMS ticketing. Verifica subito se il servizio è già disponibile nella tua città!",
          "benefits" => "<p>Accedere ai servizi, pagare per una sottoscrizione o per un acquisto, le transazioni digitali sono ormai parte della nostra vita quotidiana e si stanno via via diffondendo. L’affidabilità è una componente cruciale. Lo storage di denaro, oltre che di dati personali, può essere più comodo e anche più sicuro</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Fidelity card',
          'description' => "Salva nel TIM Wallet le tue carte fedeltà per averle sempre con te",
          "benefits" => "<p>Accedere ai servizi, pagare per una sottoscrizione o per un acquisto, le transazioni digitali sono ormai parte della nostra vita quotidiana e si stanno via via diffondendo. L’affidabilità è una componente cruciale. Lo storage di denaro, oltre che di dati personali, può essere più comodo e anche più sicuro</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Coupon',
          'description' => "Risparmia su un’ampia gamma di prodotti e servizi selezionati da QUI! Group",
          "benefits" => "<p>Accedere ai servizi, pagare per una sottoscrizione o per un acquisto, le transazioni digitali sono ormai parte della nostra vita quotidiana e si stanno via via diffondendo. L’affidabilità è una componente cruciale. Lo storage di denaro, oltre che di dati personali, può essere più comodo e anche più sicuro.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

    }
}
