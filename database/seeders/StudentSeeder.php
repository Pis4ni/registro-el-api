<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Student;
use App\Models\Institute;

class StudentsSeeder extends Seeder
{
    /**
     * Esegue il seeding del database con i dati degli studenti.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker::class);

        // Array contenente gli ID degli istituti
        $instituteIds = [
            'TOIC86200P',
            'TOIC86201N',
            'TOIC86202L',
            'TOIC86203J',
            'TOIC86204H',
            'TOAA86205F',
            'TOIC86400N',
            'TOIC86401M',
            'TOIC86402L',
            'TOIC86403J',
            'TOIC86404H',
            'TOIC86500M',
            'TOIC86501L',
            'TOIC86502J',
            'TOIC86503H',
            'TOIC86504F',
            'TOIC86600N',
            'TOIC86601M',
            'TOIC86602L',
            'TOIC86603J',
            'TOIC86604H',
            'TOIC86605F'
        ];

        // Generazione di 50 studenti con Faker
        for ($i = 0; $i < 50; $i++) {
            $studentData = [
                'name' => $faker->name,
                'surname' => $faker->lastName,
                'date_of_birth' => $faker->dateTimeBetween('-28 years', '-20 year'),
                'institute_id' => $faker->randomElement($instituteIds)
            ];

            Student::create($studentData);
        }
    }
}
