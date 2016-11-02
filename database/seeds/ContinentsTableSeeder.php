<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->delete();

        $csvFile = new Keboola\Csv\CsvFile('./database/csv/continents.csv');
        foreach($csvFile as $row) {
            DB::table('continents')->insert([
                'code' => $row[0],
                'name' => $row[1]
            ]);
        }
    }
}
