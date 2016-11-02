<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continents extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'continents';

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
    protected $fillable = ['code', 'name'];

    /**
     * Get the countries records associated with the continent.
     */
    public function countries()
    {
        return $this->hasMany('App\Models\Countries', 'continent_code', 'code');
    }
}
