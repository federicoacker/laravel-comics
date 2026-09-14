@extends('layouts.main')

@section("content")
<div class="d-flex flex-column main-wrapper">
    @include('partials.hero')
    @include('partials.series')
    @include('partials.extras')
</div>
@endsection