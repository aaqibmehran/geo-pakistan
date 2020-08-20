<?php

use Illuminate\Database\Seeder;

class PakistanProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pakistan_provinces')->truncate();

        \DB::table('pakistan_provinces')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Balochistan',
                    'abbr' => 'BAL',
                    'capital' => 'Quetta',
                    'area' => 347190,
                    'density' => 35.55,
                    'population' => 12344739,
                    'latitude' => 28.4188181,
                    'longitude' => 61.0670046,
                    'map_zoom' => 6,
                    'has_division' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Islamabad',
                    'abbr' => 'ICA',
                    'capital' => 'Islamabad',
                    'area' => 906,
                    'density' => 2214.76,
                    'population' => 2006572,
                    'latitude' => 33.6163723,
                    'longitude' => 72.805909,
                    'map_zoom' => 10,
                    'has_division' => 0,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Khyber Pakhtunkhwa',
                    'abbr' => 'KHY',
                    'capital' => 'Peshawar',
                    'area' => 74521,
                    'density' => 349.17,
                    'population' => 30523371,
                    'latitude' => 33.9909288,
                    'longitude' => 67.6052986,
                    'map_zoom' => 6,
                    'has_division' => 1,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Punjab',
                    'abbr' => 'PUN',
                    'capital' => 'Lahore',
                    'area' => 205345,
                    'density' => 535.74,
                    'population' => 110017465,
                    'latitude' => 30.8062917,
                    'longitude' => 67.8582925,
                    'map_zoom' => 6,
                    'has_division' => 1,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Sindh',
                    'abbr' => 'SIN',
                    'capital' => 'Karachi',
                    'area' => 140914,
                    'density' => 339.82,
                    'population' => 47893244,
                    'latitude' => 26.1456264,
                    'longitude' => 66.6443584,
                    'map_zoom' => 7,
                    'has_division' => 1,
                ),

            5 =>
                array(
                    'id' => 6,
                    'name' => 'Gilgit Baltistan',
                    'abbr' => 'GB',
                    'capital' => 'Gilgit',
                    'area' => 72971,
                    'density' => 47.96,
                    'population' => 3500000,
                    'latitude' => 35.7809668,
                    'longitude' => 72.922815,
                    'map_zoom' => 7,
                    'has_division' => 1,
                ),

            6 =>
                array(
                    'id' => 7,
                    'name' => 'Azad Jammu and Kashmir',
                    'abbr' => 'AJK',
                    'capital' => 'Muzaffarabad',
                    'area' => 13297,
                    'density' => 304.23,
                    'population' => 4045366,
                    'latitude' => 33.9446167,
                    'longitude' => 73.20779,
                    'map_zoom' => 8,
                    'has_division' => 1,
                )
        ));

    }
}
