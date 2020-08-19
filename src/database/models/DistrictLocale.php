<?php
namespace Aaqib\GeoPakistan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * City
 */
class DistrictLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_district_locale';

    /**
     * return belonged City
     *
     * @return void
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
