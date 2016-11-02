<?php

use Illuminate\Database\Seeder;
use Keboola\Csv\CsvFile;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        $csvFile = new Keboola\Csv\CsvFile('./database/csv/countries.csv');
        foreach($csvFile as $row) {
            DB::table('countries')->insert([
                'code' => $row[0],
                'name' => $row[1],
                'full_name' => $row[2],
                'iso3' => $row[3],
                'number' => $row[4],
                'continent_code' => $row[5]
            ]);
        }
    }
}
