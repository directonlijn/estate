<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Settings extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

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
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'value',
        ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get a setting by name
     *
     * @var string
     * @return newsitems
     */
    public static function getSettingByName($name)
    {
        $setting = Settings::where('name', $name)
                        ->get();

        return (isset($setting[0]->value)) ? $setting[0]->value : false;
    }
}
