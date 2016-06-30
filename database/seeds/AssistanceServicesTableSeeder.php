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
          'name' => 'Home line activation',
          'description' => "<p>Asking for the activation of a new line for your home is really easy! You can:</p><ul><li>ask online</li><li>call&nbsp;the Home Line Customer Service&nbsp;187</li><li>go&nbsp;in a TIM Store.</li></ul><p>Verify activation method consulting the available offers online.</p>",
          "how_to_acquire" => "<p>Required information:</p><ul><li>name and surname</li><li>tax code</li><li>address where the line will be activated</li><li>a mobile phone number</li><li>email address (optional).</li></ul><p>Our technical support will contact you as soon as possible to arrange the meeting to install the line.</p>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => 'Line moving',
          'description' => "<p>Line moving permits you to move your telephone line to a new home, in the same city or in a different city. You can manage it online, you just need to register to Clients Area.</p>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => 'Deactivate home line services',
          'description' => "<p>Registering to our Clients Area permits you to autonomously deactivate your home line's active services; once registered navigate to “My line”-“Active services and offers” or to “My Account” inside invoice's “Costs Detail”.</p><p>You can deactivate the following services:</p><ul>  <li>Payforme: it's an active service by default that you can deactivate in “My Line” - “Overview”. </li>  <li>Who is: the service that let you see the caller number on your phone's display, from home line or mobile.</li>  <li>Memotel: <strong>&nbsp;The voicemail for your home line</strong>.</li> <li>Call transfer: the service to transfer to your mobile phone incoming calls from your home line.</li>  <li>Last missed call: calling 42400 from your home telephone you can check number, date and time of your last missed call.</li></ul>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);


        $service = new App\AssistanceService([
          'name' => 'Change from contract to prepaid',
          'description' => "<p>To&nbsp;<strong>change your TIM mobile line from contract to prepaid</strong>&nbsp;you can fill the form of “<strong>Migration request from Contract to Prepaid</strong>”. The form is available in pdf format in the section &nbsp;<strong>Modules</strong> and can be downloaded in the section “<strong>contracts clients</strong>”.<br />You can send the filled form at the fax number &nbsp;<strong>800600119</strong>.</p><p>You can do this operation writing us or in every TIM Store.</p>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);


        $service = new App\AssistanceService([
          'name' => "Abroad with TIM",
          'description' => "Using your phone abroad has never been easier!
            All TIM clients with a prepaid or a contract are automatically able to call, receive calls, send and receive SMS from abroad. And it's easy like in Italy!"
          ]);

        $serviceTaxon->assistanceServices()->save($service);

        $service = new App\AssistanceService([
          'name' => "Check your credit abroad",
          'description' => "<p>When you are abroad you can check your TIM prepaid credit in these ways:</p><ul><li>you can <strong>call 40916</strong> also if you have no more credit left.</li><li>If you still have credit left you can use the service<strong>40916 by SMS</strong> sending a free message to <strong>40916</strong> with the string '<strong>CREDIT</strong>'.</li><li>Directly from pc online in the section <strong>MyTIM Mobile</strong>.</li><li>From your mobile on <strong>TIM.it</strong> optimized for your smartphone, or by <strong>MyTIM Mobile App</strong>, freely available for <strong>iPhone</strong> and <strong>Android</strong>. If you want to know prices for internet abroad, check the section <strong>costs to surf the internet with your phone or pc</strong>.</li><li>As last option, you can check your credit from abroad typing <strong>*123# followed by enter</strong> if the local provider supports this service. After some moments your credit will appear on your phone's display.</li></ul>"
          ]);

        $serviceTaxon->assistanceServices()->save($service);



      $serviceTaxon = App\Taxon::where('name', 'Controlla costi e pagamenti')->first();

      $service = new App\AssistanceService([
        'name' => "How to read home line's invoice",
        'description' => "Home line's invoice is easy to read since we designed it starting from clients' suggestions. The modern graphic design use a clear language to show costs detail, helping reaching all the information you need and granting high transparency in contents and costs."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Check credit and bonus available for prepaid clients",
        'description' => "Find out how to consult information about credit, offers and active bonus on your line."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Calls detail for prepaid clients",
        'description' => "<p>The service '<strong>traffic documentation</strong>' gives you the possibility to have the detail of each call, data connection or other event, coming from your line. For each event you will be able to check date and time, cost, type and called number if it's a phone call or a sms.<br /><br /><strong>Traffic documentation is always available in </strong><strong>MyTIM Mobile</strong> and you can access traffic information of up to two months before in different formats (for example pdf).&nbsp;<br /><br /></p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Find out how you can check costs of your contract line",
        'description' => "You can check your contract expenses directly online, calling the free number 40915 or from your phone with the TIM App."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Payment methods for the mobile invoice",
        'description' => "Paying the invoice is easy and fast. Find out all the services that TIM thought for you and your contract line."
        ]);

      $serviceTaxon->assistanceServices()->save($service);


      $serviceTaxon = App\Taxon::where('name', 'Supporto tecnico e configurazione')->first();

      $service = new App\AssistanceService([
        'name' => "Specialized tecnichal support with SOSsmartphone",
        'description' => "<p><strong>SOSsmartphone</strong>&nbsp; is the TIM service for all clients that permits you to obtain a specialized tecnichal support for your smartphone or tablet.</p><p>Thanks to &nbsp;<strong>SOSsmartphone</strong>&nbsp; service you can talk to an expert that will give you all the “premium” help you need and most of all it will be able to remotely connect to your device to solve the problem.</p><p>Services you can recive with &nbsp;<strong>SOSsmartphone</strong>&nbsp;are:</p><ul>  <li>support for data transfer in case of telephone change: contacts, photos, sms;</li>  <li>help to use your phone's advanced options;</li> <li>specialized assistance on smartphone's advanced configurations and connection to your home line;</li> <li>managing and synconization of your multimedia contents;</li> <li>support to grant maximum security;</li> <li>protection of your data;</li>  <li>contents transfer;</li>  <li>software updates for your smartphone;</li>  <li>check up.</li></ul><p><br />To ask for &nbsp;<strong>SOSsmartphone</strong>&nbsp; service you can:</p><ul> <li>contact the number&nbsp;<strong>0458214811</strong>&nbsp;;</li> <li>Download <strong>SOS Smartphone App</strong>&nbsp;from APP Store (iOS) and Google Play (Android) and ask for support.</li></ul><p>SOSsmartphone is a paid service&nbsp;<strong>ad intervento</strong>&nbsp;starting from 3€.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Discount to change your phone",
        'description' => "<p>Do you want a new smartphone?</p><p>Bring us your old phone,&nbsp;<strong>from today you will have a discount on a new one</strong>!</p><p>With&nbsp;<strong>TIM Valuta</strong>&nbsp; service you can obtain a free evaluation of your phone, smartphone or tablet. &nbsp;<strong>Receive a discount immediately</strong>&nbsp;to use as you wish: to buy a new&nbsp;<strong>phone</strong>,&nbsp;<strong>smartphone</strong>, <strong>tablet</strong>,&nbsp;<strong>internet key</strong>,&nbsp;<strong>Internet Pack</strong>, or in&nbsp;<strong>credit</strong>&nbsp;.The service is open to everyone!</p><p><br />Getting the evaluation is easy. You just need to:</p><p>•&nbsp;bring to one of the&nbsp;<strong>TIM Store</strong> your old phone, smartphone or tablet<br />• The shop personnel will evaluate the product,  prodotto<br />• If you accept the proposed evaluation, you will get the discount and you can use it immediately!</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Mail configuration on iPhone",
        'description' => "<p>In <strong>Settings</strong>:</p><ul> <li>choose <strong>Mail, contacts, calendars</strong></li> <li>then <strong>Add account... </strong></li> <li>from provider list go to <strong>Others</strong></li></ul>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Connect to the internet with your phone",
        'description' => "<p>Normally phone sold by TIM are already configured to connect to the internet&nbsp;<strong>Internet</strong>&nbsp;automatically, otherwise you'll have to follow the procedure to configure the service.&nbsp;<br />This procedure will let you check if the configuration is correct on your phone:</p><ul><li><strong>If you have a TIM phone</strong>, you just have to click on the <strong>Internet Browser icon</strong>;</li><li><strong>If instead you don't own a TIM phone</strong>, you just have to click on the Internet Browser icon and go to the address&nbsp;<strong>wap.tim.it</strong>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "TIM Mail - Password renewal or other access problems",
        'description' => "Access to TIM mail is possible from the web or through email clients filling the email address (@tim.it or @alice.it) and the password. If you forget your password, you can easily set a new one. To know how read our guide to get back username and password."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $serviceTaxon = App\Taxon::where('name', 'Smart Life Services')->first();

      $service = new App\AssistanceService([
        'name' => "What is TIMgames",
        'description' => "<p>TIMgames is the TIM gaming service that permits to each client to download on smartphones and tablets the best games on demand for mobile devices.</p><p>With TIMgames you'll always have available a library of more than 1500 games, updated every week with new titles and discounted games in the store.</p><p>TIMgames is available both on the App and on the browser on <u><www.timgames.it</u>. The user can choose the preferred payment method between on demand and contract.</p><p>In particular:</p><ul><li><p>On demand: starting from 0,49€;</p></li><li><p>Contract: with I Love Games Promo, for just 2€ per week you can download limitless all games present on TIMgames. Fist month in discount at just 1€ per week.</p></li></ul>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "All methods to sign up",
        'description' => "<p>With TIMgames you can choose all the games you want with two simple methods:</p><ul> <li>On demand: just access to the mobile website www.timgames.it or from TIMgames App and choose all games. Inside the outlet area, you will find many games to try for free before buying;</li> <li>Contract: to activate I Love Games Promo, for just 2€ per week, you can go to every TIM Store, call 119, call 409167 or through tim.it</li></ul>In both cases, going in the section MyTIMgames, you will be able to see all the downloaded games and manage the active contract subsciptions."
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "How to access TIMgames",
        'description' => "<p>You can access TIMgames service in the following ways:</p><p><u>Smartphone and Tablet Android</u>:</p><ul>  <li>Mobile website www.timgames.it</li> <li>TIMgames App from Google Play;</li></ul><p><u>Apple and Windows Phone</u>:</p><ul> <li>Mobile website www.timgames.it</li></ul><p>With TIMgames playing it's easy, your smartphone/tablet is automatically recognized and you will see only compatible games.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "Getting to know TIMgames App",
        'description' => "<p>Navigate and choose between your favorite games inside TIMgames is easy and intuitive.</p><p>Inside the home page, at the top, you will find the available contracts for your phone. Scrolling down the page you'll have all the on demand games. Inside the “try for free” section, you can try all the games you want before buying them.</p>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);

      $service = new App\AssistanceService([
        'name' => "How to check your contract",
        'description' => "<p>To check your contract, you can:</p><ul> <li>access www.timgames.it and click on MyTIMgames. &nbsp;Inside the section “manage contract” you'll find all the details of your subscription;</li>  <li>Access Clients Area on tim.it and click in the “options” section</li> <li>or call 40916 and check the activated options on your profile.</li></ul>"
        ]);

      $serviceTaxon->assistanceServices()->save($service);





    }
}
