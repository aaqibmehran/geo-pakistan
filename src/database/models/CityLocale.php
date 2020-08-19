<?php
namespace Aaqib\GeoPakistan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * City
 */
class CityLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_cities_locale';

    /**
     * return belonged City
     *
     * @return void
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
