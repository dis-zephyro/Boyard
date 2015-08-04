<!doctype html>
<html class="no-js" lang="ru" xmlns="http://www.w3.org/1999/html">

    <head>
        <?php include('includes/head.php'); ?>
    </head>

    <body>

        <div class="container">

            <!-- Header -->
            <?php include('includes/header.php'); ?>
            <!-- End of Header -->

            <!-- Topnav -->
            <?php include('includes/topnav.php'); ?>
            <!-- End of Topnav -->

            <!-- Slider-->
            <?php include('includes/slider.php'); ?>
            <!-- End of Slider -->

            <section class="main clearfix">
                <div class="left-col">
                    <!-- Sidenav-->
                    <?php include('includes/sidenav.php'); ?>
                    <!-- End of Sidenav -->
                </div>

                <div class="content">
                    <!-- Topline-->
                    <?php include('includes/topline.php'); ?>
                    <!-- End of Topline -->

                    <h1>Личный кабинет</h1>
                    <div class="profile">
                        <ul class="profile-title clearfix">
                            <li><a href="#tabs-1">Личный кабинет</a></li>
                            <li><a href="#tabs-2">История заказов</a></li>
                        </ul>
                        <div class="profile-item">
                            <div id="tabs-1">
                                <div class="profile-item-inner">
                                    <ul class="order-list">
                                        <li>
                                            <div class="order-name">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-7">
                                                        <a class="arrow-down" href="#">Заказ №123 от 2015-07-20 08:45:12</a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-2 text-right">Выполнен</div>
                                                    <div class="col-xs-3 col-sm-3 text-center">1700 руб.</div>
                                                </div>
                                            </div>
                                            <div class="order-desctiption">Мебельная ручка С500/657 - 2 шт. , Продольные рейлинги М123/466 - 1 шт.</div>
                                        </li>
                                        <li>
                                            <div class="order-name">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-7">
                                                        <a class="arrow-down" href="#">Заказ №123 от 2015-07-20 08:45:12</a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-2 text-right">Выполнен</div>
                                                    <div class="col-xs-3 col-sm-3 text-center">1700 руб.</div>
                                                </div>
                                            </div>
                                            <div class="order-desctiption">Мебельная ручка С500/657 - 2 шт. , Продольные рейлинги М123/466 - 1 шт.</div>
                                        </li>
                                        <li>
                                            <div class="order-name">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-7">
                                                        <a class="arrow-down" href="#">Заказ №123 от 2015-07-20 08:45:12</a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-2 text-right">Выполнен</div>
                                                    <div class="col-xs-3 col-sm-3 text-center">1700 руб.</div>
                                                </div>
                                            </div>
                                            <div class="order-desctiption">Мебельная ручка С500/657 - 2 шт. , Продольные рейлинги М123/466 - 1 шт.</div>
                                        </li>
                                        <li>
                                            <div class="order-name">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-7">
                                                        <a class="arrow-down" href="#">Заказ №123 от 2015-07-20 08:45:12</a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-2 text-right">Выполнен</div>
                                                    <div class="col-xs-3 col-sm-3 text-center">1700 руб.</div>
                                                </div>
                                            </div>
                                            <div class="order-desctiption">Мебельная ручка С500/657 - 2 шт. , Продольные рейлинги М123/466 - 1 шт.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="tabs-2">
                                <form>
                                    <div class="profile-item-inner">
                                        <div class="form-inner form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">ФИО<sup>*</sup></label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" placeholder="Иванов Иван Тванович">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Телефон<sup>*</sup></label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" placeholder="+79111111111">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">e-mail<sup>*</sup></label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" placeholder="ivanov@ivan.ru">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Город</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" placeholder="Челябинск">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Дата рожедения</label>
                                                <div class="col-sm-9">
                                                    <div class=" form-date-group">
                                                        <input type="text" class="form-control form-date" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Пол</label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <input id="radio1" type="radio" name="gender" value="radio1" checked>
                                                        <label for="radio1">М</label>
                                                        <input id="radio2" type="radio" name="gender" value="radio2">
                                                        <label for="radio2">Ж</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-item-inner">
                                        <div class="form-inner">
                                            <div class="form-group">
                                                <div class="form-title">Подписки:</div>
                                                <div class="checkbox">
                                                    <input id="check1" type="checkbox" name="check" value="check1">
                                                    <label for="check1">Подписка на E-mail рассылку</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-item-inner">
                                        <div class="form-inner  form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Пароль</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Подтверждение пароля</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-red btn-large">Сохранить профиль</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <a href="#top" class="btn-top">Наверх</a>
            </section>
        </div>

        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
        <!-- End of Footer -->

    </body>

</html>
