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

                    <h1>Моя корзина</h1>
                    <form class="backet-form">
                        <div class=" table-responsive">
                            <table class="checkout-table">
                                <tr>
                                    <th>Клд</th>
                                    <th>Фото</th>
                                    <th>Наименование</th>
                                    <th>Стоимость</th>
                                    <th>Кол-во</th>
                                    <th>Цена</th>
                                    <th>Стоимость</th>
                                    <th>Удалить</th>
                                </tr>
                                <tr>
                                    <td>122111</td>
                                    <td><img class="img-responsive" src="images/product-01.png" alt=""></td>
                                    <td>Столешницы скиф</td>
                                    <td>3500 руб.</td>
                                    <td><input class="count" type="number" value="1"></td>
                                    <td>1</td>
                                    <td>7000 руб</td>
                                    <td><button class="btn-delete"></button></td>
                                </tr>
                                <tr>
                                    <td>122111</td>
                                    <td><img class="img-responsive" src="images/product-01.png" alt=""></td>
                                    <td>Столешницы скиф</td>
                                    <td>3500 руб.</td>
                                    <td><input class="count" type="number" value="1"></td>
                                    <td>1</td>
                                    <td>7000 руб</td>
                                    <td><button class="btn-delete"></button></td>
                                </tr>
                                <tr>
                                    <td>122111</td>
                                    <td><img class="img-responsive" src="images/product-01.png" alt=""></td>
                                    <td>Столешницы скиф</td>
                                    <td>3500 руб.</td>
                                    <td><input class="count" type="number" value="1"></td>
                                    <td>1</td>
                                    <td>7000 руб</td>
                                    <td><button class="btn-delete"></button></td>
                                </tr>
                                <tr>
                                    <td>122111</td>
                                    <td><img class="img-responsive" src="images/product-01.png" alt=""></td>
                                    <td>Столешницы скиф</td>
                                    <td>3500 руб.</td>
                                    <td><input class="count" type="number" value="1"></td>
                                    <td>1</td>
                                    <td>7000 руб</td>
                                    <td><button class="btn-delete"></button></td>
                                </tr>
                            </table>
                        </div>
                        <div class="summary">Общая сумма: <strong>28000 руб.</strong></div>
                        <div class="recalculation">
                            <button class="btn btn-gray btn-large">Пересчитать</button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-red btn-large">Оформить заказ</button>
                        </div>
                    </form>

                </div>
                <a href="#top" class="btn-top">Наверх</a>
            </section>
        </div>

        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
        <!-- End of Footer -->

    </body>
</html>
