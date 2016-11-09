<div class="row">
    <h1>Bekijk het aanbod in heel <span class="third-color font13">Nederland</span> en filter op:</h2>
</div>
<div class="row filters">
    <div class="filter">
        <div class="filter-title">
            <h3>Provincie</h3>
        </div>
        <div class="inner-filters">
            <?php
                $countedRegions = App\Models\Regions::getRegionsCountByCountry('NL');
                $regions = App\Models\Regions::getRegionsByCountry('NL');
                $filter = App\Models\Regions::homePageCheckboxFilter($regions, 'name', $countedRegions);
                echo $filter;
            ?>
        </div>
    </div>
    <div class="filter">
        <div class="filter-title">
            <h3>Provincie</h3>
        </div>
        <div class="inner-filters">
            <?php
                $countedRegions = App\Models\Regions::getRegionsCountByCountry('NL');
                $regions = App\Models\Regions::getRegionsByCountry('NL');
                $filter = App\Models\Regions::homePageCheckboxFilter($regions, 'name', $countedRegions);
                echo $filter;
                {{ App\Http\Controllers\FiltersController::getCountryCheckboxFilter('NL'); }}
            ?>
        </div>
    </div>
    <div class="wrapper">
        <a href="/resultaten" id="show-results">» Toon resultaten (<span class="result-counter">0</span>)</a>
    </div>
    <div class="wrapper">
        <a href="" class="second-color" id="show-all">» Toon gehele portefeuille</a>
    </div>
    <div class="wrapper">
        <a href="" class="second-color" id="show-results-by-city">» Of bekijk het aanbod per stad</a>
    </div>
</div>
