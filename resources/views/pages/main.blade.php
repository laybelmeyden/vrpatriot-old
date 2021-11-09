@extends('layouts.master')

@section('content')
@include('layouts.nav')
<section id="header">
  <!-- <div class="header_font">
    <img src="assets/img/Group_333.png" alt="">
  </div> -->
  <div class="header_title">
    <div class="container">
      <p class="date">15-17 октября</p>
      <p class="time">Начало в 10:00</p>
      <p class="name_title">Школа развития волонтерских <br> IT-навыков</p>
      <div class="heder__title_div">
      <h1>IT - на добрые дела</h1>
      </div>
      <p class="city">г.Омск, Конференц-Холл на Жукова 21</p>
      <!-- <h3>интерактивных реконструкций событий <br> Великой Отечественной войны</h3> -->
      <!-- <a id="form_modal_open" class="waves-effect waves-light btn btn_header modal-trigger" onclick="modal_main_toggle();">Регистрация</a> -->
      <div class="header__btn_m">
      <a href="https://anoasi.timepad.ru/event/1763103/#register" class="waves-effect waves-light btn btn_header ">Регистрация</a>
      </div>
      <!-- <a id="form_modal_open" class="waves-effect waves-light btn btn_header modal-trigger" href="/programm">Итоги</a> -->

    </div>
  </div>
</section>
<section id="info">
  <div class="container">
    <div class="row info_containers">
      <p class="info_z" id="info_vol">Описание проекта</p><br>
      <p class="info_z_down">
        <b>Основная идея проекта</b> - дать волонтерам и добровальцам, необходимые навыки в сфере ИТ, которые бы помогли им в их волонтерской деятельности. Развитие личностных компетенций, которые будут востребованы не только в профессиональной, благотворительной деятельности, но и в повседневной жизни.
        <br><br>
        Школа развития волонтерских навыков "IT - на добрые дела" представляет собой цикл мастер-классов и практических занятий в малых группах по 25-30 человек с учетом возмножных санитарных ограничений из-за коронавируса.
      </p>
      <p class="info_z" id="info_vol">Цель проекта</p><br>
      <p class="info_z_down">
        Повышение личностной и профессиональной эффективности волонтеров, через развитие навыков и умений в сфере ИТ, которые непосредственно используются в волонтерской деятельности
      </p>
      <br><br>
    </div>
  </div>
</section>
<!-- <section class="secans">
  <img src="assets/img/ans2.svg" class="imgans" alt="">
  <div class="container">
    <div class="row">
      <p class="pans">Запись онлайн-конференции, посвященной старту конкурса:<br><br></p>
        <p class="pansf">Тайм-код: <br>
        17:27 - 44:35 - приветственная часть, информация о конкурсе <br>
        44:50 - 1:16:00 - мастер-класс "Технологии номинаций конкурса" <br>
1:17:00 - 1:45:20 - мастер-класс "Лайфхаки для «упаковки» проекта" <br>
1:45:30 - ответы на вопросы от спикеров<br>
      
      </p>
          <div class="btn_a">
          <iframe  src="https://www.youtube.com/embed/suo0Zp-UkVU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
    </div>
  </div>
