<?php

namespace Aaqib\GeoPakistan\Models;

use Aaqib\GeoPakistan\PakistanTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * City.
 */
class District extends Model
{
    use PakistanTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_districts';

    /**
     * append names.
     *
     * @var array
     */
    protected $appends = ['local_name', 'local_full_name', 'local_alias', 'local_abbr'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function tehsils()
    {
        return $this->hasMany(Tehsil::class);
    }

    public function children()
    {
        return $this->tehsils;
    }

    public function parent()
    {
        if ($this->division_id === null) {
            return null;
        }
        return $this->division;
    }

    public function locales()
    {
        return $this->hasMany(DistrictLocale::class);
    }

    /**
     * Get City by name.
     *
     * @param string $name
     *
     * @return collection
     */
    public static function getByName($name)
    {
        $localed = DistrictLocale::where('name', $name)->first();
        if (is_null($localed)) {
            return $localed;
        }
        return $localed->city;
    }

    /**
     * Search City by name.
     *
     * @param string $name
     *
     * @return collection
     */
    public static function searchByName($name)
    {
        return DistrictLocale::where('name', 'like', '%' . $name . '%')
            ->get()->map(function ($item) {
                return $item->city;
            });
    }
}
