<?php

use Illuminate\Database\Seeder;

class PakistanDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pakistan_divisions')->truncate();

        \DB::table('pakistan_divisions')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Balochistan',
                    'abbr' => 'BAL',
                    'capital' => 'Quetta',
                    'area' => 347190,
                    'population' => 12344739,
                    'has_district' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'FATA',
                    'abbr' => 'FATA',
                    'capital' => '',
                    'area' => 27220,
                    'population' => 4996556,
                    'has_district' => 1,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Islamabad',
                    'abbr' => 'ICA',
                    'capital' => 'Islamabad',
                    'area' => 2001579,
                    'population' => 58,
                    'has_district' => 1,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Khyber Pakhtunkhwa',
                    'abbr' => 'KHY',
                    'capital' => 'Peshawar',
                    'area' => 74521,
                    'population' => 30523371,
                    'has_district' => 1,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Punjab',
                    'abbr' => 'PUN',
                    'capital' => 'Lahore',
                    'area' => 205345,
                    'population' => 110017465,
                    'has_district' => 1,
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Sindh',
                    'abbr' => 'SIN',
                    'capital' => 'Karachi',
                    'area' => 140914,
                    'population' => 47893244,
                    'has_district' => 1,
                )
        ));

    }
}
