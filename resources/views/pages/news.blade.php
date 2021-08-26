@extends('layouts.master')
@include('layouts.nav_color')
@section('content')
<div class="news__container">
    <div class="container">
        <div class="news__title">
            {{$id -> title_ru}}
        </div>
        <div class="news__date">
            {{ $id -> date}}
        </div>
        <div class="news__body">
            {!! $id -> body_ru !!}
        </div>
    </div>
</div>

@endsection