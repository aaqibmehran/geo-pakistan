<?php

namespace Aaqib\GeoPakistan\Models;

use Aaqib\GeoPakistan\PakistanTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Division
 */
class Division extends Model
{
    use PakistanTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_divisions';

    /**
     * append names
     *
     * @var array
     */
    protected $appends = ['local_name','local_full_name','local_alias', 'local_abbr'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function tehsils()
    {
        return $this->hasMany(Tehsil::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function children()
    {
        return $this->districts;
    }

    public function parent()
    {
        return null;
    }

    public function locales()
    {
        return $this->hasMany(DivisionLocale::class);
    }
    /**
     * Get Division by name
     *
     * @param string $name
     * @return collection
     */
    public static function getByName($name)
    {
        $localized = DivisionLocale::where('name', $name)->first();
        if (is_null($localized)) {
            return $localized;
        }
        return $localized->region;
    }

    /**
     * Search Division by name
     *
     * @param string $name
     * @return collection
     */
    public static function searchByName($name)
    {
        return DivisionLocale::where('name', 'like', "%" . $name . "%")
            ->get()->map(function ($item) {
                return $item->division;
            });
    }
}
