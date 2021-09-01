@extends('layouts.master')
@section('content')
@include('layouts.nav_color')
<link rel="stylesheet" href="/assets/light/lightgallery.css">
<div id="gallls">
    <div class="container">
        <h1 class="galls__title">Фото</h1>
        <div id="lightgallery">
            @foreach($result as $item)
            <a href="/assets/img/light/{{$item}}">
                <img src="/assets/img/light/{{$item}}" class="lazyload" data-sizes="auto" />
            </a>
            @endforeach
        </div>
    </div>
</div>
<script src="/assets/js/lazy.js" async=""></script>
<script src="/assets/light/lightgallery.js"></script>
<script src="/assets/light/lg-thumbnail.js"></script>
<script src="/assets/light/lg-fullscreen.js"></script>
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
@endsection