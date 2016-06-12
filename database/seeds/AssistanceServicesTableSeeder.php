<?php

use Illuminate\Database\Seeder;

class AssistanceServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\AssistanceService::truncate();

        $serviceTaxon = App\Taxon::where('name', 'Gestione linea e servizi')->first();

        $service = new App\AssistanceService([
          'name' => 'Attivazione linea di casa',
          'description' => "<p>Richiedere l’attivazione di una linea telefonica di casa è molto semplice, puoi:</p><ul><li>richiederla <a>online</a></li><li>chiamare&nbsp;il Servizio Clienti linea fissa&nbsp;187</li><li>recarti&nbsp;presso un Negozio TIM.</li></ul><p>Verifica la modalità di attivazione consultando on line le varie offerte disponibili.</p>",
          "how_to_acquire" => "<p>I dati necessari sono:</p><ul><li>nome e cognome</li><li>codice fiscale</li><li>indirizzo dell'abitazione per cui richiedi l'installazione della linea</li><li>un recapito telefonico di cellulare</li><li>indirizzo email (facoltativo).</li></ul><p>Il nostro personale tecnico ti contatterà quanto prima per concordare l’appuntamento per l’installazione dell’impianto telefonico.</p>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => 'Trasloco',
          'description' => "<p>Il trasloco è un'operazione che ti consente di spostare la tua linea telefonica presso una nuova abitazione, nella stessa città o in una città diversa. Puoi gestirla direttamente online basta registrarsi all’Area Clienti.</p>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => 'Disattivare i servizi di linea fissa',
          'description' => "<p><a>Registrandoti</a> alla nostra Area Clienti puoi gestire autonomamente la cessazione dei servizi attivi sulla tua linea telefonica; una volta entrato naviga all’interno de “La mia Linea”-“Servizi e Offerte Attivi” oppure su “il Mio Conto” all’interno del “Dettaglio Costi” della fattura.</p><p>I servizi che puoi disattivare sono i seguenti:</p><ul>  <li>Payforme: è un servizio attivo di default che puoi disattivare nella sezione “La mia Linea” - “Riepilogo”. Clicca <a>qui</a> per disabilitare.</li>  <li>Chi è : servizio che ti consente di visualizzare sul display del tuo telefono predisposto il numero di chi ti sta chiamando, da rete fissa o da rete mobile. Clicca <a>qui</a> per disabilitare</li>  <li>Memotel: <strong>la&nbsp;segreteria telefonica che puoi attivare sulla tua linea di casa</strong>.</li> <li>Trasferimento di chiamata: il servizio che ti consente di trasferire anche sul tuo cellulare le chiamate in arrivo al tuo numero di casa.</li>  <li>Ultima chiamata persa:componendo il 42400 dal telefono fisso puoi conoscere l'ultimo numero, sia fisso che mobile che ti ha chiamato, la data e l’ora.</li></ul>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => 'Disattivare i servizi di linea fissa',
          'description' => "<p><a>Registrandoti</a> alla nostra Area Clienti puoi gestire autonomamente la cessazione dei servizi attivi sulla tua linea telefonica; una volta entrato naviga all’interno de “La mia Linea”-“Servizi e Offerte Attivi” oppure su “il Mio Conto” all’interno del “Dettaglio Costi” della fattura.</p><p>I servizi che puoi disattivare sono i seguenti:</p><ul>  <li>Payforme: è un servizio attivo di default che puoi disattivare nella sezione “La mia Linea” - “Riepilogo”. Clicca <a>qui</a> per disabilitare.</li>  <li>Chi è : servizio che ti consente di visualizzare sul display del tuo telefono predisposto il numero di chi ti sta chiamando, da rete fissa o da rete mobile. Clicca <a>qui</a> per disabilitare</li>  <li>Memotel: <strong>la&nbsp;segreteria telefonica che puoi attivare sulla tua linea di casa</strong>.</li> <li>Trasferimento di chiamata: il servizio che ti consente di trasferire anche sul tuo cellulare le chiamate in arrivo al tuo numero di casa.</li>  <li>Ultima chiamata persa:componendo il 42400 dal telefono fisso puoi conoscere l'ultimo numero, sia fisso che mobile che ti ha chiamato, la data e l’ora.</li></ul>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);


        $service = new App\AssistanceService([
          'name' => 'Passaggio da abbonamento a ricaricabile',
          'description' => "<p>Per&nbsp;<strong>passare la tua utenza TIM da abbonamento a servizio ricaricabile</strong>&nbsp;puoi compilare il modulo di “<strong>Richiesta di migrazione da abbonamento a ricaricabile</strong>”. Il modulo è disponibile in formato pdf nella sezione&nbsp;<a><strong>Moduli</strong></a> e può essere scaricato direttamente dalla sottosezione “<strong>clienti con abbonamento</strong>”.<br />Potrai inviare il modulo compilato con la richiesta di cessazione del contratto di abbonamento e la specificata volontà di passare verso servizio ricaricabile (indicando il profilo e l'eventuale opzione) e la modalità di rimborso&nbsp;<strong>ACI</strong>&nbsp;(assegno/accredito su linea ricaricabile), al numero di fax dedicato&nbsp;<strong>800600119</strong>.</p><p>Puoi effettuare il passaggio scrivendoci o in alternativa presso un qualsiasi&nbsp;<a>Negozio TIM</a>.</p>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);


        $service = new App\AssistanceService([
          'name' => "All'estero con TIM",
          'description' => "Usare il telefonino all’estero è facilissimo!
            Tutti i clienti TIM con una linea ricaricabile e con un abbonamento sono automaticamente abilitati a chiamare,ricevere
            telefonate, inviare e ricevere SMS dall’estero. Ed è facile come in Italia!"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => "Verifica il credito residuo mentre sei all'estero",
          'description' => "<p>Quando sei all’estero puoi controllare il credito residuo della tua ricaricabile TIM attraverso le seguenti modalità:</p><ul><li>Se il gestore locale supporta il servizio di <strong><a>Chiamata Diretta</a></strong>, puoi <strong>chiamare il 40916</strong> anche se sei a credito zero.</li><li>Se hai ancora credito residuo puoi utilizzare il servizio <strong>40916 tramite SMS</strong> inviando un messaggio gratuito al <strong>40916</strong> con la sintassi '<strong>CREDITO</strong>'.</li><li>Direttamente da pc online entrando nella sezione <strong><a>MyTIM Mobile</a></strong>.</li><li>Dal telefonino sul sito <strong><a>TIM.it</a></strong> ottimizzato per il tuo smartphone, oppure attraverso l’<strong><a>App MyTIM Mobile</a></strong>, attualmente disponibile in download gratuito nelle versioni per <a><strong>iPhone</strong></a> e per <a><strong>smartphone con sistema operativo Android</strong></a>. Se vuoi sapere quanto costa navigare in Internet quando sei all'estero, puoi consultare la sezione <strong><a>costi della navigazione in Internet col telefonino o col pc</a></strong>. In questo caso infatti, per la visualizzazione delle informazioni, sosterrai i costi e le condizioni normalmente applicate al traffico dati in roaming.</li><li>Infine dall'estero, è possibile verificare il proprio credito digitando <strong>*123# seguito da INVIO</strong> laddove il gestore locale consenta questo servizio. Dopo alcuni istanti comparirà l'ammontare del tuo credito residuo direttamente sul display del telefonino.</li></ul>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);



      $serviceTaxon = App\Taxon::where('name', 'Controlla costi e pagamenti')->first();

      $service = new App\AssistanceService([
        'name' => "Come leggere la fattura della linea fissa",
        'description' => "La fattura della linea fissa è semplice e facile da leggere perché disegnata prendendo spunto dai suggerimenti dei clienti. La veste grafica, moderna e raffinata, utilizza un linguaggio sempre più chiaro per l’esposizione delle voci di spesa, facilitando la lettura di tutte le informazioni di cui hai bisogno e garantendo maggiore trasparenza nei contenuti e negli importi."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Verifica credito residuo e bonus disponibili per i clienti Prepagati",
        'description' => "Scopri come consultare le informazioni relative al credito residuo, alle offerte e ai bonus attivi sulla tua linea."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Dettaglio delle chiamate per Clienti Ricaricabili",
        'description' => "<p>Il servizio '<strong>documentazione traffico</strong>' ti offre la possibilità di avere il dettaglio di ogni telefonata, connessione dati o altro evento, effettuato dalla tua linea (*). Per ogni evento viene fornita l’indicazione della data/ora di effettuazione, del costo, della tipologia e del numero chiamato se si tratta di traffico voce o sms (con le ultime tre cifre asteriscate - L. 171/98 'Tutela vita privata nelle telecomunicazioni').&nbsp;<br /><br /><strong>La documentazione del traffico è sempre disponibile in </strong><a><strong>MyTIM Mobile</strong></a> e consultabile fino a due mesi antecedenti la data di consultazione del traffico se utilizzi una linea ricaricabile, in diversi formati facilmente consultabili ed archiviabili (esempio pdf).&nbsp;<br /><br />È comunque possibile richiedere l’invio di un tabulato cartaceo del traffico pregresso (equivalente al pdf già disponibile in MyTIM Mobile), o l’invio di un tabulato del traffico pregresso in chiaro (deve essere in questo caso specificato),&nbsp;purché rientri nei periodi sopra indicati.&nbsp;In questo caso dovrai compilare ed inviare l'apposito modulo di 'Richiesta Documentazione Traffico' che puoi scaricare in formato pdf dalla sezione&nbsp;<a ><strong>Moduli</strong></a>, selezionando la sottosezione Ricaricabile di riferimento.&nbsp;<br />&nbsp;</p><p><br />(*) alcune tipologie di traffico, per cui non è previsto un costo, possono non essere documentate.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Scopri come consultare i consumi della tua linea con abbonamento",
        'description' => "Puoi consultare i consumi del tuo Abbonamento direttamente online, chiamando il numero gratuito 40915 o navigando da telefonino. Scopri come."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Modalità di pagamento della fattura linea mobile",
        'description' => "Pagare la fattura è sempre più semplice e veloce. Scopri tutti i servizi che TIM ha pensato per te e per la tua linea con abbonamento."
        ]);

      $serviceTaxon->assistanceServices()->save($service);


      $serviceTaxon = App\Taxon::where('name', 'Supporto tecnico e configurazione')->first();

      $service = new App\AssistanceService([
        'name' => "Assistenza tecnica specializzata con SOSsmartphone",
        'description' => "<p><strong>SOSsmartphone</strong>&nbsp;è il servizio di TIM per tutti i clienti,&nbsp;Ricaricabili o con Abbonamento, che permette di ricevere un’assistenza tecnica specializzata e personalizzata per la gestione del proprio smartphone o tablet.</p><p>Grazie al servizio&nbsp;<strong>SOSsmartphone</strong>&nbsp;potrai parlare con un esperto che ti fornirà tutta la consulenza e l’assistenza “premium” di cui necessiti e che soprattutto sarà in grado di connettersi in remoto ed operare direttamente sul tuo dispositivo.</p><p>I servizi che potrai ricevere con&nbsp;<strong>SOSsmartphone</strong>&nbsp;sono:</p><ul>  <li>supporto per trasferimento dati in caso di cambio telefono: esempio trasferimento rubrica, foto, sms;</li>  <li>consulenza nell’utilizzo delle funzioni avanzate dello smartphone;</li> <li>assistenza specialistica sulle configurazioni avanzate dello smartphone e integrazione nella tua rete domestica;</li> <li>gestione e sincronizzazione dei tuoi contenuti multimediali;</li> <li>supporto per garantire il massimo della sicurezza;</li> <li>conservazione e protezione dei tuoi dati;</li>  <li>trasferimento di contenuti;</li>  <li>aggiornamento del tuo smartphone;</li>  <li>effettuazione check up.</li></ul><p><br />Per richiedere il servizio&nbsp;<strong>SOSsmartphone</strong>&nbsp;potrai:</p><ul> <li>contattare il numero&nbsp;<strong>0458214811</strong>&nbsp;(chiamata a pagamento in base al proprio piano tariffario/offerta);</li> <li>scaricare l’<strong>App SOS Smartphone</strong>&nbsp;da APP Store (per iOS) e Google Play (per Android) e richiedere l’intervento.</li></ul><p>Il servizio SOSsmartphone prevede un costo&nbsp;<strong>ad intervento</strong>&nbsp;a partire da 3€ (IVA inclusa). L’importo sarà addebitato in fattura se sei un cliente con Abbonamento mentre sarà scalato dal credito residuo se sei un cliente Ricaricabile.<br />Dal 12 maggio inoltre il servizio SOSsmartphone&nbsp;è disponibile anche&nbsp;<strong>in abbonamento</strong>&nbsp;a 2€/mese. In questo modo avrai l’assistenza di cui hai bisogno sempre disponibile e completa per un anno.<br /><br />Per approfondimenti sul SOSsmartphone&nbsp;<a><strong>clicca qui</strong></a><strong>.</strong></p><p>Ti ricordiamo che nell’area&nbsp;<strong>Assistenza</strong>&nbsp;del sito TIM.it sono a tua disposizione tutte le guide per le configurazioni di smartphone, tablet e chiavette che ti consentiranno, in completata autonomia, di configurare il tuo telefonino a tutti i servizi TIM. Per accedere&nbsp;<a><strong>Clicca qui</strong></a> e seleziona la marca ed il modello di tuo interesse.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Buono sconto per cambio telefono",
        'description' => "<p>Vuoi un nuovo smartphone?</p><p>Portaci il tuo vecchio telefono,&nbsp;<strong>da oggi vale uno sconto sul nuovo</strong>!</p><p>Con il servizio&nbsp;<strong>TIM Valuta</strong>&nbsp;puoi far valutare gratuitamente e senza impegno il tuo telefonino, smartphone o tablet. &nbsp;<strong>Ricevi subito uno sconto</strong>&nbsp;da utilizzare come meglio desideri: per l’acquisto di un nuovo&nbsp;<strong>telefonino</strong>,&nbsp;<strong>smartphone</strong>, <strong>tablet</strong>,&nbsp;<strong>chiavetta</strong>,&nbsp;<strong>Internet Pack</strong>, oppure in&nbsp;<strong>Ricarica</strong>&nbsp;<strong>telefonica TIM</strong>. Il servizio è aperto a tutti!</p><p><br />Far valutare il telefono è molto semplice. E’ sufficiente:</p><p>•&nbsp;portare presso uno dei&nbsp;<a><strong>negozi TIM</strong></a> che aderiscono all’iniziativa il tuo vecchio telefono, smartphone o tablet<br />• l’addetto del negozio procederà alla valutazione del prodotto, verificandone le condizioni e lo stato d’uso<br />• se accetti la valutazione, riceverai uno sconto di pari valore che potrai utilizzare subito per l’acquisto di un nuovo smartphone, tablet, oppure Ricariche telefoniche TIM.</p><p>Per&nbsp;maggiori informazioni sul servizio&nbsp;<a><strong>Clicca qui</strong></a></p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Configurazione Mail su iPhone",
        'description' => "<p>Nelle <strong>Impostazioni</strong>:</p><ul> <li>scegli la voce <strong>Posta, contatti, calendari</strong></li> <li>quindi <strong>Aggiungi account... </strong></li> <li>dall'elenco dei provider vai su <strong>Altro</strong>:</li></ul>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Connettersi a Internet col telefonino",
        'description' => "<p>Normalmente i telefoni commercializzati da TIM sono già predisposti per il collegamento&nbsp;<strong>Internet</strong>&nbsp;in maniera automatica, altrimenti dovrai eseguire la procedura di configurazione del servizio.&nbsp;<br />Di seguito i passi da effettuare per capire se il tuo telefonino è configurato:</p><ul><li><strong>Se hai un telefonino TIM</strong>, ti basterà cliccare sull’<strong>icona&nbsp;del Browser Internet</strong>;</li><li><strong>Se invece non hai un telefonino TIM</strong>, ti basterà cliccare sull’icona del Browser Internet e digitare l'indirizzo&nbsp;<strong>wap.tim.it</strong>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "TIM Mail - Password dimenticata o altri problemi di accesso",
        'description' => "L’accesso al servizio TIM Mail è possibile tramite web o con programmi di posta (ad es. MS Outlook) inserendo indirizzo email (@tim.it o @alice.it) e la relativa password.Può però succedere di dimenticare la password o di incorrere in altri problemi di accesso, come ad esempio l’account di posta bloccato per motivi di sicurezza e/o sospetto furto di credenziali.Se hai impostato un’opzione di recupero credenziali, puoi facilmente recuperare online la tua username o reimpostare la tua password. Per sapere come fare, consulta la nostra guida al recupero di username e password."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $serviceTaxon = App\Taxon::where('name', 'Smart Life Services')->first();

      $service = new App\AssistanceService([
        'name' => "Cos’è TIMgames",
        'description' => "<p>TIMgames è servizio TIM edicato al gaming che consente a tutti i clienti di scaricare su tablet e smartphone i migliori giochi on demand e in abbonamento per il mondo mobile.</p><p>Con TIMgames avrai a disposizione una library di oltre 1500 giochi, aggiornata ogni settimana con nuovi titoli e giochi in offerta presenti nell’area promozioni dello store.</p><p>TIMgames èaccessibile sia da App (scaricabile da Google Play) che da browser su <u><a >www.timgames.i</a></u><a><u>t</u></a> L’utente può scegliere la modalità di acquisto preferita tra on demand e abbonamento.</p><p>In particolare:</p><ul><li><p>On demand: a partire da 0,49€, acquistando e scaricando un gioco sul proprio telefonino;</p></li><li><p>In abbonamento: con I Love Games Promo, a soli 2€ a settimana si possono scaricare senza limiti tutti i giochi presenti su TIMgames. Il primo mese è in promozione a solo 1€ a settimana.</p></li></ul>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Tutti i modi per abbonarsi",
        'description' => "<p>Con TIMgames hai la possibilità di scegliere tutti i giochi che vuoi per il tuo telefonino in due semplici modalità:</p><ul> <li>On demand: basta accedere al sito mobile <a>www.timgames.it</a> oppure dall’App TIMgames e scegliere tutti i giochi presenti. Il prezzo è indicato accanto ad ogni titolo. Inoltre, all’interno della sezione promozioni, troverai molti giochi da provare gratuitamente prima di effettuare l’acquisto;</li> <li>Abbonamento: per attivare I Love Games Promo, a soli 2€ a settimana in promo a metà prezzo per il primo mese, puoi andare in qualsiasi negozio TIM, chiamare il 119, il 409167 oppure tramite il sito tim.it</li></ul>In entrambi i casi, accedendo alla sezione MyTIMgames, potrai visualizzare tutti i giochi scaricati e gestire gli abbonamenti sottoscritti."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Come accedere a TIMgames",
        'description' => "<p>Puoi accedere al servizio TIMgames nei seguenti modi:</p><p><u>Smartphone e Tablet Android</u>:</p><ul>  <li>Sito mobile <a>www.timgames.it</a></li> <li>App TIMgames scaricabile da Google Play;</li></ul><p>N.B.: Con l’abbonamento I love Games promo attivo puoi <u>scaricare</u> da TIMgames tutti i giochi che vuoi sul tuo Smartphone/Tablet.</p><p><u>Apple e Windows Phone</u>:</p><ul> <li>Sito mobile <a>www.timgames.it</a></li></ul><p>N.B.: Con l’abbonamento I love Games promo attivo puoi <u>accedere</u> a TIMgames e giocare a tutti i giochi che vuoi con il tuo Smartphone/Tablet.</p><p>Con TIMgames è molto semplice giocare, il tuo Smartphone/Tablet vengono riconosciuti in automatico e visualizzi solo i giochi compatibili.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Conoscere l’App TIMgames",
        'description' => "<p>Navigare e scegliere i giochi preferiti all’interno di TIMgames è semplice e intuitivo.</p><p>All’interno della Home Page, in alto, troverai gli abbonamenti disponibili per il tuo telefonino. Scorrendo la pagina verso il basso, avrai a disposizione tutti i giochi on demand. All’intero della sezione “prova gratis”, potrai inoltre provare tutti i giochi vuoi prima di acquistarli.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Come vedere i propri abbonamenti",
        'description' => "<p>Per visualizzare il proprio abbonamento, puoi:</p><ul> <li>entrare su <a>www.timgames.it</a> e cliccare su MyTIMgames. &nbsp;All’interno della sezione “gestione abbonamenti” troverai tutti i dettagli del servizio da te sottoscritto;</li>  <li>entrare nell’Area clienti del sito tim.it e cliccare poi nella sezione “opzioni”</li> <li>oppure chiamare il 40916 e consultare le opzioni attive sul proprio profilo.</li></ul>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);





    }
}
