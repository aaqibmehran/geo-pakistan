<?php
namespace Aaqib\GeoPakistan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * City
 */
class UnionCouncelLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pakistan_union_councels_locale';

    /**
     * return belonged City
     *
     * @return void
     */
    public function union_councel()
    {
        return $this->belongsTo(UnionCouncel::class);
    }
}
