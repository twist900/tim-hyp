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
          'description' => "Endless fun",
          "benefits" => "<p>Discover best movies, most exciting TV shows, cartoons, sport and much more on TVs, computers, tablets  and smartphones.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMmusic',
          'description' => "The soundtrack of your life",
          "benefits" => "<p>Listen to million of songs in streaming, check out newest music, choose between tons of playlists for every mood.
On smartphones, computers and tablets. Whenever and wherever you want.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMreading',
          'description' => "Read everywhere. Whenever you want.",
          "benefits" => "<p>Bring always with you your favorite books on smartphones and tablets.
Follow your passions in the most read magazines.
Read newspapers from early morning. </p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMgames',
          'description' => "New challenges are waiting for you!",
          "benefits" => "<p>Shooter games, extreme sports, best classics and much more. With TIMgames you'll have hundreds of games
 always available on your smartphone and tablet.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Serie A TIM',
          'description' => "For football lovers",
          "benefits" => "<p>Never miss Serie A TIM highlights and the best moments from 2015/2016 championship.  All latest news, video-goals and recaps always available on TIM's app!</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        //Salute e benessere

        $smartLifeTaxon = App\Taxon::where('name', 'Health and wellness')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'Health and Wellness',
          "benefits" => "<p>Try last wearables devices. Find out how health and wellnes can change your life for the best. Free your desire to move. Share your results with friends. The future is smart.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        // Home and Family

        $smartLifeTaxon = App\Taxon::where('name', 'Home and Family')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'TIMTag',
          'description' => "Smart Life means also a simpler and more secure life. Also for your home and your loved ones.",
          "benefits" => "<p>TIMTag is the device that informs you on the position of your pet friend and of your favorite things.
Follow its movement on your smartphone, never loosing it again./p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'TIM Home Connect',
          'description' => "Smart Life means also a simpler and more secure life. Also for your home and your loved ones.",
          "benefits" => "<p>The solution to manafe all domotic systems in your house, from security systems to heat, to the most advanced monitoring systems.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'D-Link SmartHome',
          'description' => "Smart Life means also a simpler and more secure life. Also for your home and your loved ones.",
          "benefits" => "<p>D-Link SmartHome Starter Kit gives you the possibility to configure, control, monitor and automatize your house wherever you are.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        //Personal services

        $smartLifeTaxon = App\Taxon::where('name', 'Personal services')->first();

        $smartLife = new App\SmartLifeService([
          'name' => 'Payments',
          'description' => "Choose between payments cards from Intesa Sanpaolo, BNL or Mediolanum: paying is simple and convenient!",
          "benefits" => "<p>Access to services, pay for a subscription or a product, digital transactions are nowadays parts of our life and they are increasing. Security is a crucial aspect. Money and personal data storage can be more comfortable and safe.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Transports',
          'description' => "Buy public transport tickets, with TIM's SMS ticketing service. Verify now if the service is already available in your city!",
          "benefits" => "<p>Access to services, pay for a subscription or a product, digital transactions are nowadays parts of our life and they are increasing. Security is a crucial aspect. Money and personal data storage can be more comfortable and safe.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Fidelity card',
          'description' => "Save in TIM Wallet your fidelity cards to have them always with you",
          "benefits" => "<p>Access to services, pay for a subscription or a product, digital transactions are nowadays parts of our life and they are increasing. Security is a crucial aspect. Money and personal data storage can be more comfortable and safe.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

        $smartLife = new App\SmartLifeService([
          'name' => 'Coupon',
          'description' => "Save money on a vaste set of products and services selected by QUI! Group",
          "benefits" => "<p>Access to services, pay for a subscription or a product, digital transactions are nowadays parts of our life and they are increasing. Security is a crucial aspect. Money and personal data storage can be more comfortable and safe.</p>"
          ]);

        $smartLifeTaxon->smartLifeServices()->save($smartLife);

    }
}
