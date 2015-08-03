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

                    <h1>Оформление заказа</h1>
                    <div class="checkout">
                        <table class="checkout-table">
                            <tr>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Кол-во</th>
                                <th>Стоимость</th>
                            </tr>
                            <tr>
                                <td>Столешницы скиф</td>
                                <td>3500 руб.</td>
                                <td>2</td>
                                <td>7000 руб.</td>
                            </tr>
                            <tr>
                                <td>Столешницы скиф</td>
                                <td>3500 руб.</td>
                                <td>2</td>
                                <td>7000 руб.</td>
                            </tr>
                            <tr>
                                <td>Столешницы скиф</td>
                                <td>3500 руб.</td>
                                <td>2</td>
                                <td>7000 руб.</td>
                            </tr>
                            <tr>
                                <td>Столешницы скиф</td>
                                <td>3500 руб.</td>
                                <td>2</td>
                                <td>7000 руб.</td>
                            </tr>
                        </table>
                        <div class="summary">Общая сумма: <strong>28000 руб.</strong></div>

                        <div class="checkout-auth">
                            <form  class="checkout-form">
                                <div class="form-group">
                                    <div class="fileform">
                                        <div class="btn btn-gray">Прикрепить файл</div>
                                        <div class="fileformlabel" id="fileformlabel">
                                            Файл не выбран<br>
                                        </div>
                                        <input type="file" name="upload" class="upload" onchange="getName(this.value);">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="textarea-control" rows="5"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-red btn-large">Подтвердить заказ</button>
                                </div>
                            </form>
                        </div>

                        <div class="checkout-unnamed">
                            <div class="form-title">Информация для заказа</div>
                            <form class="checkout-form">
                                <div class="form-auth  clearfix form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">ФИО<sup>*</sup></label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="Иванов Иван Тванович">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Телефон<sup>*</sup></label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="+79111111111">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">e-mail<sup>*</sup></label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="ivanov@ivan.ru">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Город</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="Челябинск">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fileform">
                                        <div class="btn btn-gray">Прикрепить файл</div>
                                        <div class="fileformlabel" id="fileformlabel">
                                            Файл не выбран<br>
                                        </div>
                                        <input type="file" name="upload" class="upload" onchange="getName(this.value);">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="textarea-control" rows="5"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-red btn-large">Подтвердить заказ</button>
                                </div>
                            </form>
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
