<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        $report = fopen(base_path("database/csv/refcitymun.csv"), "r");

        $dataRow = true;
        while (($data = fgetcsv($report, 4000, ",")) !== FALSE) {
            if (!$dataRow) {
                City::create([
                    "id" => $data['0'],
                    "psgcCode" => $data['1'],
                    "citymunDesc" => $data['2'],
                    "regDesc" => $data['3'],
                    "provCode" => $data['4'],
                    "citymunCode" => $data['5'],

                ]);
            }
            $dataRow = false;
        }

        fclose($report);
    }
}
