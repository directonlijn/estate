<?php

namespace App\Models;

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
    public $incrementing = true;

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

    /**
     * Get regions by countryCode
     *
     * @var string
     * @return regions
     */
    public static function getRegionsByCountry($id)
    {
        $regions = Regions::where('countryCode', $id)
                        ->get();

        return (isset($regions)) ? $regions : false;
    }

    /**
     * Count regions for country
     *
     * @var string
     * @return count
     */
    public static function getRegionsCountByCountry($id)
    {
        $count = Regions::where('countryCode', $id)
                        ->count();

        return (isset($count)) ? $count : 0;
    }

    /**
     *
     * Shows main page
     *
     * @var object object
     * @var string name
     * @var int count
     * @return html
     */
    public static function homePageCheckboxFilter ($object, $name, $count)
    {
        //print_r($object);exit;
        $html = '<div class="one-half column">';

        $i = 0;
        for (; $i < floor($count / 2); $i++){

            $html .= '
                <div class="province">
                    <input type="checkbox" name="province" id="';
            $html .= $object[$i]->name;
            $html .= '" value="';
            $html .= $object[$i]->name;
            $html .= '">
                    <label>';
            $html .= $object[$i]->name;
            $html .= '</label>
                </div>';
        }

        $html .= '</div>';
        $html .= '<div class="one-half column">';

        for (; $i < count($object); $i++){
            $html .= '
                <div class="province">
                    <input type="checkbox" name="province" id="';
            $html .= $object[$i]->name;
            $html .= '" value="';
            $html .= $object[$i]->name;
            $html .= '">
                    <label>';
            $html .= $object[$i]->name;
            $html .= '</label>
                </div>';
        }

        $html .= '</div>';

        return $html;
    }

}
