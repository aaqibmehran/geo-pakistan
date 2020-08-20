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
            /**
             *
             * Divisions of Balochistan
             *
             */
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Kalat',
                    'province_id' => 1,
                    'capital' => 'Khuzdar',
                    'area' => 140612,
                    'population' => 2509230
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Makran',
                    'province_id' => 1,
                    'capital' => 'Turbat',
                    'area' => 52067,
                    'population' => 1489015
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Naseerabad',
                    'province_id' => 1,
                    'capital' => 'Dera Murad Jamali',
                    'area' => 16946,
                    'population' => 1591144
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Quetta',
                    'province_id' => 1,
                    'capital' => 'Quetta',
                    'area' => 64310,
                    'population' => 4174562
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Sibi',
                    'province_id' => 1,
                    'capital' => 'Sibi',
                    'area' => 27055,
                    'population' => 1038010
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Zhob',
                    'province_id' => 1,
                    'capital' => 'Loralai',
                    'area' => 46200,
                    'population' => 1542447
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Rakhshan',
                    'province_id' => 1,
                    'capital' => 'Kharan',
                    'area' => 89013,
                    'population' => 737162
                ),

            /**
             *
             * Divisions of KPK
             *
             */
            7 =>
                array(
                    'id' => 8,
                    'province_id' => 3,
                    'name' => 'Bannu',
                    'capital' => 'Bannu',
                    'area' => 4391,
                    'population' => 2044074
                ),
            8 =>
                array(
                    'id' => 9,
                    'province_id' => 3,
                    'name' => 'Dera Ismail Khan',
                    'capital' => 'Dera Ismail Khan',
                    'area' => 9005,
                    'population' => 2019017
                ),
            9 =>
                array(
                    'id' => 10,
                    'province_id' => 3,
                    'name' => 'Hazara',
                    'capital' => 'Abbottabad',
                    'area' => 17194,
                    'population' => 5325121
                ),
            10 =>
                array(
                    'id' => 11,
                    'province_id' => 3,
                    'name' => 'Kohat',
                    'capital' => 'Kohat',
                    'area' => 7012,
                    'population' => 2218971
                ),
            11 =>
                array(
                    'id' => 12,
                    'province_id' => 3,
                    'name' => 'Malakand',
                    'capital' => 'Saidu Sharif',
                    'area' => 29872,
                    'population' => 7514694
                ),
            12 =>
                array(
                    'id' => 13,
                    'province_id' => 3,
                    'name' => 'Mardan',
                    'capital' => 'Mardan',
                    'area' => 3046,
                    'population' => 3997677
                ),
            13 =>
                array(
                    'id' => 14,
                    'province_id' => 3,
                    'name' => 'Peshawar',
                    'capital' => 'Peshawar',
                    'area' => 4001,
                    'population' => 7403817
                ),

            /**
             *
             * Divisions of Punjab
             *
             */
            14 =>
                array(
                    'id' => 15,
                    'province_id' => 4,
                    'name' => 'Bahawalpur',
                    'capital' => 'Bahawalpur',
                    'area' => 45588,
                    'population' => 11464031
                ),
            15 =>
                array(
                    'id' => 16,
                    'province_id' => 4,
                    'name' => 'Dera Ghazi Khan',
                    'capital' => 'Dera Ghazi Khan',
                    'area' => 38778,
                    'population' => 11014398
                ),
            16 =>
                array(
                    'id' => 17,
                    'province_id' => 4,
                    'name' => 'Faisalabad',
                    'capital' => 'Faisalabad',
                    'area' => 17917,
                    'population' => 14177081
                ),
            17 =>
                array(
                    'id' => 18,
                    'province_id' => 4,
                    'name' => 'Gujranwala',
                    'capital' => 'Gujranwala',
                    'area' => 17206,
                    'population' => 16123984
                ),
            18 =>
                array(
                    'id' => 19,
                    'province_id' => 4,
                    'name' => 'Lahore',
                    'capital' => 'Lahore',
                    'area' => 11727,
                    'population' => 19581281
                ),
            19 =>
                array(
                    'id' => 20,
                    'province_id' => 4,
                    'name' => 'Multan',
                    'capital' => 'Multan',
                    'area' => 17935,
                    'population' => 12265161
                ),
            20 =>
                array(
                    'id' => 21,
                    'province_id' => 4,
                    'name' => 'Rawalpindi',
                    'capital' => 'Rawalpindi',
                    'area' => 22255,
                    'population' => 10007821
                ),
            21 =>
                array(
                    'id' => 22,
                    'province_id' => 4,
                    'name' => 'Sahiwal',
                    'capital' => 'Sahiwal',
                    'area' => 10302,
                    'population' => 7380386
                ),
            22 =>
                array(
                    'id' => 23,
                    'province_id' => 4,
                    'name' => 'Sargodha',
                    'capital' => 'Sargodha',
                    'area' => 26360,
                    'population' => 8181499
                ),


            /**
             *
             * Divisions of Sindh
             *
             */
            23 =>
                array(
                    'id' => 24,
                    'province_id' => 5,
                    'name' => 'Banbhore',
                    'capital' => 'Thatta',
                    'area' => 28171,
                    'population' => 3566300
                ),
            24 =>
                array(
                    'id' => 25,
                    'province_id' => 5,
                    'name' => 'Hyderabad',
                    'capital' => 'Hyderabad',
                    'area' => 33527,
                    'population' => 7026335
                ),
            25 =>
                array(
                    'id' => 26,
                    'province_id' => 5,
                    'name' => 'Karachi',
                    'capital' => 'Karachi',
                    'area' => 3528,
                    'population' => 16051521
                ),
            26 =>
                array(
                    'id' => 27,
                    'province_id' => 5,
                    'name' => 'Sukkur',
                    'capital' => 'Sukkur',
                    'area' => 24505,
                    'population' => 5538555
                ),
            27 =>
                array(
                    'id' => 28,
                    'province_id' => 5,
                    'name' => 'Larkana',
                    'capital' => 'Larkana',
                    'area' => 15543,
                    'population' => 6192380
                ),
            28 =>
                array(
                    'id' => 29,
                    'province_id' => 5,
                    'name' => 'Mirpur Khas',
                    'capital' => 'Mirpur Khas',
                    'area' => 28171,
                    'population' => 4228683
                ),
            29 =>
                array(
                    'id' => 30,
                    'province_id' => 5,
                    'name' => 'Shaheed Benazirabad',
                    'capital' => 'Nawabshah',
                    'area' => 18175,
                    'population' => 5282277
                ),


            /**
             *
             * Divisions of Gilgit-Baltistan
             *
             */
            30 =>
                array(
                    'id' => 31,
                    'province_id' => 6,
                    'name' => 'Gilgit',
                    'capital' => 'Gilgit',
                    'area' => null,
                    'population' => null
                ),
            31 =>
                array(
                    'id' => 32,
                    'province_id' => 6,
                    'name' => 'Baltistan',
                    'capital' => 'Skardu',
                    'area' => null,
                    'population' => null
                ),
            32 =>
                array(
                    'id' => 33,
                    'province_id' => 6,
                    'name' => 'Diamer',
                    'capital' => 'Chilas',
                    'area' => null,
                    'population' => null
                ),

            /**
             *
             * Divisions of Azad Kashmir
             *
             */
            33 =>
                array(
                    'id' => 34,
                    'province_id' => 6,
                    'name' => 'Mirpur',
                    'capital' => 'Mirpur',
                    'area' => 4388,
                    'population' => 1651018
                ),
            34 =>
                array(
                    'id' => 35,
                    'province_id' => 6,
                    'name' => 'Muzaffarabad',
                    'capital' => 'Muzaffarabad',
                    'area' => 6117,
                    'population' => 1072150
                ),
            35 =>
                array(
                    'id' => 36,
                    'province_id' => 6,
                    'name' => 'Poonch',
                    'capital' => 'Rawalakot',
                    'area' => 2792,
                    'population' => 1322198
                ),
        ));

    }
}
