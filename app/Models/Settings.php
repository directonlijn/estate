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
     * @return settingValue
     */
    public static function getSettingValueByName($name)
    {
        $setting = Settings::where('name', $name)
                        ->get();

        return (isset($setting[0]->value)) ? $setting[0]->value : false;
    }

    /**
     * Get a setting value by id
     *
     * @var int
     * @return setting value
     */
    public static function getSettingValueById($id)
    {
        $setting = Settings::where('id', $id)
                        ->get();

        return (isset($setting[0]->value)) ? $setting[0]->value : false;
    }

    /**
     * Insert new setting
     *
     * @var name string
     * @var value string
     * @return saved
     */
    public static function addSetting($name, $value)
    {
        $setting = new Setting;

        $setting->name = $name;
        $setting->value = $value;

        $saved = $setting->save();

        return $saved;
    }

    /**
     * Update setting value by name
     *
     * @var name string
     * @var value string
     * @return saved
     */
    public static function updateSettingByName($name, $value)
    {
        $setting = Setting::where('name', $name)
                        ->get();

        $setting->value = $value;

        $saved = $setting->save();

        return $saved;
    }

    /**
     * Update setting value by name
     *
     * @var id int
     * @var value string
     * @return saved
     */
    public static function updateSettingById($id, $value)
    {
        $setting = Setting::where('id', $id)
                        ->get();

        $setting->value = $value;

        $saved = $setting->save();

        return $saved;
    }
}
