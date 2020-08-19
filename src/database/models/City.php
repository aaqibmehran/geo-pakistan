<?php
namespace Aaqib\GeoPakistan\Models;

use Aaqib\GeoPakistan\PakistanTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * City.
 */
class City extends Model
{
    use PakistanTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_cities';

    /**
     * append names.
     *
     * @var array
     */

    public function tehsil()
    {
        return $this->belongsTo(Tehsil::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function children()
    {
        return null;
    }

    public function parent()
    {
        if ($this->tehsil_id === null) {
            return $this->district;
        }
        return $this->tehsil;
    }

    public function locales()
    {
        return $this->hasMany(CityLocale::class);
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
        $localed = CityLocale::where('name', $name)->first();
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
        return CityLocale::where('name', 'like', '%' . $name . '%')
            ->get()->map(function ($item) {
                return $item->city;
            });
    }
}
