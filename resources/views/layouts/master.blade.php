<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Всероссийский конкурс интерактивных реконструкций событий Великой Отечественной войны</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="yandex-verification" content="dc70469ab3fdb89d" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Всероссийский конкурс интерактивных реконструкций событий Великой Отечественной войны" />
  <META NAME="keywords" CONTENT="Всероссийский конкурс интерактивных реконструкций событий Великой Отечественной войны">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/506-5061203_-png-9-1.svg" type="image/x-icon">
  <!--соц сети-->
  <meta property="og:title" content="Всероссийский конкурс интерактивных реконструкций событий Великой Отечественной войны">
  <meta property="og:description" content="призван стимулировать молодежь к яркому и всестороннему освещению патриотической тематики, связанной с традициями и современными задачами патриотического воспитания, через применение современных технических, цифровых средств в своих проектах. Особенностью конкурса 2020 года является его тематическая направленность, посвященная 75-летию Победы в Великой Отечественной войне.">
  <meta property="og:image" content="assets/img/rty.png">
  <meta itemprop="image" content="assets/img/rty.png" />
  <meta name="twitter:image:src" content="assets/img/rty.png" />
  <meta property="og:url" content="">

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/materialize.css">
  <link href="{{ asset('css/scss_main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="body">
  @if(session('message'))
  <div id="modalflat" class="modal modal-fixed-footer modal_alert visible" onclick="modal_main_toggle_close();">
    <div class="modal-content">
      <h4 class="alert_title">{{ session('message') }}</h4>
      <p class="alert_down">{{ session('message_1') }}</p>
    </div>
    <div class="flert">
      <a class="modal-close waves-effect waves-light btn-flat btn_ok" id="btn_ok">OK</a>
    </div>
  </div>
  @endif
  @yield('content')
  @include('layouts.modalmain')
  @include('layouts.footer')
  @include('layouts.scripts')
</body>

</html>