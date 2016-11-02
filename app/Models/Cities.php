<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

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
    protected $fillable = ['locid', 'country', 'region', 'city', 'postalcode', 'latitude', 'longitude', 'metroCode', 'areaCode'];

    /**
     * Get the region record associated with the city.
     */
    public function region()
    {
        return $this->hasOne('App\Models\Regions', 'region');
    }

    /**
     * Get the country record associated with the city.
     */
    public function country()
    {
        return $this->hasOne('App\Models\Countries', 'country');
    }
}
