<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();

        $report = fopen(base_path("database/csv/refprovince.csv"), "r");

        $dataRow = true;
        while (($data = fgetcsv($report, 4000, ",")) !== FALSE) {
            if (!$dataRow) {
                Province::create([
                    "id" => $data['0'],
                    "psgcCode" => $data['1'],
                    "provDesc" => $data['2'],
                    "regCode" => $data['3'],
                    "provCode" => $data['4'],

                ]);
            }
            $dataRow = false;
        }

        fclose($report);
    }
}