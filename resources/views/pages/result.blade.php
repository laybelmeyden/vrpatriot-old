@extends('layouts.master')

@section('content')
<style>
  .transition,
  p,
  ul li i:before,
  ul li i:after {
    transition: all 0.25s ease-in-out;
  }

  .flipIn,
  h1,
  ul li {
    animation: flipdown 0.5s ease both;
  }

  .no-select,
  h2 {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }


  h1 {
    text-transform: uppercase;
    font-size: 36px;
    line-height: 42px;
    letter-spacing: 3px;
    font-weight: 100;
  }

  h2 {
    font-size: 26px;
    line-height: 34px;
    font-weight: 300;
    letter-spacing: 1px;
    display: block;
    background-color: #fefffa;
    margin: 0;
    cursor: pointer;
    height: 72px;
    display: flex;
    align-items: center;
  }

  p {
    word-break: break-all;
    color: rgba(48, 69, 92, 0.8);
    font-size: 17px;
    line-height: 26px;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    opacity: 1;
    transform: translate(0, 0);
    margin-top: 14px;
    z-index: 2;
    padding-right: 20px;
    padding-left: 20px;
  }

  ul {
    list-style: none;
    perspective: 900;
    padding: 0;
    margin: 0;
  }

  ul li {
    position: relative;
    padding: 0;
    margin: 0;
    padding-bottom: 4px;
    border-top: 1px dotted #dce7eb;
  }

  ul li:nth-of-type(1) {
    animation-delay: 0.5s;
  }

  ul li:nth-of-type(2) {
    animation-delay: 0.75s;
  }

  ul li:nth-of-type(3) {
    animation-delay: 1s;
  }

  ul li:last-of-type {
    padding-bottom: 0;
  }

  span {
    background: #D81A12;
    padding: 20px;
    color: white;
  }

  ul li i {
    position: absolute;
    transform: translate(-6px, 0);
    margin-top: 30px;
    right: 0;
    margin-right: 30px;
  }
  div{
    min-height: 72px;
  }

  ul li i:before,
  ul li i:after {
    content: "";
    position: absolute;
    background-color: #ff6873;
    width: 3px;
    height: 9px;
  }

  ul li i:before {
    transform: translate(-2px, 0) rotate(45deg);
  }

  ul li i:after {
    transform: translate(2px, 0) rotate(-45deg);
  }

  ul li input[type=checkbox] {
    position: absolute;
    cursor: pointer;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
  }

  ul li input[type=checkbox]:checked~p {
    margin-top: 0;
    max-height: 0;
    opacity: 0;
    transform: translate(0, 50%);
  }

  ul li input[type=checkbox]:checked~i:before {
    transform: translate(2px, 0) rotate(45deg);
  }

  ul li input[type=checkbox]:checked~i:after {
    transform: translate(-2px, 0) rotate(-45deg);
  }
  ul li{
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    min-height: 72px;
  }
  .res_p{
    padding: 23px;
    background: #D81A12;
    margin: 0;
    position: absolute;
    color: white;
    font-family: "Montserrat" !important;
  }
  .res_mian{
    margin: 0;
    padding-left: 90px;
    z-index: -1;
  }

  @keyframes flipdown {
    0% {
      opacity: 0;
      transform-origin: top center;
      transform: rotateX(-90deg);
    }

    5% {
      opacity: 1;
    }

    80% {
      transform: rotateX(8deg);
    }

    83% {
      transform: rotateX(6deg);
    }

    92% {
      transform: rotateX(-3deg);
    }

    100% {
      transform-origin: top center;
      transform: rotateX(0deg);
    }
  }
</style>
<div class="container">
  <div class="row">
    <h1 class="info_z stages_img_padding">Заявки поданные на конкурс</h1>
    <a href="/excel_export" class="waves-effect waves-light btn btn_header modal-trigger" style="margin: 0 auto; margin-bottom: 30px;">Выгрузить проекты в эксель</a>
    <ul>
      @foreach ($mainforms as $mainform)
      <div>
      <li>
        <input type="checkbox" checked>
        <i></i>
        <div><p class="res_p">{{ $mainform -> id}}</p> - <p class="res_mian">{{ $mainform -> name_project}}</p></div>
        <p><br>
          Имя = {{ $mainform -> fio}}<br>
          Фамилия = {{ $mainform -> fio2}}<br>
          Отчество = {{ $mainform -> fio3}}<br>
          Дата рождения = {{ $mainform -> day}}.{{ $mainform -> mouth}}.{{ $mainform -> years}}<br>
          EMAIL = {{ $mainform -> email}} <br>
          Телефон = {{ $mainform -> phone}} <br>
          Почтовый индекс = {{ $mainform -> pocht_index}} <br>
          @if ($mainform['vk'] !== null)
          VK = <a href="{{ $mainform -> vk}}">{{ $mainform -> vk}}</a> <br>
          @endif
          @if ($mainform['facebook'] !== null)
          facebook = <a href="{{ $mainform -> facebook}}">{{ $mainform -> facebook}}</a> <br>
          @endif
          @if ($mainform['instagram'] !== null)
          instagram = <a href="{{ $mainform -> instagram}}">{{ $mainform -> instagram}}</a> <br>
          @endif
          Город = {{ $mainform -> city}} <br>
          Образование = {{ $mainform -> edu}} <br>
          Номинация = {{ $mainform -> select_mon}} <br>
          Краткое описание проекта (300 символов) = {{ $mainform -> opis_proj}} <br><br>
          Команда<br><br>
          ФИО члена команды 1 = {{ $mainform -> name_team}} <br>
          Почта члена команды 1 = {{ $mainform -> email_team}} <br>
          Роль члена команды 1 = {{ $mainform -> role_team}} <br>
          Телефон члена команды 1 = {{ $mainform -> phone_team}} <br><br>
          @if ($mainform['name_team_1'] || $mainform['email_team_1'] !== null)
          Доп член команды<br><br>
          ФИО члена команды 2 = {{ $mainform -> name_team_1}} <br>
          Почта члена команды 2 = {{ $mainform -> email_team_1}} <br>
          Роль члена команды 2 = {{ $mainform -> role_team_1}} <br>
          Телефон члена команды 2 = {{ $mainform -> phone_team_1}} <br>
          @endif
          @if ($mainform['drop_box_file'] !== null)
          <br><br>
          Ссылка на файл в облаке - <a href="{{ $mainform -> drop_box_file}}">{{ $mainform -> drop_box_file}}</a>
          <br><br>
          @endif
          Прикрепленные файлы <br><br>
          @foreach ($mainform-> file_names  as $file_name)
          <a download href="{{ asset('storage/'.$file_name -> filename)}}">{{ asset($file_name -> filename)}}</a><br>
          @endforeach
        </p>
      </li>
      </div>
      @endforeach
    </ul>
  </div>
</div>

@endsection