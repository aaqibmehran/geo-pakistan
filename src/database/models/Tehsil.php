<?php
namespace Aaqib\GeoPakistan\Models;

use Illuminate\Database\Eloquent\Model;
use Aaqib\GeoPakistan\PakistanTrait;

/**
 * City.
 */
class Tehsil extends Model
{
    use PakistanTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_tehsils';

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

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function children()
    {
        $this->cities;
    }

    public function parent()
    {
        if ($this->district_id === null) {
            return $this->division;
        }
        return $this->district;
    }

    public function locales()
    {
        return $this->hasMany(TehsilLocale::class);
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
        $localed = TehsilLocale::where('name', $name)->first();
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
        return TehsilLocale::where('name', 'like', '%' . $name . '%')
            ->get()->map(function ($item) {
                return $item->city;
            });
    }
}
