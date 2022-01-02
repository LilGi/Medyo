<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barangay;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barangay::truncate();

        $report = fopen(base_path("database/csv/refbrgy.csv"), "r");

        $dataRow = true;
        while (($data = fgetcsv($report, 4000, ",")) !== FALSE) {
            if (!$dataRow) {
                Barangay::create([
                    "id" => $data['0'],
                    "brgyCode" => $data['1'],
                    "brgyDesc" => $data['2'],
                    "regCode" => $data['3'],
                    "provCode" => $data['4'],
                    "citymunCode" => $data['5'],

                ]);
            }
            $dataRow = false;
        }

        fclose($report);
    }
}
