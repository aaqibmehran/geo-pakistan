<?php
namespace Aaqib\GeoPakistan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Division Locale
 */
class ProvinceLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_provinces_locale';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
