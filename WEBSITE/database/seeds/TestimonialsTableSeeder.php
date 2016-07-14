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
            'content' => 'Coverage always present, I always found prepared people at 119, fast in understanding me and extremely polite. Satisfying monthly charge. I have always found lot of professionalism and kindness. Thanks TIM!'
        ]);

        App\Testimonial::create([
            'firstname' => 'Francesco',
            'lastname' => 'Pariso',
            'content' => 'I have been a TIM client for 9 years and I never had problems, both with assistance (I even had a refund for an error they made) and quality. I always have signal, I live in the mountains and I have 4G! I can call even in the underground downtown. You have to pay for quality.'
        ]);


        App\Testimonial::create([
          'firstname' => 'Andrea',
          'lastname' => 'Bassoleni',
          'content' => 'I activated ADSL internet, and sometimes it is slower then the agreement in the contract. For the next 4 months I will have a 50% discount in the invoice plus 15GB of internet with a SIM card. Customer care is kind and always available.'
        ]);
    }
}
