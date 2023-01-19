@extends('layouts.app')
@section('content')
    @include('shared.hero')
    <x-events label="events en cours" />
    <x-events label="events à venir" />
    <x-events label="events passés" />
@stop
