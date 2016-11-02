@extends('./base/base')

@section('content')
    <div class="row">
        <div class="one-third column">

        </div>
        <div class="two-thirds column">
            {!! App\Models\Settings::getSettingByName('site-disclaimer') !!}
        </div>
    </div>
@stop
