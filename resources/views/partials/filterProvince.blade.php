<div class="inner-filters">
<?php

    $countedRegions = App\Models\Regions::getRegionsCountByCountry('NL');
    $regions = App\Models\Regions::getRegionsByCountry('NL');

?>

    <div class="one-half column">

<?php

    $i = 0;
    for (; $i < floor($countedRegions / 2); $i++){
        ?>
            <div class="province">
                <input type="checkbox" name="province" id="{{ $regions[$i]->name }}" value="{{ $regions[$i]->name }}">
                <label>{{ $regions[$i]->name }}</label>
            </div>
        <?php
    }

?>

    </div>
    <div class="one-half column">

<?php

    for (; $i < count($regions); $i++){
        ?>
            <div class="province">
                <input type="checkbox" name="province" id="{{ $regions[$i]->name }}" value="{{ $regions[$i]->name }}">
                <label>{{ $regions[$i]->name }}</label>
            </div>
        <?php
    }

?>
    </div>
</div>
