  <div id="body_modal" class="form_modal">
      <div class="container form_modal_body">
          <!-- <div style="height: 100%;
    display: flex;
    justify-content: center;
    align-items: center; 
    flex-direction: column;">
              <p style="font-family: MontserratB !important;
    font-size: 32px !important;
    line-height: 30px;
    color: #425C5A !important;
    font-weight: 800; text-align: center; ">Приём проектов окончен, следите за новостями в <a href="https://vk.com/aidrussia" style="color:#D81A12 !important">группе VK</a></p>
    <p class="air_text_title" style="padding-top:60px;text-align: center;">
Для уточнения вопросов по Вашим проектам можете обратиться на почту <a href="mailto:vrpatriot@rusinnovations.com" style="color:#D81A12 !important">vrpatriot@rusinnovations.com</a>
        </p>

          </div> -->
          <div id="modalmain" class="modal_main_form">
              <div class="modal-content">
                  <div class="modal_btn">
                      <img src="assets/img/delete-button.svg" class=" modal-close modal_form_close_all" alt="" onclick="modal_main_toggle();">
                  </div>
                  <div class="row">
                      <form action="/main_form" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="col s12 xl12">
                              <h4 class="main_form_header">Чтобы стать участником Школы развития волонтерских IT-навыков "IT - на добрые дела" -внимательно заполните все поля данной заявки и отправьте.</h4>
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">ФИО</label>
                                  <div class="social_grid">
                                      <div class="input_social_1">
                                          <input class="input_main_form_modal name_input_1" type="text" name="fio" placeholder="Имя" value="">
                                      </div>
                                      <div class="input_social_2">
                                          <input class="input_main_form_modal name_input_2" type="text" name="fio2" placeholder="Фамилия" value="">
                                      </div>
                                      <div class="input_social_3">
                                          <input class="input_main_form_modal name_input_3" type="text" name="fio3" placeholder="Отчество" value="">
                                      </div>
                                  </div>
                              </div> -->
                              <div class="form_item">
                                  <label for="" class="modal_input_label">ФИО</label>
                                  <input class="input_main_form_modal" type="text" name="fio" placeholder="Фамилия, Имя, Отчество" value="" required>
                              </div>
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">Дата рождения</label>
                                  <div class="bth_grid">
                                      <div>
                                          <input class="input_main_form_modal date_input_1" type="number" min="0" max="31" step="1" name="day" placeholder="День" value="" required>
                                      </div>
                                      <div>
                                          <input class="input_main_form_modal date_input_2" type="number" min="0" max="12" step="1" name="mouth" placeholder="Месяц" value="" required>
                                      </div>
                                      <div>
                                          <input class="input_main_form_modal date_input_3" type="number" min="0" max="2019" step="1" name="years" placeholder="Год" value="" required>
                                      </div>
                                  </div>
                              </div> -->
                              <div class="form_item">
                                  <label for="" class="modal_input_label">E-mail <span>(Пожалуйста, укажите свой e-mail, чтобы мы могли держать вас в курсе всех новостей и прислать дополнительную информацию о проекте.)</span></label>
                                  <input class="input_main_form_modal" type="email" name="email" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Телефон</label>
                                  <input class="input_main_form_modal" type="text" name="phone" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Место учёбы/работы <span>(укажите название образовательного учреждения, в котором вы учитесь или которое уже окончили или место, где работаете)</span></label>
                                  <input class="input_main_form_modal" type="text" name="pocht_index" placeholder="" value="" required>
                              </div>
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">Соц. сети</label>
                                  <div class="social_grid">
                                      <div class="input_social">
                                          <img src="assets/img/vk-social-logotype.svg" alt="" class="soc_image">
                                          <input class="input_main_form_modal date_input_4" type="text" name="vk" placeholder="" value="">
                                      </div>
                                      <div class="input_social">
                                          <img src="assets/img/facebook-logo-button.svg" alt="" class="soc_image">
                                          <input class="input_main_form_modal date_input_4" type="text" name="facebook" placeholder="" value="">
                                      </div>
                                      <div class="input_social last_social">
                                          <img src="assets/img/instagram.svg" alt="" class="soc_image">
                                          <input class="input_main_form_modal date_input_5" type="text" name="instagram" placeholder="" value="">
                                      </div>
                                  </div>
                              </div> -->
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">Город</label>
                                  <input class="input_main_form_modal" type="text" name="city" placeholder="" value="" required>
                              </div> -->
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Возраст</label>
                                  <input class="input_main_form_modal" type="number" name="edu" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Чему вы хотите научиться в рамках IT Школы?</label>
                                  <select class="form-select" name="city" aria-label="Default select example" required>
                                      <option disabled selected value="">Выберите тематику Школы:</option>
                                      <option value="15-16 октября - мобильные и web-технологии, SMM, VR и AR в волонтерской практике, использование мультикоптеров в работе волонтеров">15-16 октября - мобильные и web-технологии, SMM, VR и AR в волонтерской практике, использование мультикоптеров в работе волонтеров</option>
                                      <option value="17 октября - Пользовательские навыки в сети интернет, а так же использование различных онлайн-сервисов, в том числе, сервисов по дистанционному общению и технологии социальных коммуникаций">17 октября - Пользовательские навыки в сети интернет, а так же использование различных онлайн-сервисов, в том числе, сервисов по дистанционному общению и технологии социальных коммуникаций</option>
                                  </select>
                              </div>
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">Название проекта</label>
                                  <input class="input_main_form_modal" type="text" name="name_project" placeholder="" value="" required>
                              </div> -->
                              <!-- <div class="form_item" style="    margin-bottom: 25px !important;">
                                  <label for="" class="modal_input_label">Номинация</label>
                                  <select class='browser-default' name="select_mon">
                                      <option value="Реконструкция с применением VR- и AR-технологий">Реконструкция с применением VR- и AR-технологий</option>
                                      <option value="3D-моделирование и анимация">3D-моделирование и анимация</option>
                                      <option value="Реконструкция в формате компьютерной игры">Реконструкция в формате компьютерной игры</option>
                                  </select>
                              </div> -->
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">Краткое описание проекта (400 символов). <span>Расскажите нам самое важное о вашем проекте - о чём он, какие
                                          технологии были использованы и пр.</span></label>
                                  <textarea class="input_main_form_modal" type="text" name="opis_proj" placeholder="" value="" maxlength="400" style="height: 116px; padding-top: 20px !important;" required></textarea>
                              </div> -->
                              <!-- <div class="form_item">
                                  <label for="" class="modal_input_label">Команда проекта <span>(укажите членов команды, если таковые имеются)</span></label>
                                  <div class="team_grid">
                                      <div class="frst_team">
                                          <input class="input_main_form_modal team_input" type="text" name="name_team" placeholder="ФИО" value="" >
                                          <input class="input_main_form_modal team_input" type="email" name="email_team" placeholder="E-mail" value="" >
                                      </div>
                                      <div class="second_team">
                                          <input class="input_main_form_modal team_input" type="text" name="role_team" placeholder="Роль в команде" value="" >
                                          <input class="input_main_form_modal team_input" type="text" name="phone_team" placeholder="Телефон" value="" >
                                      </div>
                                  </div>
                                  <div class="form_item" id="added_news">
                                      <img src="assets/img/plus.svg" alt="" class="img_plus">
                                      <p class="text_plus">Добавить еще одного участника команды</p>
                                  </div>
                              </div> -->
                              <!-- <div class="form_item hidden" id="ucaht_1">
                                  <div class="pd40">
                                      <label for="" class="modal_input_label">Доп. участник</label>
                                      <div class="team_grid">
                                          <div class="frst_team">
                                              <input class="input_main_form_modal team_input" type="text" name="name_team_1" placeholder="ФИО" value="">
                                              <input class="input_main_form_modal team_input" type="email" name="email_team_1" placeholder="E-mail" value="">
                                          </div>
                                          <div class="second_team">
                                              <input class="input_main_form_modal team_input" type="text" name="role_team_1" placeholder="Роль в команде" value="">
                                              <input class="input_main_form_modal team_input" type="text" name="phone_team_1" placeholder="Телефон" value="">
                                          </div>
                                      </div>
                                  </div>
                              </div> -->
                              <!-- <div class="form_item">
                                  <p class="presi_text">Презентация проекта</p>
                                  <p class="info_presi">Пожалуйста, загрузите все файлы, которые презентуют ваш проект – презентация, прототип, текстовые документы,
                                      изображения, видео, прочие мультимедийные файлы. Обязательно прикладывайте инструкцию по запуску вашего
                                      проекта (программа для воспроизведения файла, необходимые шаги для запуска) – это очень поможет нашим экспертам
                                      при проверке вашей работы.
                                      <br><br>
                                      Все файлы можно направить одним архивом, а также использовать сервисы облачного хранения данных:
                                      Dropbox, Google Диск, Яндекс Диск и пр</p>
                                  <br><br>
                                  <p>Загрузите файлы, или прикрепите ссылку на файлы в «облаке»</p>
                              </div> -->
                              <!-- <div class="form_item">
                                  <div id="app">
                                      <form-file></form-file>
                                  </div>
                              </div> -->
                              <div class="form_item c items_captcha">
                                  <!-- <div class="">
                                  {!! NoCaptcha::renderJs() !!}
                                  {!! NoCaptcha::display() !!}
                              </div> -->
                                  <button type="submit" class="waves-effect waves-light btn btn_form_modal">Регистрация</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>