</section> -->
<!-- <section id="stages">
  <div class="container">
    <div class="row">
      <p class="info_z stages_img_padding">Цели и задачи</p>
      <div class="grid_col_stages">
        <div>
          <div class="cell_red">
            <div></div>
            <p>Цель</p>
          </div>
          <img src="assets/img/stg3.svg" alt="">
          <p class="text_stages">
            Повышение личностной и профессиональной эффективности волонтеров, через развитие навыков и умений в сфере ИТ, которые непосредственно используются в волонтерской деятельности
          </p>
        </div>
        <div>
          <div class="cell_yellow">
            <div></div>
            <p>Задача 1</p>
          </div>
          <img src="assets/img/stg3.svg" alt="">
          <p class="text_stages">
            организационно-методическая подготовка к проведению школы развития волонтерских ИТ навыков
          </p>
        </div>
        <div>
          <div class="cell_yellow">
            <div></div>
            <p>Задача 2</p>
          </div>
          <img src="assets/img/stg3.svg" alt="">
          <p class="text_stages">
            информирование волонтеров о проекте и возможностях, которые дает участие в школе развития волонтерских ИТ навыков
          </p>
        </div>
        <div>
          <div class="cell_yellow">
            <div></div>
            <p>Задача 3</p>
          </div>
          <img src="assets/img/stg3.svg" alt="">
          <p class="text_stages">
            развитие практических навыков и умений в сфере ИТ, которые будут непосредственно полезны участникам в их волонтерской деятельности
          </p>
        </div>
        <div>
          <div class="cell_yellow">
            <div></div>
            <p>Задача 4</p>
          </div>
          <img src="assets/img/stg3.svg" alt="">
          <p class="text_stages">
            тиражирование практики проведения школы развития волонтерских ИТ навыков среди добровальческих и волонтерских обьединений
          </p>
        </div>
      </div>
      <div class="col xl12" style="width: 100%;">
        <div class="flex_align">
          <a href="https://drive.google.com/file/d/1M426ujPLx0cGJM1NlDuaGGHrsdFbW2XA/view?usp=sharing" target="_blank" class=" btn btn_download"><img src="assets/img/download.svg" class="img_dowmload">СКАЧАТЬ ПОЛОЖЕНИЕ О КОНКУРСЕ</a>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section id="nominations">
  <div class="nom_down_r">
    <div class="container">
      <div class="row">
        <p class="nominations_title">Что получат участники Школы развития волонтерских IT-навыков "IT - на добрые дела"?</p>
        <div class="col  xl4">
          <div class="card card_nominations">
            <div class="card-image card-image_nominations">
              <img src="assets/img/nom1.svg" class="img_nominations_card">
            </div>
            <div class="card-content">
              <!-- <p class="nominations_card_text_title">Реконструкция с применением VR- и AR-технологий. </p> -->
              <p class="nominations_card_text_body">
                Необходимые практические навыки и знания в сфере ИТ, которые будут полезны не только в непосредственной волонтерской деятельности, но и в повседневной жизни
              </p>
            </div>
          </div>
        </div>
        <div class="col  xl4">
          <div class="card card_nominations">
            <div class="card-image card-image_nominations">
              <img src="assets/img/nom2.svg" class="img_nominations_card">
            </div>
            <div class="card-content">
              <!-- <p class="nominations_card_text_title">3D-моделирование и анимация.</p> -->
              <p class="nominations_card_text_body">
                Смогут развить пользовательские навыки по онлайн сервисам и сервисам социальной коммуникации
              </p>
            </div>
          </div>
        </div>
        <div class="col  xl4">
          <div class="card card_nominations">
            <div class="card-image card-image_nominations">
              <img src="assets/img/nom3.svg" class="img_nominations_card">
            </div>
            <div class="card-content">
              <!-- <p class="nominations_card_text_title">Реконструкция в формате компьютерной игры.</p> -->
              <p class="nominations_card_text_body">
                Волонтёры научатся:

                · Созданию простейших интернет страниц (сайтов)

                · Созданию и проведению онлайн мероприятий

                · Продвижению тематических страниц в социальных сетях

                · Геопозиционированию и новым технологиям в поисковой деятельности

                · Технологиям социальных коммуникаций

                · Пользовательским навыкам в сети интернет
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="col xl12 medal_block">
          <div class="col m12 s12 xl3 center medal_margin">
          </div>
          <div class="col m12 s12 xl9">
            <p class="req">К заявке обязательно прикладывается инструкция по запуску и воспроизведению созданного проекта.</p>
          </div>
        </div>
        <div class="col xl12 medal_block">
          <div class="col m12 s12 xl3 center medal_margin">
            <img src="assets/img/medal.svg" alt="">
          </div>
          <div class="col m12 s12 xl9">
            <p class="medal_text">В каждом направлении по каждой возрастной группе по итогам Конкурса определяются 3-и победителя (1-е, 2-е и 3-е место), которые награждаются дипломами, кубками и ценными призами.
              <br><br>
              Победители, занявшие первое место в каждом направлении в возрастной группе
              11-17 лет, награждаются бесплатными путевками на Всероссийскую профильную смену по цифровым технологиям и интерактивной робототехнике
              <br><br>
              Также победители получат шанс выиграть 3D-принтер, набор пластика для принтера, бесплатное посещение мастер-классов или же фирменную толстовку.</p>
          </div>
        </div>
        <div class="w-100" style="text-align:center;">
          <a class="waves-effect waves-light btn btn_medal modal-trigger" onclick="modal_main_toggle();">Регистрация</a>
          <a class="waves-effect waves-light btn btn_medal modal-trigger" href="/programm">Итоги</a>

        </div> -->
        <section id="uchat">
          <p class="nominations_title">Участники</p>
          <div class="div_ucaht">
            <p>Волонтеры в возрасте от 16-35 лет, заинтересованные в получении новых IT-навыков</p>
            <p>Волонтеры в возрасте от 35+ лет, стремящиеся овладеть минимальными пользовательскими знаниями в сфере IT</p>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<section id="news">
  <div class="container">
    <p class="news__title">НОВОСТИ И МЕРОПРИЯТИЯ</p>
  </div>
  <div class="container">
    <div class="slider-produtos-wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach ($news as $new)
          <div class="swiper-slide">
            <div class="news__img">
              <img src="/storage/{{$new->img}}" alt="">
            </div>
            <div class="news__body">
              <p>{{Str::limit($new->title_ru, 65, '...')}}</p>
              <div class="btn__news">
                <a href="/news{{$new->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                    <g filter="url(#filter0_d)">
                      <rect x="4" width="37" height="37" rx="18.5" fill="url(#paint0_linear)" />
                    </g>
                    <path d="M28.3536 19.3536C28.5488 19.1583 28.5488 18.8417 28.3536 18.6464L25.1716 15.4645C24.9763 15.2692 24.6597 15.2692 24.4645 15.4645C24.2692 15.6597 24.2692 15.9763 24.4645 16.1716L27.2929 19L24.4645 21.8284C24.2692 22.0237 24.2692 22.3403 24.4645 22.5355C24.6597 22.7308 24.9763 22.7308 25.1716 22.5355L28.3536 19.3536ZM18 19.5H28V18.5H18V19.5Z" fill="#FBFAFA" />
                    <defs>
                      <filter id="filter0_d" x="0" y="0" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0.12775 0 0 0 0 0.000781253 0 0 0 0 0.1875 0 0 0 0.41 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                      </filter>
                      <linearGradient id="paint0_linear" x1="-2.86881" y1="37" x2="44.1465" y2="33.6718" gradientUnits="userSpaceOnUse">
                        <stop offset="0.00821062" stop-color="#D81A12" />
                        <stop offset="0.609375" stop-color="#D81A12" />
                        <stop offset="1" stop-color="#D81A12" />
                      </linearGradient>
                    </defs>
                  </svg></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <div class="swiper-prev"></div>
      <div class="swiper-next"></div>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container grid_contact_main">
    <div class="main_contact row">
      <p class="contact_title">Если у вас возникли вопросы, напишите нам через данную форму обратной связи</p>
      <form action="/contact" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form_item">
          <input type="text" class="input_contact" name="contact_name" placeholder="Имя" required>
        </div>
        <div class="form_item">
          <input type="email" class="input_contact" name="contact_email" placeholder="E-mail" required>
        </div>
        <div class="form_item">
          <input type="text" class="input_contact" name="phone" placeholder="Телефон" required>
        </div>
        <textarea class="text_area_cotnatc" name="text_contact" placeholder="Ваш вопрос" required></textarea>
        <div class="form_btn_main">
          <!-- <div class="captchajs">
          {!! NoCaptcha::renderJs() !!}
          {!! NoCaptcha::display() !!}
        </div> -->
          <div class="w-100 a-right btn_pd">
            <button type="submit" class="btn_contact">Отправить</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- <section id="organize">
  <div class="container">
    <div class="row">
      <p class="organizme_title">ОРГАНИЗАТОР</p>
      <div class="air_promo">
        <img src="assets/img/logo_air.svg" alt="">
        <p class="air_text_title">
          С 2012 года командой «Агентства инновационного развития» реализовано 5 международных,
          12 всероссийских, 38 окружных и свыше 100 региональных мероприятий для молодежи, начинающих изобретателей, предпринимателей и программистов. Ежегодно в проектах Агентства принимают участие свыше 3000 человек.
        </p>
      </div>
      <div class="air_promo_href">
        <img src="assets/img/global.svg" alt="">
        <a href="https://rusinnovations.com" class="air_href">rusinnovations.com</a>
      </div>
      <div class="air_press_info">
        <p class="air_info_body m0">АНО "АИР" ведет активную работу:</p>
        <ul class="air_marker">
          <li><span class="air_li">по популяризации инновационной деятельности среди молодежи;</span></li>
          <li><span class="air_li">развитию инновационной инфраструктуры;</span></li>
          <li><span class="air_li">формированию сообщества молодых изобретателей.</span></li>
        </ul>
        <p class="air_text_title">Важнейшее направление работы Агентства - разработка комплексных технических решений для учреждений общего и дополнительного образования детей и подростков, в том числе, в области ИТ и робототехники.
        </p>

        <div class="m81"></div>
      </div>
    </div>
  </div>
</section> -->
<!-- <section id="partners">
  <div class="container">
    <p class="partners_title">Партнёры</p>
    <div class="flex_container_part">
      <div class="logo_part_container">
        <a href="https://rusinnovations.com" class="flex_cetnter">
          <img src="assets/img/logo_air.svg" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="http://www.smena.org" class="flex_cetnter">
          <img src="assets/img/smena.png" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="https://fadm.gov.ru" class="flex_cetnter">
          <img src="assets/img/ros_mol.png" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="http://rospatriotcentr.ru/" class="flex_cetnter">
          <img src="assets/img/ros_pat.png" alt="" class="logo_part w80">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="https://coddyschool.com/" class="flex_cetnter">
          <img src="assets/img/logo-coddy-blue.png" alt="" class="logo_part w65">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="https://zenit3d.ru/" class="flex_cetnter">
          <img src="assets/img/Zenit-3D-Logo_1.svg" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="https://www.sp3d.ru/collection/pla-ecofil-2" class="flex_cetnter">
          <img src="assets/img/logo_preview.jpg" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="http://xn--80apbncz.xn--p1ai/" class="flex_cetnter">
          <img src="assets/img/logomiamir.png" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="http://zabgu.ru" class="flex_cetnter">
          <img src="assets/img/emblem.png" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="http://nasha-molodezh.ru/" class="flex_cetnter">
          <img src="assets/img/Nasha_Molodezh_logo.png" alt="" class="logo_part">
        </a>
      </div>
      <div class="logo_part_container">
        <a href="https://vk.com/slfusptu" class="flex_cetnter">
          <img src="assets/img/VV6cQ5TCxw4.jpg" alt="" class="logo_part" style="    max-width: 100px;">
        </a>
      </div>
    </div>
  </div>
  </div>
</section> -->
@endsection