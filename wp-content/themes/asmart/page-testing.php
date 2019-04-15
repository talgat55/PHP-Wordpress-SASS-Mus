<?php
/*
 * Template Name: Страница регистрации
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="container">
            <div class="row">


        <section id="blog" class="blog-area section">

            <section id="testing">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="register_frm"  class="testing-registraion" method="POST">
                                <h1 class="title">Заявка на участие<br>в Федеральной программе<br><b>«Ты-предприниматель»</b></h1>

                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="g-field-3d">
                                            <label class="g-tright label-w100" for="firstname">
                                                <span class="g-fleft">Твое имя</span>
                                                <!--                                <span class="i-register"><span class="question-icon"></span> <a data-action="show_login">Я уже регистрировался на сайте</a></span>-->
                                            </label>
                                            <div class="g-field"><input id="firstname" class="form-control input-lg" type="text" placeholder="Имя" value="" name="f_name" autocomplete="off"  required></div>
                                        </div>
                                        <div class="g-field-3d">
                                            <label for="middlename">Отчество</label>
                                            <div class="g-field"><input id="middlename" class="form-control input-lg" type="text" placeholder="Отчество" value="" name="t_name" autocomplete="off" required></div>
                                        </div>
                                        <div class="g-field-3d">
                                            <label for="lastname">Фамилия</label>
                                            <div class="g-field"><input  class="form-control input-lg" type="text" placeholder="Фамилия" value="" name="s_name" autocomplete="off" required></div>
                                        </div>
                                        <div class="g-field-3d">
                                            <label for="lastname">Возраст</label>
                                            <div class="g-field"><input  class="form-control input-lg" type="number" placeholder="Возраст" value="" name="age" autocomplete="off"  required></div>
                                        </div>

                                        <div class="g-field-3d">
                                            <label for="soc_status">Твой статус</label>
                                            <div class="g-field g-err-noshadow g-radio-item g-radio-item-sm">
                                                <div id="soc_status">
                                                    <input class="g-radio" type="radio" name="status" value="действующий предприниматель" id="businessman">
                                                    <label class="g-radio-label g-noselect" for="businessman"><span class="g-dtable"><span class="g-dcell g-vert-middle">Действующий предприниматель</span></span></label>
                                                    <input class="g-radio" type="radio" name="status" value="школьник" id="pupil">
                                                    <label class="g-radio-label g-noselect" for="pupil"><span class="g-dtable"><span class="g-dcell g-vert-middle">Школьник</span></span></label>
                                                    <input class="g-radio" type="radio" name="status" value="студент" id="student">
                                                    <label class="g-radio-label g-noselect" for="student"><span class="g-dtable"><span class="g-dcell g-vert-middle">Студент</span></span></label>
                                                    <input class="g-radio" type="radio" name="status" value="другое" id="other">
                                                    <label class="g-radio-label g-noselect" for="other"><span class="g-dtable"><span class="g-dcell g-vert-middle">Другое</span></span></label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-field-3d">
                                            <label for="birthday">Дата рождения</label>
                                            <div class="g-field"><input data-type="date" id="birthday" class="form-control input-lg" type="date" placeholder="ДД.ММ.ГГГГ" value="" name="data_birday" autocomplete="off" required></div>
                                        </div>
                                        <!--                        <div class="download-pdf-bl">
                                                                    <a href="http://xn--80ahccnaxfhglcicdk2a6p.xn--p1ai/regions.pdf" target="_blank" class="g-dtable">
                                                                        <span class="download-pdf-icon g-dcell g-vert-top"></span>
                                                                        <span class="g-dcell g-vert-top txt">Список регионов-участников образовательной программы &laquo;Ты-предприниматель&raquo;</span>
                                                                    </a>
                                                                </div>-->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="g-field-3d">
                                            <label for="soc_status">Пол</label>
                                            <div class="g-field g-err-noshadow g-radio-item g-radio-item-sm">
                                                <div id="soc_status">
                                                    <input class="g-radio" type="radio" name="gender" value="male">
                                                    <label class="g-radio-label g-noselect"  ><span class="g-dtable"><span class="g-dcell g-vert-middle">Мужчина</span></span></label>
                                                    <input class="g-radio" type="radio" name="gender" value="female"  >
                                                    <label class="g-radio-label g-noselect"  ><span class="g-dtable"><span class="g-dcell g-vert-middle">Женщина</span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-field-3d">
                                            <label class="g-tright label-w100">
                                                <span class="g-fleft">Твой регион</span>
                                                <!--                                <span class="i-register"><span class="question-icon"></span> <a data-action="show-region">Я не нашел свой регион</a></span>-->
                                            </label>
                                            <div class="g-field g-kladr-field-item"><input id="region" class="form-control input-lg" type="text" placeholder="укажи место участия в программе " required value="" name="region" autocomplete="off"><ul class="g-kladr-autocomplete" style="display: none;"></ul></div>
                                        </div>
                                        <div class="g-field-3d">
                                            <label class="g-tright label-w100">
                                                <span class="g-fleft">Район</span> </label>
                                            <select class="form-control input-lg" name="rayon">
                                                <option value="Омск">Омск</option>
                                                <option value="Другое">Другое</option>
                                                <option value="Азовский район">Азовский район</option>
                                                <option value="Большереченский район">Большереченский район</option>
                                                <option value="Большеуковский район">Большеуковский район</option>
                                                <option value="Горьковский район">Горьковский район</option>
                                                <option value="Знаменский район">Знаменский район</option>
                                                <option value="Исилькульский район">Исилькульский район</option>
                                                <option value="Калачинский район">Калачинский район</option>
                                                <option value="Колосовский район">Колосовский район</option>
                                                <option value="Кормиловский район">Кормиловский район</option>
                                                <option value="Крутинский район">Крутинский район</option>
                                                <option value="	Любинский район">	Любинский район   </option>
                                                <option value="Марьяновский район">Марьяновский район</option>
                                                <option value="Москаленский район">Москаленский район</option>
                                                <option value="Муромцевский район">Муромцевский район</option>
                                                <option value="Называевский район">Называевский район</option>
                                                <option value="Нижнеомский район">Нижнеомский район</option>
                                                <option value="Нововаршавский район">Нововаршавский район</option>
                                                <option value="Одесский район">Одесский район</option>
                                                <option value="Оконешниковский район">Оконешниковский район</option>
                                                <option value="Омский район">Омский район</option>
                                                <option value="Павлоградский район">Павлоградский район</option>
                                                <option value="Полтавский район">Полтавский район</option>
                                                <option value="Русско-Полянский район">Русско-Полянский район</option>
                                                <option value="Саргатский район">Саргатский район</option>
                                                <option value="Седельниковский район">Седельниковский район</option>
                                                <option value="Таврический район">Таврический район</option>
                                                <option value="Тарский район">Тарский район</option>
                                                <option value="Тевризский район">Тевризский район</option>
                                                <option value="Тюкалинский район">Тюкалинский район</option>
                                                <option value="Усть-Ишимский район">Усть-Ишимский район</option>
                                                <option value="Черлакский район">Черлакский район</option>
                                                <option value="Шербакульский район">Шербакульский район</option>
                                            </select>

                                        </div>

                                        <div class="g-field-3d">
                                            <label for="city">Населенный пункт</label>
                                            <div class="g-field g-kladr-field-item g-disabled"><input id="city" class="form-control input-lg" type="text" placeholder="Укажи населенный пункт" value="" required name="naseleniy_punkt" autocomplete="off"><ul class="g-kladr-autocomplete" style="display: none;"></ul></div>
                                        </div>


                                        <div class="g-field-3d">
                                            <label for="tel">Контактный телефон</label>
                                            <div class="g-field"><input data-type="tel" required id="tel" class="form-control input-lg" type="text" placeholder="Контактный телефон" value="" name="phone_number" autocomplete="off"></div>
                                        </div>
                                        <div class="g-field-3d psw">
                                            <label for="email">Электронная почта</label>
                                            <div class="g-field"><input id="email" required class="form-control input-lg" type="email" placeholder="Электронная почта" value="" name="email" autocomplete="off"></div>
                                        </div>
                                        <input id="psw" required class="form-control input-lg" type="hidden" placeholder="Пароль" value="11111111" name="password" autocomplete="off">
                                    </div>
                                </div>


                                <input type="hidden" name="csrf_token" value="0" >

                                <div style="clear: both;"></div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="register-frm g-w448 register-lfm-b agree-bl g-mauto  ">
                                        <div class="g-fields-group">
                                            <div class="full-with ">
                                                <input class="g-radio" type="checkbox" name="agree" id="agree" checked="">
                                                <label class="g-radio-label g-noselect" for="agree" id="agreeLabel">Нажимая на кнопку «Стать участником», я даю согласие на обработку персональных данных и соглашаюсь c условиями политики конфиденциальности.</label>
                                            </div>
                                        </div>
                                        <div class="g-tcenter"><button class="btn-style-one   hvr-bounce-to-right start-btn">Стать участником</button></div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>



        </section>
            </div>
        </div>
    </div>

<?php get_footer();
