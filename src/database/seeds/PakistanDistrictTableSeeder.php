<?php

use Illuminate\Database\Seeder;

class PakistanDistrictTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pakistan_districts')->truncate();

        \DB::table('pakistan_districts')->insert(array(

            /**
             *
             * Balochistan Districts Start here
             *
             */
            0 =>
                array(
                    'id' => 1,
                    'devision_id' => 1,
                    'name' => 'Awaran',
                    'center' => '',
                    'population' => 122011,
                    'area' => 24945,
                    'density' => 4.891,
                    'has_tehsil' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'devision_id' => 1,
                    'name' => 'Barkhan',
                    'center' => '',
                    'population' => 171556,
                    'area' => 3494,
                    'density' => 49.10,
                    'has_tehsil' => 1,
                ),
            2 =>
                array(
                    'id' => 3,
                    'devision_id' => 1,
                    'name' => 'Chagai',
                    'center' => '',
                    'population' => 226008,
                    'area' => 44411,
                    'density' => 5.089,
                    'has_tehsil' => 1,
                ),
            3 =>
                array(
                    'id' => 4,
                    'devision_id' => 1,
                    'name' => 'Dera Bugti',
                    'center' => '',
                    'population' => 312603,
                    'area' => 10270,
                    'density' => 30.44,
                    'has_tehsil' => 1,
                ),
            4 =>
                array(
                    'id' => 5,
                    'devision_id' => 1,
                    'name' => 'Gwadar',
                    'center' => '',
                    'population' => 263514,
                    'area' => 11412,
                    'density' => 23.09,
                    'has_tehsil' => 1,
                ),
            5 =>
                array(
                    'id' => 6,
                    'devision_id' => 1,
                    'name' => 'Harnai',
                    'center' => '',
                    'population' => 97017,
                    'area' => 3052,
                    'density' => 31.79,
                    'has_tehsil' => 1,
                ),
            6 =>
                array(
                    'id' => 7,
                    'devision_id' => 1,
                    'name' => 'Jaffarabad',
                    'center' => '',
                    'population' => 513813,
                    'area' => 1796,
                    'density' => 286.1,
                    'has_tehsil' => 1,
                ),
            7 =>
                array(
                    'id' => 8,
                    'devision_id' => 1,
                    'name' => 'Jhal Magsi',
                    'center' => '',
                    'population' => 149225,
                    'area' => 3841,
                    'density' => 38.85,
                    'has_tehsil' => 1,
                ),
            8 =>
                array(
                    'id' => 9,
                    'devision_id' => 1,
                    'name' => 'Kachhi (Bolan)',
                    'center' => '',
                    'population' => 237030,
                    'area' => 5330,
                    'density' => 44.47,
                    'has_tehsil' => 1,
                ),
            9 =>
                array(
                    'id' => 10,
                    'devision_id' => 1,
                    'name' => 'Kalat',
                    'center' => '',
                    'population' => 412232,
                    'area' => 13851,
                    'density' => 29.76,
                    'has_tehsil' => 1,
                ),
            10 =>
                array(
                    'id' => 11,
                    'devision_id' => 1,
                    'name' => 'Kech',
                    'center' => '',
                    'population' => 909116,
                    'area' => 24083,
                    'density' => 37.75,
                    'has_tehsil' => 1,
                ),
            11 =>
                array(
                    'id' => 12,
                    'devision_id' => 1,
                    'name' => 'Kharan',
                    'center' => '',
                    'population' => 156152,
                    'area' => 10705,
                    'density' => 14.59,
                    'has_tehsil' => 1,
                ),
            12 =>
                array(
                    'id' => 13,
                    'devision_id' => 1,
                    'name' => 'Khuzdar',
                    'center' => '',
                    'population' => 802207,
                    'area' => 30983,
                    'density' => 25.89,
                    'has_tehsil' => 1,
                ),
            13 =>
                array(
                    'id' => 14,
                    'devision_id' => 1,
                    'name' => 'Killa Abdullah',
                    'center' => '',
                    'population' => 757578,
                    'area' => 5768,
                    'density' => 131.3,
                    'has_tehsil' => 1,
                ),
            14 =>
                array(
                    'id' => 15,
                    'devision_id' => 1,
                    'name' => 'Killa Saifullah',
                    'center' => '',
                    'population' => 342814,
                    'area' => 12409,
                    'density' => 27.63,
                    'has_tehsil' => 1,
                ),
            15 =>
                array(
                    'id' => 16,
                    'devision_id' => 1,
                    'name' => 'Kohlu',
                    'center' => '',
                    'population' => 214350,
                    'area' => 7690,
                    'density' => 27.87,
                    'has_tehsil' => 1,
                ),
            16 =>
                array(
                    'id' => 17,
                    'devision_id' => 1,
                    'name' => 'Lasbela',
                    'center' => '',
                    'population' => 574292,
                    'area' => 14115,
                    'density' => 40.69,
                    'has_tehsil' => 1,
                ),
            17 =>
                array(
                    'id' => 18,
                    'devision_id' => 1,
                    'name' => 'Lehri',
                    'center' => '',
                    'population' => 118046,
                    'area' => 3285,
                    'density' => 35.93,
                    'has_tehsil' => 1,
                ),
            18 =>
                array(
                    'id' => 19,
                    'devision_id' => 1,
                    'name' => 'Loralai',
                    'center' => '',
                    'population' => 397400,
                    'area' => 8143,
                    'density' => 48.80,
                    'has_tehsil' => 1,
                ),
            19 =>
                array(
                    'id' => 20,
                    'devision_id' => 1,
                    'name' => 'Mastung',
                    'center' => '',
                    'population' => 266461,
                    'area' => 5703,
                    'density' => 46.72,
                    'has_tehsil' => 1,
                ),
            20 =>
                array(
                    'id' => 21,
                    'devision_id' => 1,
                    'name' => 'Musakhel',
                    'center' => '',
                    'population' => 167017,
                    'area' => 5979,
                    'density' => 27.93,
                    'has_tehsil' => 1,
                ),
            21 =>
                array(
                    'id' => 22,
                    'devision_id' => 1,
                    'name' => 'Nasirabad',
                    'center' => '',
                    'population' => 490538,
                    'area' => 3230,
                    'density' => 151.9,
                    'has_tehsil' => 1,
                ),
            22 =>
                array(
                    'id' => 23,
                    'devision_id' => 1,
                    'name' => 'Nushki',
                    'center' => '',
                    'population' => 178796,
                    'area' => 5826,
                    'density' => 30.69,
                    'has_tehsil' => 1,
                ),
            23 =>
                array(
                    'id' => 24,
                    'devision_id' => 1,
                    'name' => 'Panjgur',
                    'center' => '',
                    'population' => 316385,
                    'area' => 17577,
                    'density' => 18.00,
                    'has_tehsil' => 1,
                ),
            24 =>
                array(
                    'id' => 25,
                    'devision_id' => 1,
                    'name' => 'Pishin',
                    'center' => '',
                    'population' => 736481,
                    'area' => 4929,
                    'density' => 149.4,
                    'has_tehsil' => 1,
                ),
            25 =>
                array(
                    'id' => 26,
                    'devision_id' => 1,
                    'name' => 'Quetta',
                    'center' => '',
                    'population' => 2275699,
                    'area' => 2741,
                    'density' => 830.3,
                    'has_tehsil' => 1,
                ),
            26 =>
                array(
                    'id' => 27,
                    'devision_id' => 1,
                    'name' => 'Sheerani (Sherani)',
                    'center' => '',
                    'population' => 153116,
                    'area' => 2948,
                    'density' => 51.93,
                    'has_tehsil' => 1,
                ),
            27 =>
                array(
                    'id' => 28,
                    'devision_id' => 1,
                    'name' => 'Sibi',
                    'center' => '',
                    'population' => 135572,
                    'area' => 4953,
                    'density' => 27.37,
                    'has_tehsil' => 1,
                ),
            28 =>
                array(
                    'id' => 29,
                    'devision_id' => 1,
                    'name' => 'Sohbatpur',
                    'center' => '',
                    'population' => 200538,
                    'area' => 1412,
                    'density' => 142.0,
                    'has_tehsil' => 1,
                ),
            29 =>
                array(
                    'id' => 30,
                    'devision_id' => 1,
                    'name' => 'Washuk',
                    'center' => '',
                    'population' => 176206,
                    'area' => 36527,
                    'density' => 4.824,
                    'has_tehsil' => 1,
                ),
            30 =>
                array(
                    'id' => 31,
                    'devision_id' => 1,
                    'name' => 'Zhob',
                    'center' => '',
                    'population' => 310544,
                    'area' => 11931,
                    'density' => 26.03,
                    'has_tehsil' => 1,
                ),
            31 =>
                array(
                    'id' => 32,
                    'devision_id' => 1,
                    'name' => 'Ziarat',
                    'center' => '',
                    'population' => 160422,
                    'area' => 3266,
                    'density' => 49.13,
                    'has_tehsil' => 1,
                ),


            /**
             *
             * FATA Districts Start here
             *
             */
            32 =>
                array(
                    'id' => 33,
                    'devision_id' => 2,
                    'name' => 'Bajaur',
                    'center' => '',
                    'population' => 1093684,
                    'area' => 1359,
                    'density' => 804.7,
                    'has_tehsil' => 1,
                ),
            33 =>
                array(
                    'id' => 34,
                    'devision_id' => 2,
                    'name' => 'Frontier Region Bannu',
                    'center' => '',
                    'population' => 43114,
                    'area' => 821,
                    'density' => 52.49,
                    'has_tehsil' => 1,
                ),
            34 =>
                array(
                    'id' => 35,
                    'devision_id' => 2,
                    'name' => 'Frontier Region Dera Ismail Khan',
                    'center' => '',
                    'population' => 68556,
                    'area' => 1663,
                    'density' => 41.22,
                    'has_tehsil' => 1,
                ),
            35 =>
                array(
                    'id' => 36,
                    'devision_id' => 2,
                    'name' => 'Frontier Region Kohat',
                    'center' => '',
                    'population' => 118578,
                    'area' => 468,
                    'density' => 253.4,
                    'has_tehsil' => 1,
                ),
            36 =>
                array(
                    'id' => 37,
                    'devision_id' => 2,
                    'name' => 'Frontier Region Lakki Marwat',
                    'center' => '',
                    'population' => 26359,
                    'area' => 183,
                    'density' => 144.0,
                    'has_tehsil' => 1,
                ),
            37 =>
                array(
                    'id' => 38,
                    'devision_id' => 2,
                    'name' => 'Frontier Region Peshawar',
                    'center' => '',
                    'population' => 64691,
                    'area' => 260,
                    'density' => 249.3,
                    'has_tehsil' => 1,
                ),
            38 =>
                array(
                    'id' => 39,
                    'devision_id' => 2,
                    'name' => 'Frontier Region Tank',
                    'center' => '',
                    'population' => 36389,
                    'area' => 1146,
                    'density' => 31.76,
                    'has_tehsil' => 1,
                ),
            39 =>
                array(
                    'id' => 40,
                    'devision_id' => 2,
                    'name' => 'Khyber',
                    'center' => '',
                    'population' => 986973,
                    'area' => 2743,
                    'density' => 359.8,
                    'has_tehsil' => 1,
                ),
            40 =>
                array(
                    'id' => 41,
                    'devision_id' => 2,
                    'name' => 'Kurram',
                    'center' => '',
                    'population' => 619553,
                    'area' => 3389,
                    'density' => 182.8,
                    'has_tehsil' => 1,
                ),
            41 =>
                array(
                    'id' => 42,
                    'devision_id' => 2,
                    'name' => 'Mohmand',
                    'center' => '',
                    'population' => 466984,
                    'area' => 2258,
                    'density' => 206.8,
                    'has_tehsil' => 1,
                ),
            42 =>
                array(
                    'id' => 43,
                    'devision_id' => 2,
                    'name' => 'North Waziristan',
                    'center' => '',
                    'population' => 543254,
                    'area' => 4894,
                    'density' => 111.0,
                    'has_tehsil' => 1,
                ),
            43 =>
                array(
                    'id' => 44,
                    'devision_id' => 2,
                    'name' => 'Orakzai',
                    'center' => '',
                    'population' => 254356,
                    'area' => 1376,
                    'density' => 184.9,
                    'has_tehsil' => 1,
                ),

            44 =>
                array(
                    'id' => 45,
                    'devision_id' => 2,
                    'name' => 'South Waziristan',
                    'center' => '',
                    'population' => 674065,
                    'area' => 6231,
                    'density' => 108.2,
                    'has_tehsil' => 1,
                ),


            /**
             *
             * Islamabad Start here
             *
             */
            45 =>
                array(
                    'id' => 46,
                    'devision_id' => 3,
                    'name' => 'Islamabad',
                    'center' => 'Islamabad',
                    'population' => 2001579,
                    'area' => 906,
                    'density' => 2,210,
                    'has_tehsil' => 1,
                ),

            /**
             *
             * KPK Start here
             *
             */
            46 =>
                array(
                    'id' => 47,
                    'devision_id' => 4,
                    'name' => 'Abbottabad',
                    'center' => 'Abbottabad',
                    'population' => 1332912,
                    'area' => 1756,
                    'density' => 759.1,
                    'has_tehsil' => 1,
                ),

            47 =>
                array(
                    'id' => 48,
                    'devision_id' => 4,
                    'name' => 'Bannu',
                    'center' => '',
                    'population' => 1167892,
                    'area' => 1183,
                    'density' => 987.6,
                    'has_tehsil' => 1,
                ),
            48 =>
                array(
                    'id' => 49,
                    'devision_id' => 4,
                    'name' => 'Batagram',
                    'center' => '',
                    'population' => 476612,
                    'area' => 1356,
                    'density' => 351.6,
                    'has_tehsil' => 1,
                ),
            49 =>
                array(
                    'id' => 50,
                    'devision_id' => 4,
                    'name' => 'Buner',
                    'center' => '',
                    'population' => 897319,
                    'area' => 1735,
                    'density' => 517.2,
                    'has_tehsil' => 1,
                ),
            50 =>
                array(
                    'id' => 51,
                    'devision_id' => 4,
                    'name' => 'Charsadda',
                    'center' => '',
                    'population' => 1616198,
                    'area' => 991,
                    'density' => 1630,
                    'has_tehsil' => 1,
                ),
            51 =>
                array(
                    'id' => 52,
                    'devision_id' => 4,
                    'name' => 'Chitral',
                    'center' => '',
                    'population' => 447362,
                    'area' => 14755,
                    'density' => 30.32,
                    'has_tehsil' => 1,
                ),
            52 =>
                array(
                    'id' => 53,
                    'devision_id' => 4,
                    'name' => 'Dera Ismail Khan',
                    'center' => '',
                    'population' => 1627132,
                    'area' => 7381,
                    'density' => 220.4,
                    'has_tehsil' => 1,
                ),
            53 =>
                array(
                    'id' => 54,
                    'devision_id' => 4,
                    'name' => 'Hangu',
                    'center' => '',
                    'population' => 518798,
                    'area' => 1380,
                    'density' => 375.9,
                    'has_tehsil' => 1,
                ),
            54 =>
                array(
                    'id' => 55,
                    'devision_id' => 4,
                    'name' => 'Haripur',
                    'center' => '',
                    'population' => 1003031,
                    'area' => 1927,
                    'density' => 5205,
                    'has_tehsil' => 1,
                ),
            55 =>
                array(
                    'id' => 56,
                    'devision_id' => 4,
                    'name' => 'Karak',
                    'center' => '',
                    'population' => 706299,
                    'area' => 2653,
                    'density' => 266.2,
                    'has_tehsil' => 1,
                ),
            56 =>
                array(
                    'id' => 57,
                    'devision_id' => 4,
                    'name' => 'Kohat',
                    'center' => '',
                    'population' => 993874,
                    'area' => 2975,
                    'density' => 334.0,
                    'has_tehsil' => 1,
                ),
            57 =>
                array(
                    'id' => 58,
                    'devision_id' => 4,
                    'name' => 'Kohistan (Lower Kohistan - Upper Kohistan)',
                    'center' => '',
                    'population' => 784711,
                    'area' => 7655,
                    'density' => 102.5,
                    'has_tehsil' => 1,
                ),
            58 =>
                array(
                    'id' => 59,
                    'devision_id' => 4,
                    'name' => 'Lakki Marwat',
                    'center' => '',
                    'population' => 876182,
                    'area' => 3185,
                    'density' => 275.1,
                    'has_tehsil' => 1,
                ),
            59 =>
                array(
                    'id' => 60,
                    'devision_id' => 4,
                    'name' => 'Lower Dir',
                    'center' => '',
                    'population' => 1435917,
                    'area' => 1758,
                    'density' => 816.8,
                    'has_tehsil' => 1,
                ),
            60 =>
                array(
                    'id' => 61,
                    'devision_id' => 4,
                    'name' => 'Malakand Protected Area',
                    'center' => '',
                    'population' => 720295,
                    'area' => 948,
                    'density' => 760,
                    'has_tehsil' => 1,
                ),
            61 =>
                array(
                    'id' => 62,
                    'devision_id' => 4,
                    'name' => 'Mansehra',
                    'center' => '',
                    'population' => 1556460,
                    'area' => 4287,
                    'density' => 363.1,
                    'has_tehsil' => 1,
                ),
            62 =>
                array(
                    'id' => 63,
                    'devision_id' => 4,
                    'name' => 'Mardan',
                    'center' => '',
                    'population' => 2373061,
                    'area' => 1639,
                    'density' => 1448,
                    'has_tehsil' => 1,
                ),
            63 =>
                array(
                    'id' => 64,
                    'devision_id' => 4,
                    'name' => 'Nowshera',
                    'center' => '',
                    'population' => 1518540,
                    'area' => 1,746,
                    'density' => 869.8,
                    'has_tehsil' => 1,
                ),
            64 =>
                array(
                    'id' => 65,
                    'devision_id' => 4,
                    'name' => 'Peshawar',
                    'center' => '',
                    'population' => 4269079,
                    'area' => 1257,
                    'density' => 3395,
                    'has_tehsil' => 1,
                ),
            65 =>
                array(
                    'id' => 66,
                    'devision_id' => 4,
                    'name' => 'Shangla',
                    'center' => '',
                    'population' => 757810,
                    'area' => 1389,
                    'density' => 545.7,
                    'has_tehsil' => 1,
                ),
            66 =>
                array(
                    'id' => 67,
                    'devision_id' => 4,
                    'name' => 'Swabi',
                    'center' => '',
                    'population' => 1624616,
                    'area' => 1481,
                    'density' => 1097,
                    'has_tehsil' => 1,
                ),
            67 =>
                array(
                    'id' => 68,
                    'devision_id' => 4,
                    'name' => 'Swat',
                    'center' => '',
                    'population' => 2309570,
                    'area' => 5367,
                    'density' => 430.4,
                    'has_tehsil' => 1,
                ),
            68 =>
                array(
                    'id' => 69,
                    'devision_id' => 4,
                    'name' => 'Tank',
                    'center' => '',
                    'population' => 391885,
                    'area' => 1675,
                    'density' => 234,
                    'has_tehsil' => 1,
                ),
            69 =>
                array(
                    'id' => 70,
                    'devision_id' => 4,
                    'name' => 'Tor Ghar (Kala Dhaka)',
                    'center' => '',
                    'population' => 171395,
                    'area' => 467,
                    'density' => 366.9,
                    'has_tehsil' => 1,
                ),
            70 =>
                array(
                    'id' => 71,
                    'devision_id' => 4,
                    'name' => 'Upper Dir',
                    'center' => '',
                    'population' => 946421,
                    'area' => 3586,
                    'density' => 263.9,
                    'has_tehsil' => 1,
                ),


            /**
             *
             * Punjab Start here
             *
             */
            71 =>
                array(
                    'id' => 72,
                    'devision_id' => 5,
                    'name' => 'Attock',
                    'center' => '',
                    'population' => 1883556,
                    'area' => 6827,
                    'density' => 275.9,
                    'has_tehsil' => 1,
                ),
            72 =>
                array(
                    'id' => 73,
                    'devision_id' => 5,
                    'name' => 'Bahawalnagar',
                    'center' => '',
                    'population' => 2981919,
                    'area' => 8551,
                    'density' => 348.7,
                    'has_tehsil' => 1,
                ),
            73 =>
                array(
                    'id' => 74,
                    'devision_id' => 5,
                    'name' => 'Bahawalpur',
                    'center' => '',
                    'population' => 3668106,
                    'area' => 23910,
                    'density' => 153.4,
                    'has_tehsil' => 1,
                ),
            74 =>
                array(
                    'id' => 75,
                    'devision_id' => 5,
                    'name' => 'Bhakkar',
                    'center' => '',
                    'population' => 1650518,
                    'area' => 8,522,
                    'density' => 193.7,
                    'has_tehsil' => 1,
                ),
            75 =>
                array(
                    'id' => 76,
                    'devision_id' => 5,
                    'name' => 'Chakwal',
                    'center' => '',
                    'population' => 1495982,
                    'area' => 6680,
                    'density' => 223.9,
                    'has_tehsil' => 1,
                ),
            76 =>
                array(
                    'id' => 77,
                    'devision_id' => 5,
                    'name' => 'Chiniot',
                    'center' => '',
                    'population' => 1369740,
                    'area' => 2610,
                    'density' => 524.9,
                    'has_tehsil' => 1,
                ),
            77 =>
                array(
                    'id' => 78,
                    'devision_id' => 5,
                    'name' => 'Dera Ghazi Khan',
                    'center' => '',
                    'population' => 2872201,
                    'area' => 11690,
                    'density' => 245.7,
                    'has_tehsil' => 1,
                ),
            78 =>
                array(
                    'id' => 79,
                    'devision_id' => 5,
                    'name' => 'Faisalabad',
                    'center' => '',
                    'population' => 7874790,
                    'area' => 5960,
                    'density' => 1321,
                    'has_tehsil' => 1,
                ),
            79 =>
                array(
                    'id' => 80,
                    'devision_id' => 5,
                    'name' => 'Gujranwala',
                    'center' => '',
                    'population' => 5,014,196,
                    'area' => 3624,
                    'density' => 1384,
                    'has_tehsil' => 1,
                ),
            80 =>
                array(
                    'id' => 81,
                    'devision_id' => 5,
                    'name' => 'Gujrat',
                    'center' => '',
                    'population' => 2756110,
                    'area' => 3177,
                    'density' => 867.7,
                    'has_tehsil' => 1,
                ),
            81 =>
                array(
                    'id' => 82,
                    'devision_id' => 5,
                    'name' => 'Hafizabad',
                    'center' => '',
                    'population' => 1156957,
                    'area' => 2274,
                    'density' => 508.9,
                    'has_tehsil' => 1,
                ),
            82 =>
                array(
                    'id' => 83,
                    'devision_id' => 5,
                    'name' => 'Jhang',
                    'center' => '',
                    'population' => 2744085,
                    'area' => 6353,
                    'density' => 431.9,
                    'has_tehsil' => 1,
                ),
            83 =>
                array(
                    'id' => 84,
                    'devision_id' => 5,
                    'name' => 'Jhelum',
                    'center' => '',
                    'population' => 1222650,
                    'area' => 3579,
                    'density' => 341.6,
                    'has_tehsil' => 1,
                ),
            84 =>
                array(
                    'id' => 85,
                    'devision_id' => 5,
                    'name' => 'Kasur',
                    'center' => '',
                    'population' => 3454996,
                    'area' => 3894,
                    'density' => 887.2,
                    'has_tehsil' => 1,
                ),
            85 =>
                array(
                    'id' => 86,
                    'devision_id' => 5,
                    'name' => 'Khanewal',
                    'center' => '',
                    'population' => 2921986,
                    'area' =>  4362,
                    'density' => 669.8,
                    'has_tehsil' => 1,
                ),
            86 =>
                array(
                    'id' => 87,
                    'devision_id' => 5,
                    'name' => 'Khushab',
                    'center' => '',
                    'population' => 1281299,
                    'area' => 6622,
                    'density' => 193.5,
                    'has_tehsil' => 1,
                ),
            87 =>
                array(
                    'id' => 88,
                    'devision_id' => 5,
                    'name' => 'Lahore',
                    'center' => '',
                    'population' => 11126285,
                    'area' => 1684,
                    'density' => 6606,
                    'has_tehsil' => 1,
                ),
            88 =>
                array(
                    'id' => 89,
                    'devision_id' => 5,
                    'name' => 'Layyah',
                    'center' => '',
                    'population' => 1824230,
                    'area' => 6379,
                    'density' => 286.0,
                    'has_tehsil' => 1,
                ),
            89 =>
                array(
                    'id' => 90,
                    'devision_id' => 5,
                    'name' => 'Lodhran',
                    'center' => '',
                    'population' => 1700620,
                    'area' => 2662,
                    'density' => 638.9,
                    'has_tehsil' => 1,
                ),
            90 =>
                array(
                    'id' => 91,
                    'devision_id' => 5,
                    'name' => 'Mandi Bahauddin',
                    'center' => '',
                    'population' => 1593292,
                    'area' => 2759,
                    'density' => 577.5,
                    'has_tehsil' => 1,
                ),
            91 =>
                array(
                    'id' => 92,
                    'devision_id' => 5,
                    'name' => 'Mianwali',
                    'center' => '',
                    'population' => 1546094,
                    'area' =>  6029,
                    'density' => 256.4,
                    'has_tehsil' => 1,
                ),
            92 =>
                array(
                    'id' => 93,
                    'devision_id' => 5,
                    'name' => 'Multan',
                    'center' => '',
                    'population' => 4745109,
                    'area' => 3646,
                    'density' => 1302,
                    'has_tehsil' => 1,
                ),
            93 =>
                array(
                    'id' => 94,
                    'devision_id' => 5,
                    'name' => 'Muzaffargarh',
                    'center' => '',
                    'population' => 4325483,
                    'area' => 7668,
                    'density' => 564.1,
                    'has_tehsil' => 1,
                ),
            94 =>
                array(
                    'id' => 95,
                    'devision_id' => 5,
                    'name' => 'Nankana Sahib',
                    'center' => '',
                    'population' => 1356374,
                    'area' => 2774,
                    'density' => 489,
                    'has_tehsil' => 1,
                ),
            95 =>
                array(
                    'id' => 96,
                    'devision_id' => 5,
                    'name' => 'Narowal',
                    'center' => '',
                    'population' => 1709757,
                    'area' => 2324,
                    'density' => 735.8,
                    'has_tehsil' => 1,
                ),
            96 =>
                array(
                    'id' => 97,
                    'devision_id' => 5,
                    'name' => 'Okara',
                    'center' => '',
                    'population' => 3039139,
                    'area' => 4415,
                    'density' => 688.4,
                    'has_tehsil' => 1,
                ),
            97 =>
                array(
                    'id' => 98,
                    'devision_id' => 5,
                    'name' => 'Pakpattan',
                    'center' => '',
                    'population' => 1823687,
                    'area' => 2889,
                    'density' => 631.4,
                    'has_tehsil' => 1,
                ),
            98 =>
                array(
                    'id' => 99,
                    'devision_id' => 5,
                    'name' => 'Rahim Yar Khan',
                    'center' => '',
                    'population' => 4814006,
                    'area' => 12885,
                    'density' => 373.6,
                    'has_tehsil' => 1,
                ),
            99 =>
                array(
                    'id' => 100,
                    'devision_id' => 5,
                    'name' => 'Rajanpur',
                    'center' => '',
                    'population' => 1995958,
                    'area' => 12530,
                    'density' => 159.3,
                    'has_tehsil' => 1,
                ),
            100 =>
                array(
                    'id' => 101,
                    'devision_id' => 5,
                    'name' => 'Rawalpindi',
                    'center' => '',
                    'population' => 5405633,
                    'area' => 5205,
                    'density' => 1039,
                    'has_tehsil' => 1,
                ),
            101 =>
                array(
                    'id' => 102,
                    'devision_id' => 5,
                    'name' => 'Sahiwal',
                    'center' => '',
                    'population' => 2517560,
                    'area' => 3224,
                    'density' => 781,
                    'has_tehsil' => 1,
                ),
            102 =>
                array(
                    'id' => 103,
                    'devision_id' => 5,
                    'name' => 'Sargodha',
                    'center' => '',
                    'population' => 3703588,
                    'area' => 5780,
                    'density' => 640.7,
                    'has_tehsil' => 1,
                ),
            103 =>
                array(
                    'id' => 104,
                    'devision_id' => 5,
                    'name' => 'Sheikhupura',
                    'center' => '',
                    'population' => 3460426,
                    'area' => 3030,
                    'density' => 1142,
                    'has_tehsil' => 1,
                ),
            104 =>
                array(
                    'id' => 105,
                    'devision_id' => 5,
                    'name' => 'Sialkot',
                    'center' => '',
                    'population' => 3893672,
                    'area' => 3093,
                    'density' => 1259,
                    'has_tehsil' => 1,
                ),
            105 =>
                array(
                    'id' => 106,
                    'devision_id' => 5,
                    'name' => 'Toba Tek Singh',
                    'center' => '',
                    'population' => 2190015,
                    'area' => 3073,
                    'density' => 712.8,
                    'has_tehsil' => 1,
                ),
            106 =>
                array(
                    'id' => 107,
                    'devision_id' => 5,
                    'name' => 'Vehari',
                    'center' => '',
                    'population' => 2897446,
                    'area' => 4486,
                    'density' => 645.9,
                    'has_tehsil' => 1,
                ),


            /**
             *
             * Sindh Districts Start here
             *
             */
            107 =>
                array(
                    'id' => 108,
                    'devision_id' => 6,
                    'name' => 'Badin',
                    'center' => '',
                    'population' => 1804516,
                    'area' => 6470,
                    'density' => 278.9,
                    'has_tehsil' => 1,
                ),
            108 =>
                array(
                    'id' => 109,
                    'devision_id' => 6,
                    'name' => 'Dadu',
                    'center' => '',
                    'population' => 1550266,
                    'area' => 8034,
                    'density' => 193,
                    'has_tehsil' => 1,
                ),
            109 =>
                array(
                    'id' => 110,
                    'devision_id' => 6,
                    'name' => 'Ghotki',
                    'center' => '',
                    'population' => 1647239,
                    'area' => 6506,
                    'density' => 253.2,
                    'has_tehsil' => 1,
                ),
            110 =>
                array(
                    'id' => 111,
                    'devision_id' => 6,
                    'name' => 'Hyderabad',
                    'center' => '',
                    'population' => 2201079,
                    'area' => 1022,
                    'density' => 2155,
                    'has_tehsil' => 1,
                ),
            111 =>
                array(
                    'id' => 112,
                    'devision_id' => 6,
                    'name' => 'Jacobabad',
                    'center' => '',
                    'population' => 1006297,
                    'area' => 2771,
                    'density' => 363.1,
                    'has_tehsil' => 1,
                ),
            112 =>
                array(
                    'id' => 113,
                    'devision_id' => 6,
                    'name' => 'Jamshoro',
                    'center' => '',
                    'population' => 993142,
                    'area' => 11250,
                    'density' => 88.28,
                    'has_tehsil' => 1,
                ),
            113 =>
                array(
                    'id' => 114,
                    'devision_id' => 6,
                    'name' => 'Karachi Central',
                    'center' => '',
                    'population' => 2972639,
                    'area' => 61.5,
                    'density' => 48336,
                    'has_tehsil' => 1,
                ),
            114 =>
                array(
                    'id' => 115,
                    'devision_id' => 6,
                    'name' => 'Karachi East',
                    'center' => '',
                    'population' => 2909921,
                    'area' => 165,
                    'density' => 17625,
                    'has_tehsil' => 1,
                ),
            115 =>
                array(
                    'id' => 116,
                    'devision_id' => 6,
                    'name' => 'Karachi South',
                    'center' => '',
                    'population' => 1791751,
                    'area' => 85,
                    'density' => 21079,
                    'has_tehsil' => 1,
                ),
            116 =>
                array(
                    'id' => 117,
                    'devision_id' => 6,
                    'name' => 'Karachi West',
                    'center' => '',
                    'population' => 3914757,
                    'area' => 630,
                    'density' => 6212,
                    'has_tehsil' => 1,
                ),
            117 =>
                array(
                    'id' => 118,
                    'devision_id' => 6,
                    'name' => 'Kashmore',
                    'center' => '',
                    'population' => 1089169,
                    'area' => 2551,
                    'density' => 427,
                    'has_tehsil' => 1,
                ),
            118 =>
                array(
                    'id' => 119,
                    'devision_id' => 6,
                    'name' => 'Khairpur',
                    'center' => '',
                    'population' => 2405523,
                    'area' => 15925,
                    'density' => 151.1,
                    'has_tehsil' => 1,
                ),
            119 =>
                array(
                    'id' => 120,
                    'devision_id' => 6,
                    'name' => 'Korangi',
                    'center' => '',
                    'population' => 2457019,
                    'area' => 94.8,
                    'density' => 25918,
                    'has_tehsil' => 1,
                ),
            120 =>
                array(
                    'id' => 121,
                    'devision_id' => 6,
                    'name' => 'Larkana',
                    'center' => '',
                    'population' => 1524391,
                    'area' => 1906,
                    'density' => 799.7,
                    'has_tehsil' => 1,
                ),
            121 =>
                array(
                    'id' => 122,
                    'devision_id' => 6,
                    'name' => 'Malir',
                    'center' => '',
                    'population' => 2008901,
                    'area' => 2635,
                    'density' => 762.5,
                    'has_tehsil' => 1,
                ),
            122 =>
                array(
                    'id' => 123,
                    'devision_id' => 6,
                    'name' => 'Matiari',
                    'center' => '',
                    'population' => 769349,
                    'area' => 1459,
                    'density' => 527.3,
                    'has_tehsil' => 1,
                ),
            123 =>
                array(
                    'id' => 124,
                    'devision_id' => 6,
                    'name' => 'Mirpur Khas',
                    'center' => '',
                    'population' => 1505876,
                    'area' => 3319,
                    'density' => 453.7,
                    'has_tehsil' => 1,
                ),
            124 =>
                array(
                    'id' => 125,
                    'devision_id' => 6,
                    'name' => 'Naushahro Feroze',
                    'center' => '',
                    'population' => 1612373,
                    'area' => 3027,
                    'density' => 532.6,
                    'has_tehsil' => 1,
                ),
            125 =>
                array(
                    'id' => 126,
                    'devision_id' => 6,
                    'name' => 'Qambar Shahdadkot',
                    'center' => '',
                    'population' => 1341042,
                    'area' => 5599,
                    'density' => 239.5,
                    'has_tehsil' => 1,
                ),
            126 =>
                array(
                    'id' => 127,
                    'devision_id' => 6,
                    'name' => 'Sanghar',
                    'center' => '',
                    'population' => 2057057,
                    'area' => 10259,
                    'density' => 200.5,
                    'has_tehsil' => 1,
                ),
            127 =>
                array(
                    'id' => 128,
                    'devision_id' => 6,
                    'name' => 'Shaheed Benazir Abad (Nawabshah)',
                    'center' => '',
                    'population' => 1612847,
                    'area' => 4618,
                    'density' => 349.2,
                    'has_tehsil' => 1,
                ),
            128 =>
                array(
                    'id' => 129,
                    'devision_id' => 6,
                    'name' => 'Shikarpur',
                    'center' => '',
                    'population' => 1231481,
                    'area' => 2577,
                    'density' => 477.9,
                    'has_tehsil' => 1,
                ),
            129 =>
                array(
                    'id' => 130,
                    'devision_id' => 6,
                    'name' => 'Sujawal',
                    'center' => '',
                    'population' => 781967,
                    'area' => 8699,
                    'density' => 89.89,
                    'has_tehsil' => 1,
                ),
            130 =>
                array(
                    'id' => 131,
                    'devision_id' => 6,
                    'name' => 'Sukkur',
                    'center' => '',
                    'population' => 1487903,
                    'area' => 5216,
                    'density' => 285.3,
                    'has_tehsil' => 1,
                ),
            131 =>
                array(
                    'id' => 132,
                    'devision_id' => 6,
                    'name' => 'Tando Allahyar',
                    'center' => '',
                    'population' => 836887,
                    'area' => 1573,
                    'density' => 532.1,
                    'has_tehsil' => 1,
                ),
            132 =>
                array(
                    'id' => 133,
                    'devision_id' => 6,
                    'name' => 'Tando Muhammad Khan',
                    'center' => '',
                    'population' => 677228,
                    'area' => 1814,
                    'density' => 373.4,
                    'has_tehsil' => 1,
                ),
            133 =>
                array(
                    'id' => 134,
                    'devision_id' => 6,
                    'name' => 'Tharparkar',
                    'center' => '',
                    'population' => 1649661,
                    'area' => 19808,
                    'density' => 83.28,
                    'has_tehsil' => 1,
                ),
            134 =>
                array(
                    'id' => 135,
                    'devision_id' => 6,
                    'name' => 'Thatta',
                    'center' => '',
                    'population' => 979817,
                    'area' => 7705,
                    'density' => 127.2,
                    'has_tehsil' => 1,
                ),
            135 =>
                array(
                    'id' => 136,
                    'devision_id' => 6,
                    'name' => 'Umerkot',
                    'center' => '',
                    'population' => 1073146,
                    'area' => 5503,
                    'density' => 195,
                    'has_tehsil' => 1,
                ),

        ));

    }
}
