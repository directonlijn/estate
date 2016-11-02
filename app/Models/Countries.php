<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The table primary key.
     *
     * @var string
     */
    protected $primaryKey = 'code';

    /**
     * Indicates if the model should have an incrementing primary key or non numeric value.
     *
     * @var bool
     */
    protected $incrementing = false;

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
    protected $fillable = ['code', 'name', 'full_name', 'iso3', 'number', 'continent_code'];

    /**
     * Get the cities records associated with the country.
     */
    public function cities()
    {
        return $this->hasMany('App\Models\Cities', 'country', 'code');
    }

    /**
     * Get the regions records associated with the country.
     */
    public function regions()
    {
        return $this->hasMany('App\Models\Regions', 'countryCode', 'code');
    }

    /**
     * Get the continent record associated with the country.
     */
    public function continent()
    {
        return $this->hasOne('App\Models\Continents', 'code', 'continent_code');
    }
}
