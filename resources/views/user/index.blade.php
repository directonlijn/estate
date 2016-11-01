@extends('.\homeLayout')

@section('content')
    Users!
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    <p></p>
    <p></p>
    @foreach($settings as $setting)
        <p>{{ $setting->name }}</p>
        <p>{{ $setting->value }}</p>
        <p></p>
    @endforeach
@stop
