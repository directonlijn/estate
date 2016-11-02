<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regions';

    /**
     * The table primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should have an incrementing primary key or non numeric value.
     *
     * @var bool
     */
    protected $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['countryCode', 'regionCode', 'name'];

    /**
     * Get the cities records associated with the region.
     */
    public function cities()
    {
        return $this->hasMany('App\Models\Regions', "region", "regionCode");
    }

    /**
     * Get the country record associated with the city.
     */
    public function country()
    {
        return $this->hasOne('App\Models\Countries', "code", "countryCode");
    }

}
