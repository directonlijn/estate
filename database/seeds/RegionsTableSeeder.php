<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();

        $csvFile = new Keboola\Csv\CsvFile('./database/csv/regions.csv');
        foreach($csvFile as $row) {
            DB::table('regions')->insert([
                'ID' => $row[0],
                'countryCode' => $row[1],
                'regionCode' => $row[2],
                'name' => $row[3]
            ]);
        }
    }
}
