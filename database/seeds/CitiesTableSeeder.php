<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $csvFile = new Keboola\Csv\CsvFile('./database/csv/cities.csv');
        foreach($csvFile as $row) {
            $metroCode = ( $row[8] == 'NULL' ) ? null : $row[8];
            $areaCode = ( $row[9] == 'NULL' ) ? null : $row[9];
            DB::table('cities')->insert([
                'ID' => $row[0],
                'locid' => $row[1],
                'country' => $row[2],
                'region' => $row[3],
                'city' => $row[4],
                'postalcode' => $row[5],
                'latitude' => $row[6],
                'longitude' => $row[7],
                'metroCode' => $metroCode,
                'areaCode' => $areaCode
            ]);
        }
    }
}
