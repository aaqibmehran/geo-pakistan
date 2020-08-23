<?php

namespace Aaqib\GeoPakistan;

use Aaqib\GeoPakistan\Models\Province;
use Aaqib\GeoPakistan\Models\UnionCouncel;
use Aaqib\GeoPakistan\Models\District;
use Aaqib\GeoPakistan\Models\Division;
use Aaqib\GeoPakistan\Models\Tehsil;

/**
 * World
 */
class Pakistan
{
    public function Provinces()
    {
        return Province::get();
    }

    public static function Divisions()
    {
        return Division::get();
    }

    public static function Districts()
    {
        return District::get();
    }

    public static function Tehsils()
    {
        return Tehsil::get();
    }

    public static function getProvinceByAbbr($abbr)
    {
        return Province::getByAbbr($abbr);
    }

    public static function getDivisionByCode($code)
    {
        return Division::getByCode($code);
    }

    public static function getDistrictByCode($code)
    {
        return District::getByCode($code);
    }

    public static function getTehsilByCode($code)
    {
        return Tehsil::getByCode($code);
    }

    public static function getByCode($code)
    {
        $code = strtolower($code);
        if (strpos($code, '-')) {
            list($country_code, $code) = explode('-', $code);
            $division = self::getDivisionByCode($country_code);
        } else {
            return self::getDivisionByCode($code);
        }
        if ($division->has_district) {
            return District::where([
                ['division_id', $division->id],
                ['code', $code],
            ])->first();
        }
        return UnionCouncel::where([
            ['division_id', $division->id],
            ['code', $code],
        ]);

        throw new Aaqib\GeoPakistan\Exceptions\InvalidCodeException("Code is invalid");
    }
}
