<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Otevření sjezdovky a areálu',
                'date_from' => '2025-12-20',
                'date_to' => '2025-12-20',
            ],
            [
                'title' => 'Spuštění pásu pro děti',
                'date_from' => '2025-12-27',
                'date_to' => '2025-12-27',
            ],
            [
                'title' => 'Flexible zábava',
                'date_from' => '2025-12-29',
                'date_to' => '2025-12-29',
            ],
            [
                'title' => 'Silvestr na kulaťáku',
                'date_from' => '2025-12-31',
                'date_to' => '2025-12-31',
            ],
            [
                'title' => 'Italský víkend',
                'date_from' => '2026-01-17',
                'date_to' => '2026-01-18',
            ],
            [
                'title' => 'Zabijačka',
                'date_from' => '2026-01-30',
                'date_to' => '2026-01-31', // Image says 30.-31.1.2026
            ],
            [
                'title' => 'Lyžařské závody/Slovenský víkend',
                'date_from' => '2026-02-07',
                'date_to' => '2026-02-08',
            ],
            [
                'title' => 'Rakouský víkend',
                'date_from' => '2026-02-14',
                'date_to' => '2026-02-15',
            ],
            [
                'title' => 'Slavnosti sněženek',
                'date_from' => '2026-02-20',
                'date_to' => '2026-02-22',
            ],
            [
                'title' => 'Retro sobota',
                'date_from' => '2026-02-28',
                'date_to' => '2026-02-28',
            ],
            [
                'title' => 'Grilování',
                'date_from' => '2026-03-07',
                'date_to' => '2026-03-08',
            ],
            [
                'title' => 'Lyžování v maskách',
                'date_from' => '2026-03-14',
                'date_to' => '2026-03-14',
            ],
            [
                'title' => 'Betonrace',
                'date_from' => '2026-03-21',
                'date_to' => '2026-03-21',
            ],
        ];

        foreach ($events as $data) {
            Event::create([
                'title' => $data['title'],
                'date_from' => Carbon::parse($data['date_from'])->startOfDay(),
                'date_to' => Carbon::parse($data['date_to'])->endOfDay(),
                'published' => true,
                'content' => '', // Empty content as irrelevant for calendar mostly
                'perex' => '',
            ]);
        }
    }
}
