<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller as Controller;
use App\Models\Regions as Regions;
use App\Http\Controllers\FiltersController as FiltersController;

class FiltersController extends Controller
{
    public function GetIndex ()
    {
        return \View::make('pages/resulaten');
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
    public static function getCountryCheckboxFilter ($countryCode)
    {
        $countedRegions = Regions::getRegionsCountByCountry($countryCode);
        $regions = Regions::getRegionsByCountry($countryCode);
        $filter = Regions::homePageCheckboxFilter($regions, 'name', $countedRegions);

        $html = FiltersController::getHomePageCheckboxFilter($object, $name, $count);

        return $html;
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
    public static function getHomePageCheckboxFilter ($object, $name, $count)
    {

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
