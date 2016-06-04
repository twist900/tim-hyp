<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->truncate();

        $service = App\Service::where('name', 'Trasloco')->first();

        $faq = new App\Faq([
          "title" => "Cos'è il trasloco di una linea telefonica?",
          "content" => "Il trasloco ti permette di trasferire la tua linea telefonica presso una nuova abitazione, nella stessa città o in una città diversa."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Posso mantenere il mio numero telefonico?",
          "content" => "Se la nuova abitazione si trova nello stesso distretto telefonico di quella di origine, salvo problemi tecnici, sarà possibile mantenere il vecchio numero telefonico. Fino al momento dell’attivazione della linea nella tua
            nuova abitazione potrai continuare ad utilizzare la linea telefonica nella tua vecchia abitazione."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Come posso richiederlo?",
          "content" => "Puoi gestire la tua richiesta di trasloco direttamente da questo sito oppure chiamando il Servizio Clienti 187. Per inviare la richiesta via web devi essere registrato all'Area Clienti."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Quali sono i tempi?",
          "content" => "Il trasloco viene effettuato di norma entro 10 giorni lavorativi dalla richiesta. Tuttavia, nel caso in cui TIM riscontri la necessità di realizzare lavori aggiuntivi per il completamento del trasloco, essi saranno completamente a tuo carico . Se il trasloco avvenisse in un periodo superiore ai 10 giorni normalmente previsti, il Servizio Clienti ti fornirà tempestiva comunicazione della causa del ritardo, fornendoti indicazioni quanto più precise possibili sulla tempistica prevista. Se i tempi di completamento superano i 60 giorni dalla data di acquisizione della tua richiesta, in alternativa, potrai richiede la cessazione della tua vecchia linea e l’attivazione di una nuova linea presso la nuova abitazione, secondo le “ procedure eccezionali” descritte nel paragrafo successivo."
          ]);

        $service->faqs()->save($faq);


        $faq = new App\Faq([
          "title" => "Quanto costa il trasloco?",
          "content" => "Il contributo da versare per il trasloco della linea telefonica è di 73,20 € (IVA al 22% inclusa).
            La fatturazione del canone e dei servizi telefonici attivi presso la tua vecchia abitazione proseguirà fino
            all’attivazione della linea presso la nuova abitazione da te indicata."
          ]);

        $service->faqs()->save($faq);


        $service = App\Service::where('name', "All'estero con TIM")->first();

        $faq = new App\Faq([
          "title" => "Sono all’estero con la mia linea ricaricabile, cosa devo fare per chiamare?",
          "content" => "Tutti i clienti TIM con una ricaricabile sono abilitati a chiamare e ricevere telefonate all'estero."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Come faccio ad addebitare i costi delle chiamate sul credito residuo della mia linea ricaricabile?",
          "content" => "Con la tua ricaricabile TIM potrai effettuare le tue telefonate,utilizzando il servizio di Chiamata Diretta dalle reti dei paesi in cui è disponibile. Ti basterà selezionare i numeri (di rete fissa o mobile italiana) dalla rubrica, o comporli direttamente, anche senza prefisso internazionale italiano +39.
            Se invece ti trovi con la tua ricaricabile TIM in un paese in cui il servizio Chiamata Diretta non è disponibile,
            potrai comunque provare ad utilizzare il servizio di Chiamata con modalità *101* a seconda degli accordi stabiliti con
            l’operatore estero e dei servizi supportati."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Come posso addebitare su carta di credito le chiamate della mia linea ricaricabile?",
          "content" => "Se vuoi utilizzare la tua ricaricabile TIM in tutto il Mondo indipendentemente dalla modalità di chiamata disponibile nel paese in cui ti rechi e senza la preoccupazione di esaurire il credito, attiva l’addebito delle chiamate e degli SMS all’estero su una tua carta di credito convenzionata (roaming domiciliato).Per chiamare ti basterà comporre i numeri di telefono aggiungendo il prefisso internazionale del paese che vuoi chiamare.Ad esempio per chiamare il numero italiano 335000000 dovrai comporre: +39335000000."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Come posso addebitare su carta di credito le chiamate della mia linea ricaricabile?",
          "content" => "Tutti i clienti TIM con un abbonamento sono automaticamente abilitati a chiamare, ricevere telefonate, inviare e ricevere SMS dall’estero con gli operatori che offrono il servizio di roaming. Usare il telefonino all’estero è facilissimo!"
          ]);

        $service->faqs()->save($faq);


        $service = App\Service::where('name', "Come leggere la fattura della linea fissa")->first();

        $faq = new App\Faq([
          "title" => "Come leggo la fattura della linea fissa?",
          "content" => "<p>Nella prima pagina trovi:</p><ul><li>i dati principali dell’intestatario della linea di casa e della fattura</li><li>il riepilogo degli abbonamenti attivi&nbsp;</li><li>un box informativo con le proposte commerciali personalizzate relative a&nbsp; offerte, prodotti, servizi&nbsp;</li><li>l’informazione sulla modalità di pagamento (bollettino, addebito su conto corrente o su carta di credito)</li><li>lo stato dei pagamenti</li><li>una guida veloce che riporta, attraverso semplici icone, i riferimenti per entrare in contatto con TIM:&nbsp;<a >App MyTIM Fisso</a>&nbsp;per Smartphone e Tablet, sito www.tim.it (registrandoti alla sezione&nbsp;<a >MyTIM Fisso</a>), Social Network (Facebook, Youtube, Twitter, Google+), Servizio clienti 187, Negozi TIM.</li></ul><p>Nella pagina del “Dettaglio dei costi” &nbsp;le voci sono riordinate secondo una logica più vicina alle tue esigenze: &nbsp;</p><ul><li>prima trovi gli eventuali “<strong>Importi Una Tantum</strong>” cioè quelli straordinari da pagare una sola volta,&nbsp;</li><li>poi gli “<strong>Abbonamenti</strong>” (canoni delle offerte/prodotti/servizi attivi),&nbsp;</li><li>segue la descrizione “<strong>Telefonate e contenuti</strong>” (consumi di traffico, sms, contenuti digitali come video on demand, ebook, ecc)&nbsp;</li><li>ed infine la voce “<strong>Altri importi</strong>” (spese di produzione e spedizione fatture, le rate dei prodotti, le indennità di ritardato pagamento, interessi legali e moratori, consegna elenchi telefonici).</li></ul>"
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Che vantaggi ho con la fattura online?",
          "content" => "<p><spa>Con la fattura online puoi:</span></p><ul><li><span>avere&nbsp;chiarimenti sul significato delle voci in fattura</span></li><li ><span>visualizzare il dettaglio di tutte le tue telefonate ed analizzarle utilizzando i filtri per tipo di chiamata, offerta, data, numero chiamato, fascia oraria, durata e costo;</span></li><li><span><b>inviare segnalazioni al Servizio Clienti</b>&nbsp;(ad es. segnalazione di errato addebito del traffico, richiesta di abilitazione di un servizio, ecc.) ottenendo la risposta in tempi brevi.</span></li><li ><span>inviare la fattura sulla tua casella emai</span></li><li><span>visualizzare e scaricare in formato excel i grafici del tuo traffico</span></li></ul>"
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Vorrei cambiare l’indirizzo e-mail su cui ricevere il messaggio della disponibilità online della mia fattura. Come posso fare?",
          "content" => "Accedi con la tua username e password nella sezione “MyTIM Fisso” →  'Il mio profilo' → 'Gestione Profilo' e quindi clicca su “Gestione email” che si trova sulla stessa riga della voce 'Email': qui potrai modificare l’indirizzo e-mail su cui ricevere il messaggio della disponibilità online della tua fattura, inserendone uno nuovo o selezionando come principale uno di quelli già presenti"
          ]);

        $service->faqs()->save($faq);

    }
}
