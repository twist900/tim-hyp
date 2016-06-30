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
          "title" => "What is line moving?",
          "content" => "Line moving permits to transfer your line to a new home, in the same or a different city."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "Can I keep my telephone number?",
          "content" => "If the new home is located in the same phone district of the old one, it will be possible to keep the old number. Until the line in the new home is activated, you can keep using the old line."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "How can I request for line moving?",
          "content" => "You can manage your moving request directly from this web site or calling the Customer Service 187. To send the request you must be registered to Clients Area."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "How much time will it take?",
          "content" => "Moving usually takes 10 working days from the request. However, in the case TIM find out it needs extra works to complete the line moving, those will be at client's charge."
          ]);

        $service->faqs()->save($faq);


        $faq = new App\Faq([
          "title" => "What is the price for line moving?",
          "content" => "The price for the moving is 73,20 €. Charges on your old house will continue until the new line is activated."
          ]);

        $service->faqs()->save($faq);


        $service = App\Service::where('name', "All'estero con TIM")->first();

        $faq = new App\Faq([
          "title" => "I'm abroad with my prepaid line, what I have to do to make phone calls?",
          "content" => "Every TIM prepaid client can automatically send and receive calls from abroad."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "How can i charge calls from abroad on my prepaid credit?",
          "content" => "With your TIM prepaid sim card you can make calls using the Direct Call service in the countries where the service is available.
          If instead the service is not available, you can try use the Call service with mode *101* depending on the agreements with the foreign telephone company and on supported services."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "How can I charge on credit card calls from my prepaid line?",
          "content" => "If you want to use your prepaid TIM all over the world independently from the available calls mode in the country you are and without being worry to finish your credit, activate credit card charge of calls and SMS from abroad. To call you will just need to type the telephone numbers adding international prefix of the county you want to call."
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "How can i call and text abroad from my contract line?",
          "content" => "All TIM's contract clients are automatically enabled to make and receive calls, send and receive SMS with every company offering the roaming service. Using your phone abroad has never been easier!"
          ]);

        $service->faqs()->save($faq);


        $service = App\Service::where('name', "Come leggere la fattura della linea fissa")->first();

        $faq = new App\Faq([
          "title" => "How to read the home line invoice?",
          "content" => "<p>In the first page you will find:</p><ul><li>home line's owner personal data</li><li>an overview of the activated contracts&nbsp;</li><li>an informative box with personalized commercial proposals relative to&nbsp; offers, products, services&nbsp;</li><li>information on payment method</li><li>payments status</li><li>a fast guide presenting, trough simple icons, information to get in contact with TIM:&nbsp;MyTIM Fisso App&nbsp;for Smartphone and Tablet, www.tim.it website, Social Network (Facebook, Youtube, Twitter, Google+), Customer Care 187, TIM Stores.</li></ul><p>In the Cost Detail page entries are arranged in a logic closer to your needs: &nbsp;</p><ul><li>fist you will find “<strong>Una Tantum Costs</strong>”,&nbsp;</li><li>then “<strong>Contracts</strong>”,&nbsp;</li><li>followed by the description “<strong>phone calls and contents</strong>” &nbsp;</li><li>and at the end the voice “<strong>Other Costs</strong>” .</li></ul>"
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "What are the advantages of online invoice?",
          "content" => "<p><spa>With online invoice you can:</span></p><ul><li><span>having clarifications of the meaning of the various parts of the invoice</span></li><li ><span>visualize call details and analyzing them by filtering by call type, offer, date, called number, time slot, duration and cost;</span></li><li><span><b>send requests to Customer Care</b>&nbsp; getting an answer in short time.</span></li><li ><span>send the invoice at your email address</span></li><li><span>visualize and download in excel format graphs about your traffic</span></li></ul>"
          ]);

        $service->faqs()->save($faq);

        $faq = new App\Faq([
          "title" => "I want to change the email address for receiving the available online invoce alert. How can I do it?",
          "content" => "Access with your username and password in the section “MyTIM Fisso” →  'My profile' → 'Manage profile' then click on “Manage email”: here you will be able to modify the existing email address, inserting a new email address or selecting from the already available addresses"
          ]);

        $service->faqs()->save($faq);

    }
}
