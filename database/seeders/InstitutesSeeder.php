<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Institute;

class InstitutesSeeder extends Seeder
{
 /**
     * Esegue il seeding del database con i dati degli istituti.
     *
     * @return void
     */
    public function run()
    {
        $institutesData = [
            [
                'id' => 'TOIC86200P',
                'code' => 'TOIC86200P',
                'name' => 'LC Vittorio Alfieri'
            ],
            [
                'id' => 'TOIC86201N',
                'code' => 'TOIC86201N',
                'name' => 'LS Galileo Galilei'
            ],
            [
                'id' => 'TOIC86202L',
                'code' => 'TOIC86202L',
                'name' => 'LA Filippo Filippini'
            ],
            [
                'id' => 'TOIC86203J',
                'code' => 'TOIC86203J',
                'name' => 'LL Alessandro Manzoni'
            ],
            [
                'id' => 'TOIC86204H',
                'code' => 'TOIC86204H',
                'name' => 'LM Vincenzo Monti'
            ],
            [
                'id' => 'TOAA86205F',
                'code' => 'TOAA86205F',
                'name' => 'LSE Albert Einstein'
            ],
            [
                'id' => 'TOIC86400N',
                'code' => 'TOIC86400N',
                'name' => 'ITE Giovanni Battista Beccaria'
            ],
            [
                'id' => 'TOIC86401M',
                'code' => 'TOIC86401M',
                'name' => 'ITI Alessandro Volta'
            ],
            [
                'id' => 'TOIC86402L',
                'code' => 'TOIC86402L',
                'name' => 'ITA Carlo Alberto'
            ],
            [
                'id' => 'TOIC86403J',
                'code' => 'TOIC86403J',
                'name' => 'ITI Guglielmo Marconi'
            ],
            [
                'id' => 'TOIC86404H',
                'code' => 'TOIC86404H',
                'name' => 'ITC Emanuele Filiberto di Savoia'
            ],
            [
                'id' => 'TOIC86500M',
                'code' => 'TOIC86500M',
                'name' => 'IPSAR Costanzo Lanza'
            ],
            [
                'id' => 'TOIC86501L',
                'code' => 'TOIC86501L',
                'name' => 'IPSC Giovanni Falcone'
            ],
            [
                'id' => 'TOIC86502J',
                'code' => 'TOIC86502J',
                'name' => 'IPIA Carlo Ignazio Busca'
            ],
            [
                'id' => 'TOIC86503H',
                'code' => 'TOIC86503H',
                'name' => 'IPSSS Vincenzo Gioberti'
            ],
            [
                'id' => 'TOIC86504F',
                'code' => 'TOIC86504F',
                'name' => 'IP Tranquillo Cremona'
            ],
            [
                'id' => 'TOIC86600N',
                'code' => 'TOIC86600N',
                'name' => 'IIS Europa Unita'
            ],
            [
                'id' => 'TOIC86601M',
                'code' => 'TOIC86601M',
                'name' => 'IIS Primo Levi'
            ],
            [
                'id' => 'TOIC86602L',
                'code' => 'TOIC86602L',
                'name' => 'IIS Re Umberto I'
            ],
            [
                'id' => 'TOIC86603J',
                'code' => 'TOIC86603J',
                'name' => 'IIS Vittorio Alfieri'
            ],
            [
                'id' => 'TOIC86604H',
                'code' => 'TOIC86604H',
                'name' => 'IIS Carlo Alberto'
            ],
            [
                'id' => 'TOIC86605F',
                'code' => 'TOIC86605F',
                'name' => 'IIS Emanuele Filiberto di Savoia'
            ]
        ];

        foreach ($institutesData as $instituteData) {
            Institute::create($instituteData);
        }
    }

}
