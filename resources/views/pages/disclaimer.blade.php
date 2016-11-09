@extends('./base/base')

@section('content')
    <div class="row">
        <div class="one-third column">
            @include('partials/filter')
        </div>
        <div class="two-thirds column">
            {!! App\Models\Settings::getSettingValueByName('site-disclaimer') !!}
        </div>
    </div>
@stop
