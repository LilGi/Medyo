<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::truncate();

        $report = fopen(base_path("database/csv/refregion.csv"), "r");

        $dataRow = true;
        while (($data = fgetcsv($report, 4000, ",")) !== FALSE) {
            if (!$dataRow) {
                Region::create([
                    "id" => $data['0'],
                    "psgcCode" => $data['1'],
                    "regDesc" => $data['2'],
                    "regCode" => $data['3'],

                ]);
            }
            $dataRow = false;
        }

        fclose($report);
    }
}
