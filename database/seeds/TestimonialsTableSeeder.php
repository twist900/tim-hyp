<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->truncate();

        App\Testimonial::create([
            'firstname' => 'Marco',
            'lastname' => 'Leone',
            'content' => 'Copertura sempre presente,ho trovato sempre operatori al 119, rapidi nel capirmi ed estremamente cortesi.Profilo tariffario mensile soddisfacente.Ho sempre trovato molta professionalità e tanta gentilezza.Grazie Tim'
        ]);

        App\Testimonial::create([
            'firstname' => 'Francesco',
            'lastname' => 'Pariso',
            'content' => 'Sono cliente da 9 anni e non ho mai avuto problemi, ne come assistenza (ho pure avuto un rimborso a causa di un loro errore) ne come qualità. Prende ovunque, io abito in una zona di montagna e mi collego in 4G! Perfino nella metro in centro arrivo a fare una chiamata. La qualità si paga del resto.'
        ]);


        App\Testimonial::create([
          'firstname' => 'Andrea',
          'lastname' => 'Bassoleni',
          'content' => 'Ho attivato internet ADSL a volte è lenta e sotto la soglia contratto. Tim per i prossimi 4 mesi mi sconta il 50% in bolletta e mi da 15 GB di internet con scheda sim. Servizio clienti cordiale e disponibile.'
        ]);
    }
}
