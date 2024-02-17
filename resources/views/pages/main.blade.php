@extends('layouts.general')

@section('title', 'Главная')
@section('custom-css')
@endsection
@section('custom-js-before')
@endsection
@section('custom-js-after')
@endsection
@section('content')
        <div class="container bg-white">
            <div class="row">
                <div class="col-3 aside">
                    <div class="row">
                        <div class="title-box clearfix "><h2 class="title-box_primary">Личный кабинет</h2></div>
                        <form class="form-light" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Электронная почта">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Пароль">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-two">Вход</button>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-two">Регистрация</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="list styled custom-list">
                            <ul>
                                <li><a title="Восстановление пароля" href="#">Забыли пароль?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12  pl-25">
                            <div class="title-box clearfix "><h2 class="title-box">Добро пожаловать в центр интеллектуальных и творческих состязаний «УчёныйКотик»!</h2></div>
                            <p>«УчёныйКотик» - центр интеллектуальных и творческих соревнований для детей, проводит международные дистанционные конкурсы с 2021 года на территории России и стран СНГ.</p>
                            <p>Победители и участники конкурсов и олимпиад награждаются дипломами и сертификатами, которые повышают у ребенка уровень мотивации и веру в себя. Педагоги, подготовившие призеров, получают благодарности.</p>
                            <p><b>Наградные документы по всем мероприятиям предоставляются в электронном виде в день объявления итогов.</b></p>
                            <p>Расписание олимпиад и конкурсов <a href="#" title="read more" class="btn-inline " target="_self">доступно по ссылке</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <div class="grey-box-icon b1">
                                <h4>Олимпиады по математике</h4>
                                <p>Математика – королева наук. Если вы стремитесь вдохновить своих учеников на изучение чисел, форм и алгоритмов, наши олимпиады по математике предоставят им идеальную площадку для развития логического мышления и аналитических навыков.</p>
                                <p><a class="no-underline"  href="#"><em>Перейти →</em></a></p>
                            </div><!--grey box -->
                        </div><!--/span3-->
                        <div class="col-md-6 p-0">
                            <div class="grey-box-icon b2">
                                <h4>Олимпиады по русскому языку</h4>
                                <p>Слово имеет силу, а русский язык богат и многогранен. Пригласите своих учеников исследовать глубины грамматики, орфографии и стилистики в наших олимпиадах по русскому языку, где они смогут проявить своё мастерство владения словом.</p>
                                <p><a class="no-underline"  href="#"><em>Перейти →</em></a></p>
                            </div><!--grey box -->
                        </div><!--/span3-->
                        <div class="col-md-6 p-0">
                            <div class="grey-box-icon b4">
                                <h4>Олимпиады по окружающему миру</h4>
                                <p>Окружающий мир полон чудес, которые ждут своих исследователей. Познавательные олимпиады по окружающему миру позволят вашим ученикам раскрыть тайны природы и общества, углубить знания в естественных и социальных науках.</p>
                                <p><a class="no-underline"  href="#"><em>Перейти →</em></a></p>
                            </div><!--grey box -->
                        </div><!--/span3-->
                        <div class="col-md-6 p-0">
                            <div class="grey-box-icon b3">
                                <h4>Метапредметные олимпиады</h4>
                                <p>Интеграция знаний – ключ к развитию универсальных умений. Наши метапредметные олимпиады предлагают учащимся возможность соединить различные области знаний, демонстрируя компетентность в решении задач и проектной деятельности.</p>
                                <p><a class="no-underline" href="#"><em>Перейти →</em></a></p>
                            </div><!--grey box -->
                        </div><!--/span3-->
                    </div>
                    <div class="row pl-25 pb-25 mt-25">
                        <h2><span>Ближайшие мероприятия</span></h2>
                        @foreach($events as $event)
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="newsBox">
                                    <div class="thumbnail">
                                        <div class="caption maxheight2">
                                            <div class="box_inner">
                                                <div class="box">
                                                    <p class="title"><h4 class="fw-bold">{{ $event->title }}</h4></p>
                                                    <p>{{ $event->description }}</p>
                                                    <p><i class="fa fa-calendar"></i> Приём заявок до: <span class="underline">{{ $event->deadline }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-25 flat">
                        <h2><span>Организационный сбор</span></h2>
                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <ul class="plan plan1">
                                <li class="plan-name">Одиночное участие
                                </li>
                                <li class="plan-price">
                                    <strong>90</strong> ₽
                                </li>
                                <li>
                                    <strong>1</strong> Участник
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <ul class="plan plan3">
                                <li class="plan-name">Команда участников
                                </li>
                                <li class="plan-price">
                                    <strong>80</strong> ₽
                                </li>
                                <li>
                                    <strong>2 - 9</strong> Участников
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <ul class="plan plan2 featured">
                                <li class="plan-name">Учавствовать классом
                                </li>
                                <li class="plan-price">
                                    <strong>65</strong> ₽
                                </li>
                                <li>
                                    <strong>10-35</strong> Участников
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <ul class="plan plan4">
                                <li class="plan-name">Учавствовать параллелью
                                </li>
                                <li class="plan-price">
                                    <strong>65</strong> ₽
                                </li>
                                <li>
                                    <strong>36+</strong> Участников
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
