<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('data/countries_seed.csv'), 'r');
        $csv->setHeaderOffset(0); // usa a primeira linha como cabeçalho

        $records = iterator_to_array($csv->getRecords());
        $now = now();

        $toInsert = [];

        foreach ($records as $row) {
            $toInsert[] = [
                'name' => $row['name'],
                'code' => strtoupper($row['code']),
                'full_code' => null,
                'region' => null,
                'subregion' => null,
                'latitude' => $row['latitude'] !== '' ? (float)$row['latitude'] : null,
                'longitude' => $row['longitude'] !== '' ? (float)$row['longitude'] : null,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        foreach (array_chunk($toInsert, 100) as $chunk) {
            DB::table('country')->upsert(
                $chunk,
                ['code'], // unique key
                ['name', 'latitude', 'longitude', 'updated_at'] // campos atualizáveis
            );
        }

        echo "Seeded " . count($toInsert) . " countries.\n";
    }
}
