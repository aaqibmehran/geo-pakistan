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
                    'devision_id' => 2,
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
                    'devision_id' => 2,
                    'name' => 'Abbottabad',
                    'center' => 'Abbottabad',
                    'population' => 1332912,
                    'area' => 1756,
                    'density' => 759.1,
                    'has_tehsil' => 1,
                ),

        ));

    }
}
