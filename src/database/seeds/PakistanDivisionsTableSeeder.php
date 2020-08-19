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
                    'latitude' => 28.4188181,
                    'longitude' => 61.0670046,
                    'map_zoom' => 6,
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
                    'latitude' => 33.0091696,
                    'longitude' => 68.3072854,
                    'map_zoom' => 7,
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
                    'latitude' => 33.6163723,
                    'longitude' => 72.805909,
                    'map_zoom' => 10,
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
                    'latitude' => 33.9909288,
                    'longitude' => 67.6052986,
                    'map_zoom' => 6,
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
                    'latitude' => 30.8062917,
                    'longitude' => 67.8582925,
                    'map_zoom' => 6,
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
                    'latitude' => 26.1456264,
                    'longitude' => 66.6443584,
                    'map_zoom' => 7,
                    'has_district' => 1,
                )
        ));

    }
}
