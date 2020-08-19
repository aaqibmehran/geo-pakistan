<?php
namespace Aaqib\GeoPakistan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * City
 */
class TehsilLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_tehsil_locale';

    /**
     * return belonged City
     *
     * @return void
     */
    public function tehsil()
    {
        return $this->belongsTo(Tehsil::class);
    }
}
