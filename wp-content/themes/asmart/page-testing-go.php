<?php
/*
 * Template Name: Страница прохождения теста
 */

get_header();


session_start();
if (!isset($_SESSION['email'])) {
    wp_redirect( 'http://предприниматель55.рф/registraciya/', 301 );
    exit;
}

?>



    <div id="primary" class="content-area  ">
        <div class="container">
            <div class="row">

                <section id="testing">
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="register_frm" class=" test-form" method="POST"  >
                                    <div class="block-test-one">
                                        <h2>Тест 1. Методика диагностики личности на мотивацию к избеганию неудач Т. Элерса.</h2>
                                        <?php
                                        $array_one_test= array(
                                            array(
                                                'Смелый',
                                                'Бдительный',
                                                'Предприимчивый',
                                            ),
                                            array(
                                                'Кроткий',
                                                'Робкий',
                                                'Упрямый',
                                            ),
                                            array(
                                                'Осторожный',
                                                'Решительный',
                                                'Пессимистичный',
                                            ),
                                            array(
                                                'Непостоянный',
                                                'Бесцеремонный',
                                                'Внимательный',
                                            ),
                                            array(
                                                'Неумный',
                                                'Трусливый',
                                                'Не думающий',
                                            ),
                                            array(
                                                'Ловкий',
                                                'Бойкий',
                                                'Предусмотрительный',
                                            ),
                                            array(
                                                'Хладнокровный',
                                                'Колеблющийся',
                                                'Удалой',
                                            ),
                                            array(
                                                'Стремительный',
                                                'Легкомысленный',
                                                'Боязливый',
                                            ),
                                            array(
                                                'Не задумывающийся',
                                                'Жеманный',
                                                'Непредусмотрительный',
                                            ),
                                            array(
                                                'Оптимистичный',
                                                'Добросовестный',
                                                'Чуткий',
                                            ),
                                            array(
                                                'Меланхоличный',
                                                'Сомневающийся',
                                                'Неустойчивый',
                                            ),
                                            array(
                                                'Трусливый',
                                                'Небрежный',
                                                'Взволнованный',
                                            ),
                                            array(
                                                'Опрометчивый',
                                                'Тихий',
                                                'Боязливый',
                                            ),
                                            array(
                                                'Внимательный',
                                                'Неблагоразумный',
                                                'Смелый',
                                            ),
                                            array(
                                                'Рассудительный',
                                                'Быстрый',
                                                'Мужественный',
                                            ),
                                            array(
                                                'Предприимчивый',
                                                'осторожный',
                                                'предусмотрительный',
                                            ),
                                            array(
                                                'Взволнованный',
                                                'Рассеянный',
                                                'Робкий',
                                            ),
                                            array(
                                                'Малодушный',
                                                'Неосторожный',
                                                'Бесцеремонный',
                                            ),
                                            array(
                                                'Пугливый',
                                                'Нерешительный',
                                                'Нервный',
                                            ),
                                            array(
                                                'Исполнительный',
                                                'Преданный',
                                                'Авантюрный',
                                            ),
                                            array(
                                                'Предусмотрительный',
                                                'Бойкий',
                                                'Отчаянный',
                                            ),
                                            array(
                                                'Укрощенный',
                                                'Безразличный',
                                                'Небрежный',
                                            ),
                                            array(
                                                'Осторожный',
                                                'Беззаботный',
                                                'Терпеливый',
                                            ),
                                            array(
                                                'Разумный',
                                                'Заботливый',
                                                'Храбрый',
                                            ),
                                            array(
                                                'Предвидящий',
                                                'Неустрашимый',
                                                'Добросовестный',
                                            ),
                                            array(
                                                'Поспешный',
                                                'Пугливый',
                                                'Беззаботный',
                                            ),
                                            array(
                                                'Рассеянный',
                                                'Опрометчивый',
                                                'Пессимистичный',
                                            ),
                                            array(
                                                'Осмотрительный',
                                                'Рассудительный',
                                                'Предприимчивый',
                                            ),
                                            array(
                                                'Тихий',
                                                'Неорганизованный',
                                                'Боязливый',
                                            ),
                                            array(
                                                'Оптимистичный',
                                                'Бдительный',
                                                'Беззаботный',
                                            ),


                                        );



                                        $i = 0;
                                        $lenone = count($array_one_test);
                                        foreach ($array_one_test as $key => $value) {
                                            if ($key == 0) {
                                                $firstclass = 'test-display-step';
                                                $desc = '
                                                        <p> 
                                                            Вам предлагается определить, в какой степени Ваши решения и действия связаны с
                                                            избеганием неудач
                                                            и мотивацией на успешное завершение дел. Ориентация на успех побуждает к его достижению
                                                            и необходима в деловой активности.
                                                            Вам будут предъявлены списки слов, всего 30 строк, по 3 слова в каждой строке. В каждой
                                                            строке
                                                            выберите только одно из трех слов, которое наиболее точно Вас характеризует.
                                                        </p>';

                                                $singlelink = true;

                                            } else {
                                                $firstclass = $desc = '';
                                                $singlelink = false;

                                            }
                                            echo '<div class="step-test ' . $firstclass . ' clearfix">';
                                            echo $desc;
                                            echo '
                                                            <div class="clearfix">
                                                                <p>Вопрос ' . intVal($key + 1) . ' - из 30. Вы </p>';

                                            foreach ($value as $keyvaious => $various) {

                                                echo '
                                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                            <input class="first-test" type="radio" name="testone' . $key . '" value="' . $various . '">
                                                                            <label class="">' . $various . '</label>
                                                                            </div>
                                                                        ';
                                            }
                                            echo ' 
                                                            </div>
                                                            <input type="hidden" name="testonearray[]">
                                                            <div class="nav-test-links">
                                                               ';

                                            if ($singlelink) {
                                                echo '<a href="#"class="next-step-test  first-link-test-one-clean-array   btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>';
                                            } else {
                                                if ($i == $lenone - 1) {
                                                    $last_first_link = 'last-link-first-test';
                                                }else{
                                                    $last_first_link = '';

                                                }


                                                echo '                                
                                                                    
                                                                    <a href="#"class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                                    <a href="#"class="next-step-test '.$last_first_link.'  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>
                                                                    ';
                                            }

                                            echo '
                                                            
                                                            </div>     
                                                        ';


                                            echo '</div>';
                                            $i++;
                                        }
                                        ?>

                                    </div>

                                    <div class="block-test-two clearfix">
                                         <?php
                                        $arrayquestionstree = array(
                                            array(
                                                'q' => '
                                                       Вопрос 1 из 44. Продвижение по службе больше зависит от удачного стечения обстоятельств, чем от
                                                                    способностей и усилий человека.
                                                    ',
                                                'v' => array(
                                                    '-3' => '-3 – не согласен полностью',
                                                    '-2' => '-2 – не согласен частично',
                                                    '-1' => '-1 – скорее не согласен, чем согласен'
                                                ),
                                                'v2' => array(
                                                    '+1' => '+ 1 – скорее согласен, чем не согласен',
                                                    '+2' => '+ 2 – согласен частично',
                                                    '+3' => '+ 3 – согласен полностью'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                                      Вопрос 2 из 44. Большинство разводов происходит от того, что люди не захотели приспособиться
                                                    друг
                                                    к другу.
                                                    ',
                                                'v' => array(
                                                    '-3' => '-3 – не согласен полностью',
                                                    '-2' => '-2 – не согласен частично',
                                                    '-1' => '-1 – скорее не согласен, чем согласен'
                                                ),
                                                'v2' => array(
                                                    '+1' => '+ 1 – скорее согласен, чем не согласен',
                                                    '+2' => '+ 2 – согласен частично',
                                                    '+3' => '+ 3 – согласен полностью'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                                     Вопрос 3 из 44.  Болезнь – дело случая: если уж суждено заболеть, то ничего не поделаешь.
                                                    ',
                                                'v' => array(
                                                    '-3' => '-3 – не согласен полностью',
                                                    '-2' => '-2 – не согласен частично',
                                                    '-1' => '-1 – скорее не согласен, чем согласен'
                                                ),
                                                'v2' => array(
                                                    '+1' => '+ 1 – скорее согласен, чем не согласен',
                                                    '+2' => '+ 2 – согласен частично',
                                                    '+3' => '+ 3 – согласен полностью'
                                                )
                                            ),





                                        );
                                         ?>
                                        <h2>Тест 2. Тест-опросник субъективного контроля (УСК) Дж. Роттера адаптирован Е.Ф. Бажиным, С.А. Голыкиной, А.М. Эткиндом.</h2>
                                        <div class="step-test test-display-step clearfix ">

                                            <p>
                                                Вам предлагается определить, склонны ли вы брать ответственность на себя за жизненно
                                                важные события, которые происходят с Вами, и управлять своей жизнью. Успешные
                                                предприниматели, как правило, ориентированы на то, что большинство важных событий в
                                                их
                                                жизни являются результатом их собственных действий. Они чувствуют свою
                                                ответственность
                                                за эти события и за то, как складывается их жизнь в целом.<br>
                                                Вам предлагается ряд утверждений. Выразите свое отношение к каждому из них,
                                                используя
                                                шкалу от –3 («полностью не согласен») до +3 («полностью согласен»).
                                            </p>
                                            <div>
                                                <p>Вопрос 1 из 44. Продвижение по службе больше зависит от удачного стечения обстоятельств, чем от
                                                    способностей и усилий человека. </p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Вперед</a>
                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 2 из 44. Большинство разводов происходит от того, что люди не захотели приспособиться
                                                    друг
                                                    к другу. </p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>
                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 3 из 44.  Болезнь – дело случая: если уж суждено заболеть, то ничего не поделаешь. </p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo3" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo3" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo3" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo3" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo3" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo3" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 4 из 44.  Люди оказываются одинокими из-за того, что сами не проявляют интереса и
                                                    дружелюбия
                                                    к окружающим.</p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo4" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo4" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo4" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo4" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo4" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo4" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 5 из 44.  Осуществление моих желаний часто зависит от везения.</p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo5" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo5" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo5" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo5" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo5" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo5" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>
                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 6 из 44.  Бесполезно предпринимать усилия для того, чтобы завоевать симпатию других
                                                    людей.</p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo6" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo6" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo6" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo6" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo6" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo6" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>
                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 7 из 44.  Внешние обстоятельства – родители и благосостояние – влияют на семейное
                                                    счастье не
                                                    меньше, чем отношения супругов.</p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo7" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo7" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo7" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo7" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo7" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo7" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>
                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 8 из 44.  Я часто чувствую, что мало влияю на то, что происходит со мной.</p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo8" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo8" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo8" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo8" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo8" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo8" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>
                                        <div class="step-test  clearfix ">


                                            <div>
                                                <p>Вопрос 9 из 44.  Как правило, руководство оказывается более эффективным, когда руководитель
                                                    полностью контролирует  действия подчиненных, а не полагается на их
                                                    самостоятельность.</p>
                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo9" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo9" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo9" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo9" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo9" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo9" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>Вопрос 10 из 44.  Мои отметки в школе чаще зависели от случайных обстоятельств, (например,
                                                    настроения учителя), чем от моих собственных усилий.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo10" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo10" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo10" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo10" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo10" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo10" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>
                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>Вопрос 11 из 44.  Когда я строю планы, то я, в общем, верю, что смогу осуществить их.


                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo11" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo11" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo11" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo11" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo11" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo11" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 12 из 44.  То, что многим людям кажется удачей или везением, на самом деле является
                                                    результатом долгих целенаправленных усилий.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo12" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo12" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo12" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo12" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo12" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo12" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 13 из 44.  Думаю, что правильный образ жизни может больше помочь здоровью, чем врачи и
                                                    лекарства.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo13" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo13" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo13" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo13" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo13" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo13" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 14 из 44.  Если люди не подходят друг другу, то, как бы они не старались, наладить
                                                    семейную
                                                    жизнь они все равно не смогут.


                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo14" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo14" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo14" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo14" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo14" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo14" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 15 из 44.  То хорошее, что я делаю, обычно бывает по достоинству оценено другими.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo15" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo15" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo15" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo15" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo15" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo15" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 16 из 44.  Дети вырастают такими, какими их воспитывают родители.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo16" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo16" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo16" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo16" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo16" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo16" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 17 из 44.  Думаю, что случай или судьба не играют важной роли в моей жизни.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo17" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo17" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo17" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo17" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo17" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo17" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 18 из 44.  Я стараюсь не планировать далеко вперед, потому что многое зависит от того,
                                                    как
                                                    сложатся обстоятельства.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo18" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo18" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo18" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo18" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo18" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo18" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 19 из 44.   Мои отметки в школе больше всего зависели от моих усилий и степени
                                                    подготовленности.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo19" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo19" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo19" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo19" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo19" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo19" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 20 из 44.  В семейных конфликтах я чаще чувствую вину за собой, чем за противоположной
                                                    стороной.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo20" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo20" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo20" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo20" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo20" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo20" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 21 из 44.  Жизнь большинства людей зависит от стечения обстоятельств.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo21" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo21" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo21" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo21" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo21" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo21" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 22 из 44. Я предпочитаю такое руководство, при котором можно самостоятельно
                                                    определять,
                                                    что и как делать.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo22" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo22" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo2" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo22" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo22" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo22" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 23 из 44. Думаю, что мой образ жизни ни в коей мере не является причиной моих
                                                    болезней.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo23" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo23" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo23" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo23" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo23" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo23" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 24 из 44. Как правило, именно неудачное стечение обстоятельств мешает людям добиться
                                                    успеха в своем деле.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo24" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo24" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo24" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo24" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo24" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo24" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 25 из 44.  В конце концов, за плохое управление организацией ответственны сами люди,
                                                    которые в ней работают.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo25" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo25" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo25" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo25" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo25" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo25" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 26 из 44. Я часто чувствую, что ничего не могу изменить в сложившихся в семье
                                                    отношениях.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo26" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo26" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo26" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo26" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo26" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo26" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>

                                                    Вопрос 27 из 44. Если я очень захочу, то смогу расположить к себе почти любого.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo27" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo27" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo27" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo27" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo27" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo27" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>

                                                    Вопрос 28 из 44. На подрастающее поколение влияет так много разных обстоятельств, что усилия
                                                    родителей по воспитанию детей часто оказываются бесполезными.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo28" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo28" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo28" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo28" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo28" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo28" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>

                                                    Вопрос 29 из 44. То, что со мной случается, это дело моих собственных рук.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo29" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo29" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo29" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo29" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo29" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo29" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>


                                                    Вопрос 30 из 44. Трудно бывает понять, почему руководители поступают именно так, а не иначе.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo30" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo30" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo30" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo30" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo30" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo30" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>


                                                    Вопрос 31 из 44. Человек, который не смог добиться успеха в своей работе, скорее всего не
                                                    проявлял достаточно усилий.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo31" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo31" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo31" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo31" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo31" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo31" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 32 из 44. Чаще всего я могу добиться от членов моей семьи того, что я хочу.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo32" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo32" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo32" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo32" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo32" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo32" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 33 из 44. В неприятностях и неудачах, которые случались в моей жизни, гораздо чаще
                                                    были
                                                    виноваты другие люди, чем я сам.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo33" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo33" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo33" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo33" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo33" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo33" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 34 из 44. Ребенка всегда можно уберечь от простуды, если за ним следить и правильно
                                                    его
                                                    одевать.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo34" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo34" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo34" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo34" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo34" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo34" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 35 из 44. В сложных обстоятельствах я предпочитаю подождать, пока проблемы разрешатся
                                                    сами
                                                    собой.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo35" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo35" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo35" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo35" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo35" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo35" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 36 из 44. Успех является результатом упорной работы и мало зависит от случая или
                                                    везения.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo36" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo36" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo36" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo36" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo36" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo36" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 37 из 44. Я чувствую, что от меня больше, чем от кого бы то ни было, зависит счастье
                                                    моей
                                                    семьи.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo37" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo37" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo37" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo37" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo37" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo37" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 38 из 44. Мне всегда было трудно понять, почему я нравлюсь одним людям и не нравлюсь
                                                    другим
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo38" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo38" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo38" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo38" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo38" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo38" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 39 из 44. Я всегда предпочитаю принять решение и действовать самостоятельно, а не
                                                    надеяться на помощь других людей или на судьбу.
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo39" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo39" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo39" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo39" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo39" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo39" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 40 из 44. К сожалению, заслуги человека часто остаются непризнанными, несмотря на все
                                                    его
                                                    старания
                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo40" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo40" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo40" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo40" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo40" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo40" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 41 из 44. В семейной жизни бывают такие ситуации, которые невозможно разрешить даже
                                                    при
                                                    самом сильном желании.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo41" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo41" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo41" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo41" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo41" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo41" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>

                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 42 из 44. Способные люди, не сумевшие реализовать свои возможности, должны винить в
                                                    этом
                                                    только самих себя.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo42" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo42" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo42" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo42" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo42" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo42" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 43 из 44. Многие мои успехи были возможны только благодаря помощи других людей.

                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo43" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo43" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo43" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo43" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo43" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo43" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">
                                                <a href="#"
                                                   class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#"
                                                   class="next-step-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>

                                            </div>
                                        </div>


                                        <div class="step-test  clearfix ">
                                            <div>
                                                <p>
                                                    Вопрос 44 из 44. Большинство неудач в моей жизни произошло от неумения, незнания или лени и
                                                    мало
                                                    зависело от везения или невезения.


                                                </p>

                                                <div class="clearfix block-answers">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo44" value="-3">
                                                            <label class="">-3 – не согласен полностью</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo44" value="-2">
                                                            <label class="">- 2 – не согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo44" value="-1">
                                                            <label class="">- 1 – скорее не согласен, чем согласен</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo44" value="+1">
                                                            <label class="">+ 1 – скорее согласен, чем не согласен</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo44" value="+2">
                                                            <label class="">+ 2 – согласен частично</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <input class="second-test" type="radio" name="testtwo44" value="+3">
                                                            <label class="">+ 3 – согласен полностью</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testtwoarray[]">
                                            <div class="nav-test-links">

                                                <a href="#"  class="previous-step-test  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                                <a href="#" class="next-step-test last-link-secod-test  btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-test-tree">
                                        <?php
                                        $arrayquestions = array(
                                            array(
                                                'q' => '
                                        Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                        <br><br>
                                        Вопрос 1 из 30. Больше всего удовлетворение в жизни дает…
                                    
                                         
                                    ',
                                                'v' => array(
                                                    'a' => 'а) оценка другими результатов работы;',
                                                    'b' => 'в) сознание, что работа выполнена хорошо;',
                                                    'c' => 'с) сознание того, что находишься среди друзей.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 2 из 30. Если бы я играл в футбол (баскетбол), то хотел бы быть…  
                                        
                                         ',
                                                'v' => array(
                                                    'a' => 'а) тренером, который разрабатывает тактику игры;',
                                                    'b' => 'в) известным игроком;',
                                                    'c' => 'с) выбранным капитаном команды.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                        Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                        <br><br>
                                        Вопрос 3 из 30. Лучшими преподавателями являются те, которые …
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) имеют индивидуальный подход;',
                                                    'b' => 'в) увлечены своим предметом и вызывают интерес к нему;',
                                                    'c' => 'с) создают в коллективе атмосферу, в которой никто не боится высказать свою точку зрения.'
                                                )
                                            ),

                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                     <br><br>
                                     Вопрос 4 из 30. Учащиеся оценивают как самых плохих преподавателей, которые…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) не скрывают, что некоторые люди им не симпатичны;',
                                                    'b' => 'в) вызывают у всех дух соперничества;',
                                                    'c' => 'с) производят впечатление, что предмет, который они преподают, их не интересует.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 5 из 30. Я рад (а), когда мои друзья…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) помогают другим, когда для этого предоставляется случай;',
                                                    'b' => 'в) всегда верны и надежны;',
                                                    'c' => 'с) интеллигентны и у них широкие интересы.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 6 из 30. Лучшими друзьями считаю тех…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) с которыми хорошо складываются взаимные отношения; ',
                                                    'b' => 'в) которые могут больше , чем я;',
                                                    'c' => 'с) на которых можно надеяться.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                     <br><br>
                                     Вопрос 7 из 30. Я хотел (а) бы, чтобы обо мне говорили, как о человеке, который…
                                     
                                         ',
                                                'v' => array(
                                                    'a' => 'а) добился жизненного успеха;',
                                                    'b' => 'в) может сильно любить;',
                                                    'c' => 'с) отличается дружелюбием и доброжелательностью.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                   Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 8 из 30. Если бы я мог(ла) выбирать, я хотел(а)  бы быть…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) научным работником;',
                                                    'b' => 'в) начальником отдела;',
                                                    'c' => 'с) опытным летчиком.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                   <br><br>
                                    Вопрос 9 из 30. Когда я был(а) ребенком, я любил(а)…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) игры с друзьями;',
                                                    'b' => 'в) успехи в делах;',
                                                    'c' => 'с) когда меня хвалили.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                   Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 10 из 30. Больше всего мне не нравится, когда я…
                                      
                                              ',
                                                'v' => array(
                                                    'a' => 'а) встречаю препятствия при выполнении возложенной на меня задачи;',
                                                    'b' => 'в) когда в коллективе ухудшаются товарищеские отношения;',
                                                    'c' => 'с) когда меня критикует мой начальник. '
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 11 из 30. Основная роль школ должна заключаться …
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) в подготовке учеников к работе по специальности;',
                                                    'b' => 'в) в развитии индивидуальных способностей и самостоятельности;',
                                                    'c' => 'с) в воспитании в учениках качеств, благодаря которым они могли бы ухаживать за людьми.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 12 из 30. Мне не нравятся учреждения, в которых…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) недемократическая система;',
                                                    'b' => 'в) человек теряет индивидуальность в общей массе;',
                                                    'c' => 'с) невозможно проявление собственной инициативы.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 13 из 30. Если бы у меня было больше свободного времени, я бы использовал(а) его…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) для общения с друзьями;',
                                                    'b' => 'в) для любимых дел и самообразования;',
                                                    'c' => 'с) для беспечного отдыха.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                   Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                   <br><br>
                                   Вопрос 14 из 30. Мне кажется, что я способен (способна) на многое, когда…
                                    
                                          ',
                                                'v' => array(
                                                    'a' => 'а) работаю с симпатичными людьми;',
                                                    'b' => 'в) у меня работа, которая меня удовлетворяет;',
                                                    'c' => 'с) мои усилия достаточно вознаграждены.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                   Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                   <br><br>
                                   Вопрос 15 из 30. Я люблю, когда…
                                      
                                          ',
                                                'v' => array(
                                                    'a' => 'а) другие меня ценят;',
                                                    'b' => 'в) чувствую удовлетворение от выполненной работы;',
                                                    'c' => 'с) приятно провожу время с друзьями.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 16 из 30. Если бы обо мне писали в газетах, мне бы хотелось, чтобы…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) отметили дело, которое я выполнял;',
                                                    'b' => 'в) похвалили меня за мою работу;',
                                                    'c' => 'с) сообщили о том, что меня выбрали в комитет или бюро.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 17 из 30. Лучше всего я бы учился (училась), если бы преподаватель…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) имел ко мне индивидуальный подход;',
                                                    'b' => 'в) стимулировал меня на более интенсивный труд;',
                                                    'c' => 'с) вызывал дискуссию по разбираемым вопросам.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                   Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                   <br><br>
                                   Вопрос 18 из 30. Нет ничего хуже, чем…
                                      
                                          ',
                                                'v' => array(
                                                    'a' => 'а) оскорбление личного достоинства;',
                                                    'b' => 'в) неуспех при выполнении важной задачи;',
                                                    'c' => 'с) потеря друзей.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 19 из 30. Больше всего я ценю…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) личный успех;',
                                                    'b' => 'в) общую работу;',
                                                    'c' => 'с) практические результаты.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 20 из 30. Очень мало людей…
                                      
                                        ',
                                                'v' => array(
                                                    'a' => 'а) действительно радуются выполненной работе;',
                                                    'b' => 'в) с удовольствием работают в коллективе;',
                                                    'c' => 'с) выполняют работу по-настоящему хорошо. '
                                                )
                                            ),
                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                     <br><br>
                                      Вопрос 21 из 30. Я не переношу…
                                      
                                          ',
                                                'v' => array(
                                                    'a' => 'а) ссоры и споры;',
                                                    'b' => 'в) отмечание всего нового;',
                                                    'c' => 'с) людей, ставящих себя выше других.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                     <br><br>
                                     Вопрос 22 из 30. Я хотел(а) бы…
                                      
                                        ',
                                                'v' => array(
                                                    'a' => 'а) чтобы окружающие считали меня своим другом;',
                                                    'b' => 'в) помогать другим в общем деле;',
                                                    'c' => 'с) вызывать восхищение других.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                      <br> <br>
                                     Вопрос 23 из 30. Я люблю начальство, когда оно…
                                     
                                         ',
                                                'v' => array(
                                                    'a' => 'а) требовательно;',
                                                    'b' => 'в) пользуются авторитетом;',
                                                    'c' => 'с) доступно.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                     <br><br>
                                     Вопрос 24 из 30. На работе я хотел(а)  бы…
                                      
                                            ',
                                                'v' => array(
                                                    'a' => 'а) чтобы решения принимались коллективно;',
                                                    'b' => 'в) самостоятельно работать над решением проблемы;',
                                                    'c' => 'с) чтобы начальник признал мои достоинства.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 25 из 30. Я хотел(а)  бы прочитать книгу…
                                      
                                        ',
                                                'v' => array(
                                                    'a' => 'а) об искусстве хорошо уживаться с людьми;',
                                                    'b' => 'в) о жизни известного человека;',
                                                    'c' => 'с) типа «Сделай сам».'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                     Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                      <br> <br>
                                     Вопрос 26 из 30. Если бы у меня были музыкальные способности, я хотел(а)  бы стать…
                                     
                                        ',
                                                'v' => array(
                                                    'a' => 'а) дирижером;',
                                                    'b' => 'в) солистом;',
                                                    'c' => 'с) композитором.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                    <br><br>
                                    Вопрос 27 из 30. Свободное время с наибольшим удовольствием провожу…
                                      
                                          ',
                                                'v' => array(
                                                    'a' => 'а) смотря детективные фильмы;',
                                                    'b' => 'в) в развлечениях с друзьями;',
                                                    'c' => 'с) занимаюсь своим увлечением (хобби).'
                                                )
                                            ),

                                            array(
                                                'q' => '
                                        Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                         <br> <br>
                                        Вопрос 28 из 30. При условии получения одинакового выигрыша я бы с удовольствием…
                                     
                                        ',
                                                'v' => array(
                                                    'a' => 'а) выдумал(а)  интересный конкурс;',
                                                    'b' => 'в) выиграл(а) в конкурсе;',
                                                    'c' => 'с) организовал(а) конкурс и руководил(а) им.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                   Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                   <br><br>
                                    Вопрос 29 из 30. Для меня важнее всего знать…
                                      
                                          ',
                                                'v' => array(
                                                    'a' => 'а) что я хочу сделать;',
                                                    'b' => 'в) как достичь цели;',
                                                    'c' => 'с) как привлечь других к достижению моей цели.'
                                                )
                                            ),
                                            array(
                                                'q' => '
                                    Из предложенных вариантов выберите сначала <span style="color:#019be1; ">НАИБОЛЕЕ</span> подходящий для Вас вариант.Затем из оставшихся вариантов – <span style="color: red;">НАИМЕНЕЕ</span> подходящий вариант.
                                        <br><br>
                                     Вопрос 30 из 30. Человек должен вести себя так, чтобы…
                                      
                                         ',
                                                'v' => array(
                                                    'a' => 'а) другие люди были довольны им;',
                                                    'b' => 'в) выполнять, прежде всего, свою задачу;',
                                                    'c' => 'с) за его работу не нужно его укорять. '
                                                )
                                            ),


                                        );
                                        ?>
                                        <h2>Тест 3. Ориентировочная анкета Басса-Смекала-Кучера.</h2>
                                        <?php
                                        $i = 0;
                                        $len = count($arrayquestions);
                                        foreach ($arrayquestions as $key => $value) {
                                            if ($key == 0) {
                                                $firstclass = 'test-display-step';
                                                $desc = '                            
                            <p>
                                Вам предлагается определить, в какой степени Вы направлены на решение деловых задач,
                                удовлетворение собственных амбиций и потребностей, а также межличностное общение с
                                окружающими людьми. Иными словами, ответить на вопрос: что Вас больше всего мотивирует в
                                деятельности: Вы сами и Ваши интересы, дело и его результат, или общение с окружающими
                                людьми? Направленность на дело - одна из характеристик успешных деловых людей. Даже если
                                окажется, что Вы в меньшей степени ориентированы на решение деловых вопросов и задач,
                                при желании, всегда есть возможность исправить ситуацию, пересмотрев свою позицию.
                                Вам предлагается три варианта ответа на предлагаемые вопросы: А, Б, В.<br>
                             </p>';

                                                $singlelink = true;

                                            } else {
                                                $firstclass = $desc = '';
                                                $singlelink = false;

                                            }
                                            echo '<div class="step-test ' . $firstclass . '  clearfix">';
                                            echo $desc;

                                            echo '
                                   
                                        <p>' . $value["q"] . '</p>
                                        <div class="clearfix block-answers">';

                                            foreach ($value["v"] as $keyvaious => $various) {
                                                echo '
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <input class="third-test third-test-check-'.$key.'" type="checkbox" name="testtree' . $key . '" value="' . $keyvaious . '">
                                                                <label class="">' . $various . '</label>
                        
                                                            </div>
                                                          
                                                ';

                                            }


                                            echo '
                                        
        
                                        <input type="hidden" name="testtreegreen[]">
                                        <input type="hidden" name="testtreered[]">
                                        <div class="nav-test-links">';

                                            if ($i == $len - 1) {
                                                echo '<input type="submit" class="btn-style-one   hvr-bounce-to-right start-btn   last-third-link-test3" value="Закончить тестирование" />';
                                            } else {
                                                if ($singlelink) {
                                                    echo '<a href="#"class="next-step-test  tree-test-link  btn-link-nav-test btn-style-one   hvr-bounce-to-right">Вперед</a>';
                                                } else {
                                                    echo '                                
                                        
                                        <a href="#"class="previous-step-test   tree-test-link btn-link-nav-test btn-style-one   hvr-bounce-to-right">Назад</a>
                                        <a href="#"class="next-step-test   tree-test-link btn-link-nav-test  btn-style-one   hvr-bounce-to-right">Вперед</a>
                                        ';
                                                }
                                            }


                                            echo '                   
                                        </div>
                                    </div>
                                    
                                    ';


                                            echo '</div>';
                                            $i++;

                                        }


                                        ?>


                                    </div>

                                </form>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
<script>
    jQuery(document).ready(function ($) {
        // $('[name=attachments\\[\\]]').val(attachArray);
        //   $('.btn-link-nav-test').click(function () {
        //$('.nav-test-links a').live( "click", function() {



        $(document).on('click', '.last-third-link-test3', function () {
            if( $(this).parent().parent().find('input[type=checkbox]:checked').length < 2){
                return false;
            }
        });
        $(document).on('click', '.nav-test-links a', function () {


            if ($(this).hasClass('tree-test-link')) {

                if ($(this).hasClass('next-step-test')) {

                    if( $(this).parent().parent().find('input[type=checkbox]:checked').length == 2){
                        $(this).parent().parent().parent().next().addClass('test-display-step');
                        $(this).parent().parent().parent().removeClass('test-display-step');
                    }
                } else {
                    $(this).parent().parent().parent().prev().addClass('test-display-step');
                    $(this).parent().parent().parent().removeClass('test-display-step');
                }


            } else {

                if ($(this).hasClass('next-step-test')) {
                    if($(this).hasClass('last-link-first-test')){
                        $('.block-test-one').hide();
                        $('.block-test-two').show();

                    }
                    if($(this).hasClass('last-link-secod-test')){
                        $('.block-test-two').hide();
                        $('.block-test-tree').show();

                    }



                    if( $(this).parent().parent().find('input[type=radio]:checked').length > 0){
                        $(this).parent().parent().next().addClass('test-display-step');
                        $(this).parent().parent().removeClass('test-display-step');
                    }

                } else {

                    $(this).parent().parent().prev().addClass('test-display-step');
                    $(this).parent().parent().removeClass('test-display-step');

                }



            }


            return false;
        });
        $('input.first-test').change(function () {
            /* if($(this).parent().parent().parent().find('.first-link-test-one-clean-array')){  // clean array
                 $('[name=testonearray\\[\\]]').val(' ');
                 $('[name=testtwoarray\\[\\]]').val(' ');
                 $('[name=testtreegreen\\[\\]]').val(' ');
                 $('[name=testtreered\\[\\]]').val(' ');
             }*/
            $(this).parent().parent().parent().find('[name=testonearray\\[\\]]').val($(this).val());

        });


        $('input.second-test').change(function () {

            $(this).parent().parent().parent().parent().parent().find('[name=testtwoarray\\[\\]]').val($(this).val());

        });
        var limit = 2;
        $('input.third-test').change(function () {


            if($(this).parent().parent().find('.green-choose').length == 0 && $(this).parent().parent().find('.red-choose').length == 0 || $(this).parent().parent().find('.green-choose').length == 0 && $(this).parent().parent().find('.red-choose').length > 0){
                $(this).addClass('green-choose');
                $(this).parent().addClass('green-choose-background');
            }else if($(this).parent().parent().find('.green-choose').length > 0 && $(this).parent().parent().find('.red-choose').length == 0){
                $(this).addClass('red-choose');
                $(this).parent().addClass('red-choose-background');
            }else  {
                this.checked = false;
            }
            if ($(this).not(':checked').length){  // delete class if unchek
                $(this).removeClass('green-choose').removeClass('red-choose');
                $(this).parent().removeClass('red-choose-background').removeClass('green-choose-background');
            }



            if($(this).hasClass('green-choose')){
                $(this).parent().parent().find('[name=testtreegreen\\[\\]]').val($(this).parent().parent().find('.green-choose').val());
                console.log('true');
            }else{
                $(this).parent().parent().find('[name=testtreered\\[\\]]').val($(this).parent().parent().find('.red-choose').val());
                console.log('false');
            }

        });
        // save in cookie sselected value
        $('input.third-test, input.second-test, input.first-test').change(function () {
            var inputname = $(this).attr("name");
            var inputval = $(this).val();
            var  selectedValues = Cookies.get('selectedvaluetest');
            if (typeof selectedValues  !== "undefined"  || selectedValues !=''){

                var obg = $.parseJSON(selectedValues);
                if($.inArray(inputval, obg ) >=0 ){
                    obg[$.inArray(inputval, obg )]['key'].push(inputname);
                    obg[$.inArray(inputval, obg )]['value'].push(inputval);
                    Cookies.set('selectedvaluetest', $.toJSON(obg));
                }else{
                    obg['key'].push(inputname);
                    obg['value'].push(inputval);
                    Cookies.set('selectedvaluetest', $.toJSON(obg));
                }

            }else{

                Cookies.set('selectedvaluetest', $.toJSON( { key:  inputname , value: inputval} ));

            }

        });
        //  set value from cookies
        var  selectedValues = Cookies.get('selectedvaluetest');
        if (typeof selectedValues  !== "undefined"  || selectedValues !=''){
            var obg = $.parseJSON(selectedValues);
            $.each(obg, function( index, value ) {
                var $this = $('body').find('[name='+value.key);
                $this.val(value.value);
                var classLink = $this.parent().parent().parent().find('.nav-test-links a');



                if (classLink.hasClass('tree-test-link')) {

                    if (classLink.hasClass('next-step-test')) {

                        if( classLink.parent().parent().find('input[type=checkbox]:checked').length == 2){
                            classLink.parent().parent().parent().next().addClass('test-display-step');
                            classLink.parent().parent().parent().removeClass('test-display-step');
                        }
                    } else {
                        classLink.parent().parent().parent().prev().addClass('test-display-step');
                        classLink.parent().parent().parent().removeClass('test-display-step');
                    }


                }else {


                    if (classLink.hasClass('next-step-test')) {
                        if (classLink.hasClass('last-link-first-test')) {
                            $('.block-test-one').hide();
                            $('.block-test-two').show();

                        }
                        if (classLink.hasClass('last-link-secod-test')) {
                            $('.block-test-two').hide();
                            $('.block-test-tree').show();

                        }


                        if (classLink.parent().parent().find('input[type=radio]:checked').length > 0) {
                            classLink.parent().parent().next().addClass('test-display-step');
                            classLink.parent().parent().removeClass('test-display-step');
                        }

                    } else {

                        classLink.parent().parent().prev().addClass('test-display-step');
                        classLink.parent().parent().removeClass('test-display-step');

                    }
                }




            });



        }


    });
</script>

<?php get_footer();
