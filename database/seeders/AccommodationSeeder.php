<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accommodations = [
            [
                'name' => 'U Morisse',
                'content' => 'Ubytování v soukromí, 1x dvoulůžkový, 1x třílůžkový pokoj, možnost přistýlky.' . "\n\n" . 'Nově otevřený apartmán s kapacitou 5 lůžek v centru Starého Města pod Sněžníkem. Apartmán má vlastní vstup z ulice, soukromé parkování za plotem a úschovnu kol a lyží. Pokoje jsou vybaveny barevnou kabelovou televizí a Wifi.',
                'is_available' => true,
            ],
            [
                'name' => 'Penzion Marmar',
                'content' => 'Apartmány 2x5 osob, 1x8 osob, výhled na Skiareál (300 m), klimatizace, Wi-Fi.' . "\n\n" . 'Nabízí apartmány s výhledem na Skiareál Kunčice. Vybavení zahrnuje klimatizaci, wifi, myčky nádobí, sušáky na lyžařskou obuv, trezory, TV s internetem, vybavené kuchyně, povlečení a ručníky.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata Sněžník',
                'content' => '39 lůžek, 8 pokojů, přímo u vleku.' . "\n\n" . 'Horská chata s kapacitou 39 lůžek v 8 pokojích. Ideální pro větší skupiny nebo školní výlety.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata Pod Horou',
                'content' => 'Pro 10 - 11 osob, 3 ložnice, výhled na skiareál, terasa, krb.' . "\n\n" . 'Chata nabízí ubytování pro 10-11 osob ve 3 ložnicích. K dispozici je terasa s výhledem na skiareál a vnitřní krb pro příjemnou atmosféru.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata Stavěnka',
                'content' => 'Kapacita 8 - 14 osob, díky poloze ve svahu nabízí krásné výhledy.' . "\n\n" . 'Chata s kapacitou až 14 osob. Nabízí internet, wifi, stolní fotbal a díky své poloze ve svahu i krásné výhledy do okolí.',
                'is_available' => true,
            ],
            [
                'name' => 'Chalupa Bačovo Kunčice',
                'content' => '16 až 19 osob / 6 ložnic.' . "\n\n" . 'Prostorná chalupa vhodná pro 16 až 19 osob, dispozičně řešená se 6 ložnicemi.',
                'is_available' => true,
            ],
            [
                'name' => 'Penzion Windy',
                'content' => 'Ubytování ve Starém Městě pod Sněžníkem.' . "\n\n" . 'Penzion se nachází ve Starém Městě pod Sněžníkem, nedaleko skiareálu Kunčice.',
                'is_available' => true,
            ],
            [
                'name' => 'Roubenka Kunčice',
                'content' => 'Luxusně vybavená roubenka, 3 minuty chůze od skiareálu.' . "\n\n" . 'Luxusně vybavená roubenka s kulečníkem, karaoke, saunou a vířivkou. Nachází se jen 3 minuty chůze od skiareálu.',
                'is_available' => true,
            ],
            [
                'name' => 'Roubenka Forest',
                'content' => 'Moderní poloroubenka, vkusně zařízená, ideálně pro 2 rodiny s dětmi.' . "\n\n" . 'Moderní poloroubenka umístěná v klidné části Kunčic pod lesem. Je vkusně zařízená a ideální pro rodinnou dovolenou.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata Junior',
                'content' => '65 lůžek, výborná domácí strava, klidné prostředí.' . "\n\n" . 'Chata s kapacitou 65 lůžek nabízí výbornou domácí stravu a klidné prostředí s jedinečnými výhledy. Vlastní skibus zdarma.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata Stará Škola',
                'content' => 'Objekt po celkové rekonstrukci, 9 pokojů, 45 lůžek.' . "\n\n" . 'Rekonstruovaný objekt s 9 pokoji a kapacitou 45 lůžek. K dispozici je společenská místnost s barem a sauna. Možnost polopenze nebo plné penze.',
                'is_available' => true,
            ],
            [
                'name' => 'Roubenka U Lípy',
                'content' => 'Roubená chalupa s kachlovými kamny, ubytování ve stylových pokojích.' . "\n\n" . 'Chalupa celkem pro 17 osob. Nabízí ubytování ve stylových pokojích, kachlová kamna a bezdrátové připojení k internetu.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata U Profesora',
                'content' => 'Místo pro sport, pohodu a dobré jídlo, 48 lůžek.' . "\n\n" . 'Kapacita 48 lůžek ve čtyřlůžkových pokojích s možností přistýlky. K dispozici bar, sauna, kabelová TV a WiFi.',
                'is_available' => true,
            ],
            [
                'name' => 'Penzion ALBERT',
                'content' => 'Kapacita 30 lůžek, 8 apartmánů, vyhřívaný bazén a infrasauna.' . "\n\n" . 'Nabízí 8 apartmánů pro 30 osob. Součástí je vyhřívaný 10m bazén, infrasauna, velká společenská místnost s barem, dětské hřiště, gril a lyžárna s vysoušeči bot.',
                'is_available' => true,
            ],
            [
                'name' => 'Chalupa Tři studánky',
                'content' => 'Apartmánová chalupa nabízí komfortní ubytování až pro 23 hostů.' . "\n\n" . 'Každý apartmán má vlastní kuchyňský kout a koupelnu. Ideální pro větší skupiny.',
                'is_available' => true,
            ],
            [
                'name' => 'Chata TROJANKA',
                'content' => 'Nová chata dokončena v roce 2019 s kapacitou až 14 osob.' . "\n\n" . 'Kompletně vybavená nová chata. Parkování je zajištěno přímo u chaty.',
                'is_available' => true,
            ],
            [
                'name' => 'Apartmány Šestka',
                'content' => 'Nové moderní apartmány pro 2-5 osob.' . "\n\n" . 'Vybavené kuchyně včetně myčky, wifi, TV. K dispozici společenská místnost, samovýčep, lyžárna a parkování.',
                'is_available' => true,
            ],
        ];

        foreach ($accommodations as $accommodation) {
            Accommodation::create($accommodation);
        }
    }
}
