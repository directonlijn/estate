@extends('./base/base')

@section('content')
    <div class="row">
        <div class="three column">
            @include('partials/filter')
        </div>
        <div class="one-third column">
            @include('partials/news')
        </div>
        <div class="five column">
            1/3
        </div>
    </div>
@stop
