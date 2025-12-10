<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Accommodation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

                // Default placeholder
        $placeholder = 'https://placehold.co/1200x800?text=No+Image';

        // Vlastní mapování fotek z webu
        // -> Můžeš kdykoliv doplnit lepší URL
        $images = [
            'U Morisse'                   => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/74710710.jpg?k=7dc4b3e4d55f34d4a9eb154db865671674fbcde81cc7f9ca027fc890ca4026f5&o=',
            'Penzion Marmar'              => 'https://www.kuncicemarmar.cz/assets/img/galerie/1.jpg',
            'Kunčice 7' => 'https://www.kuncice7.cz/wp-content/uploads/2024/01/uvodni-1.jpg',
            'Chata Sněžník'               => 'https://www.chatasneznik.cz/images/galerie/1.jpg',
            'Chata Pod Horou'             => 'https://www.chatapodhorou.cz/wp-content/uploads/2021/09/chata-pod-horou-1.jpg',
            'Chata Stavěnka'              => 'https://www.stavenka.cz/img/stavenka-01.jpg',
            'Chalupa Bačovo Kunčice'      => 'https://www.e-chalupy.cz/fotky/chalupa16746_1.jpg',
            'Penzion Windy'               => 'http://www.pensionwindy.cz/fotky/penzion_windy_1.jpg',
            'Roubenka Kunčice'            => 'https://www.dovolenakuncice.cz/wp-content/uploads/2023/05/roubenka-1.jpg',
            'Roubenka Forest'             => 'https://forestroubenka.cz/wp-content/uploads/2022/08/roubenka-forest-1.jpg',
            'Chata Junior'                => 'https://www.chatajunior.cz/wp-content/uploads/2020/03/junior-01.jpg',
            'Chata Stará Škola'           => 'https://www.staraskola.eu/images/stara_skola_01.jpg',
            'Roubenka U Lípy'             => 'https://www.jeseniky-kuncice.cz/img/1.jpg',
            'Chata U Profesora'           => 'https://www.staromestsko.cz/wp-content/uploads/2022/05/chata-u-profesora-1.jpg',
            'Penzion ALBERT'              => 'https://www.albertkuncice.cz/img/galerie/1.jpg',
            'Chalupa Tři studánky'        => 'https://www.chalupatristudanky.cz/wp-content/uploads/2020/02/tri-studanky-1.jpg',
            'Chata Trojanka'              => 'http://trojanka-kuncice.cz/gallery/foto1.jpg',
            'Apartmány Šestka'            => 'https://www.ap6ka.cz/wp-content/uploads/2020/09/ap6ka-1.jpg',
        ];

        $accommodations = [
            [
                'name'         => 'U Morisse',
                'content'      => "Apartmán ve Starém Městě pod Sněžníkem s kapacitou 5 lůžek, vlastním vstupem z ulice, parkováním za plotem, kuchyňským koutem a Wi-Fi.",
                'address'      => 'Nádražní 101, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'ubytovani@umorisse.cz',
                'phone'        => '+420 602 206 987',
                'phone2'       => '+420 776 181 931',
                'website'      => 'https://www.umorisse.cz',
                'slug'         => Str::slug('U Morisse'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Penzion Marmar',
                'content'      => "Rodinný penzion v Kunčicích s apartmány pro 5 a 8 osob, výhledem na skiareál, klimatizací, Wi-Fi a plně vybavenými kuchyněmi.",
                'address'      => 'Kunčice 27, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'info@kuncicemarmar.cz',
                'phone'        => '+420 739 026 959',
                'phone2'       => null,
                'website'      => 'https://www.kuncicemarmar.cz',
                'slug'         => Str::slug('Penzion Marmar'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Kunčice 7',
                'content'      => "Prostorná chalupa pár minut chůze od sjezdovky s kapacitou až 20 osob. Chalupa disponuje 7 ložnicemi, 3 koupelnami, plně vybavenou kuchyní, společenským prostorem pro děti i dospělé, lyžárnou. Parkování na oploceném pozemku přímo u chalupy.",
                'address'      => 'Kunčice, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'ahoj@kuncice7.cz',
                'phone'        => '+420 777 671 771',
                'phone2'       => null,
                'website'      => 'https://www.kuncice7.cz',
                'slug'         => Str::slug('Kunčice 7'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            
            [
                'name'         => 'Chata Sněžník',
                'content'      => "Horská chata v Kunčicích s kapacitou kolem 39 lůžek v osmi pokojích, společenskou místností s krbem a zázemím pro lyžaře.",
                'address'      => 'Kunčice 130, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'objednavky@chatasneznik.cz',
                'phone'        => '+420 608 069 117',
                'phone2'       => null,
                'website'      => 'https://www.chatasneznik.cz',
                'slug'         => Str::slug('Chata Sněžník'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chata Pod Horou',
                'content'      => "Chata pro zhruba 10–11 osob, tři ložnice, terasa a krb, pěkný výhled na skiareál Kunčice a dobrá dostupnost sjezdovky.",
                'address'      => null, // konkrétní číslo popisné není na skikuncice.cz uvedeno
                'email'        => 'info@chatapodhorou.cz',
                'phone'        => '+420 732 928 572',
                'phone2'       => null,
                'website'      => 'https://www.chatapodhorou.cz',
                'slug'         => Str::slug('Chata Pod Horou'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chata Stavěnka',
                'content'      => "Chata pro 8–14 osob, umístěná ve svahu s výhledem na okolní kopce, Wi-Fi, stolní fotbal a zázemí pro rodiny a skupiny.",
                'address'      => null,
                'email'        => 'vykoukova@staving-olomouc.cz',
                'phone'        => '+420 585 312 601',
                'phone2'       => '+420 777 567 561',
                'website'      => 'https://www.stavenka.cz',
                'slug'         => Str::slug('Chata Stavěnka'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chalupa Bačovo Kunčice',
                'content'      => "Kompletně zrekonstruovaná chalupa se třemi apartmány pro 1–19 osob, vyhřívaným bazénem, parkováním u objektu a výbornou dostupností ke skiareálu.",
                'address'      => 'Kunčice 56, 788 32 Staré Město pod Sněžníkem',
                'email'        => null, // na skikuncice.cz je jen telefon a odkaz na e-chalupy
                'phone'        => '+420 734 647 679',
                'phone2'       => null,
                'website'      => 'https://www.e-chalupy.cz/chalupa-bacovo-kuncice-pronajem-o16746',
                'slug'         => Str::slug('Chalupa Bačovo Kunčice'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Penzion Windy',
                'content'      => "Penzion v centru Starého Města, pokoje s kabelovou TV, možnost snídaní a večeří, Wi-Fi a dobrá dostupnost skiareálů v okolí.",
                'address'      => 'Hanušovická 156, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'a.windova@seznam.cz',
                'phone'        => '+420 777 257 233',
                'phone2'       => null,
                'website'      => 'http://www.pensionwindy.cz',
                'slug'         => Str::slug('Penzion Windy'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Roubenka Kunčice',
                'content'      => "Luxusně vybavená roubenka pár minut chůze od skiareálu, s vířivkou, saunou, kulečníkem a zázemím pro více rodin.",
                'address'      => 'Kunčice 124, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'ubytovani.kuncice@gmail.com',
                'phone'        => null, // na skikuncice.cz je uveden pouze e-mail + web
                'phone2'       => null,
                'website'      => 'https://www.dovolenakuncice.cz',
                'slug'         => Str::slug('Roubenka Kunčice'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Roubenka Forest',
                'content'      => "Moderní poloroubenka v klidné části Kunčic, dva oddělené apartmány, finská sauna, velká zahrada, venkovní posezení a kolárna/lyžárna.",
                'address'      => 'Kunčice, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'jana@forestroubenka.cz',
                'phone'        => '+420 773 575 252',
                'phone2'       => null,
                'website'      => 'https://forestroubenka.cz',
                'slug'         => Str::slug('Roubenka Forest'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chata Junior',
                'content'      => "Velká rekreační chata s kapacitou cca 66–75 lůžek, společenskou místností s krbem a barem, hřištěm a venkovním bazénem, ideální pro školy v přírodě a skupiny.",
                'address'      => 'Kunčice 14, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'junior@chatajunior.cz',
                'phone'        => '+420 777 252 522',
                'phone2'       => null,
                'website'      => 'https://www.chatajunior.cz',
                'slug'         => Str::slug('Chata Junior'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chata Stará Škola',
                'content'      => "Penzion v bývalé škole s kapacitou okolo 45–48 lůžek, saunou, barem a společenskou místností, pár set metrů od sjezdovky.",
                'address'      => 'Kunčice 26, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'chatakuncice@gmail.com',
                'phone'        => '+420 734 594 574',
                'phone2'       => null,
                'website'      => 'https://www.staraskola.eu',
                'slug'         => Str::slug('Chata Stará Škola'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Roubenka U Lípy',
                'content'      => "Stylová roubená chalupa s kachlovými kamny, ubytování až pro cca 17 osob a možností využití Wi-Fi.",
                'address'      => null, // na skikuncice.cz není přesná adresa
                'email'        => null, // na skikuncice.cz uveden pouze web a telefon
                'phone'        => '+420 733 641 495',
                'phone2'       => null,
                'website'      => 'https://www.jeseniky-kuncice.cz',
                'slug'         => Str::slug('Roubenka U Lípy'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chata U Profesora',
                'content'      => "Chata pro větší skupiny s kapacitou přibližně 48–56 lůžek, barem, saunou, Wi-Fi a zázemím pro sportovní pobyty.",
                'address'      => 'Kunčice, 788 32 Staré Město pod Sněžníkem',
                'email'        => null, // na skikuncice.cz je opět jen centrální kontakt SKITECH + odkaz na staromestsko.cz
                'phone'        => '+420 777 123 102',
                'phone2'       => null,
                'website'      => 'https://www.staromestsko.cz',
                'slug'         => Str::slug('Chata U Profesora'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Penzion ALBERT (dříve Kunčice ubytování)',
                'content'      => "Rodinný penzion s osmi apartmány, kapacitou okolo 30 lůžek, vnitřním vyhřívaným bazénem, infrasaunou, hernou a velkou společenskou místností.",
                'address'      => 'Kunčice 119, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'kunciceubytovani@gmail.com',
                'phone'        => '+420 733 782 253',
                'phone2'       => null,
                'website'      => 'https://www.albertkuncice.cz',
                'slug'         => Str::slug('Penzion ALBERT'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chalupa Tři studánky',
                'content'      => "Apartmánová chalupa v Kunčicích až pro 23 hostů, velká zahrada s dětským hřištěm, venkovní vířivka, bazén a sauna.",
                'address'      => 'Kunčice 59, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'info@chalupatristudanky.cz',
                'phone'        => '+420 736 614 660',
                'phone2'       => null,
                'website'      => 'https://www.chalupatristudanky.cz',
                'slug'         => Str::slug('Chalupa Tři studánky'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Chata TROJANKA',
                'content'      => "Novější horská chata přímo pod sjezdovkou v Kunčicích, kapacita zhruba 4–14 osob, vhodná pro rodiny i skupiny.",
                'address'      => 'Kunčice 125, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'trojankakuncice@gmail.com',
                'phone'        => '+420 606 785 628',
                'phone2'       => null,
                'website'      => 'http://trojanka-kuncice.cz',
                'slug'         => Str::slug('Chata Trojanka'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],

            [
                'name'         => 'Apartmány Šestka',
                'content'      => "Nové moderní apartmány pro 2–5 osob, vybavené kuchyně s myčkou, Wi-Fi, TV, společenská místnost, samovýčep, lyžárna/kolárna a parkování.",
                'address'      => 'Kunčice, 788 32 Staré Město pod Sněžníkem',
                'email'        => 'info@ap6ka.cz',
                'phone'        => '+420 731 109 072',
                'phone2'       => null,
                'website'      => 'https://www.ap6ka.cz',
                'slug'         => Str::slug('Apartmány Šestka'),
                'is_available' => true,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
        ];

        foreach ($accommodations as $data) {
            /** @var \App\Models\Accommodation $acc */
            $acc = Accommodation::create($data);

            // Najdeme URL obrázku
            $imgUrl = $images[$acc->name] ?? $placeholder;

            try {
                // Pokus o stažení skutečné fotky
                $acc->addMediaFromUrl($imgUrl)
                    ->toMediaCollection('image');
            } catch (\Exception $e) {
                
            }
        }
    }
}
