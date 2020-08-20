<?php
namespace Aaqib\GeoPakistan\Models;

use Aaqib\GeoPakistan\PakistanTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * City.
 */
class UnionCouncel extends Model
{
    use PakistanTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_union_councels';

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

    public function province()
    {
        return $this->belongsTo(Province::class);
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
        return $this->hasMany(UnionCouncelLocale::class);
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
        $localed = UnionCouncelLocale::where('name', $name)->first();
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
        return UnionCouncelLocale::where('name', 'like', '%' . $name . '%')
            ->get()->map(function ($item) {
                return $item->city;
            });
    }
}
