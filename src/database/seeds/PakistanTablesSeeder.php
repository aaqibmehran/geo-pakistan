<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\SQLiteConnection;

class PakistanTablesSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection() instanceof SQLiteConnection) {
            DB::statement('PRAGMA FOREIGN_KEYS=0');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        $this->call(PakistanProvinceTableSeeder::class);
        $this->call(PakistanProvinceLocaleTableSeeder::class);
        $this->call(PakistanDivisionsTableSeeder::class);
        $this->call(PakistanDivisionsLocaleTableSeeder::class);
        $this->call(PakistanDistrictTableSeeder::class);
        $this->call(PakistanDistrictLocaleTableSeeder::class);
        $this->call(PakistanTehsilTableSeeder::class);
        $this->call(PakistanTehsilLocaleTableSeeder::class);
        $this->call(PakistanCitiesTableSeeder::class);
        $this->call(PakistanCitiesLocaleTableSeeder::class);

        if (DB::connection() instanceof SQLiteConnection) {
            DB::statement('PRAGMA FOREIGN_KEYS=1');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
