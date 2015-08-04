<!doctype html>
<html class="no-js" lang="ru">
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

                    <h1>Столешницы Скиф</h1>
                    <div class="product row">
                        <div class="col-sm-7">
                            <div class="product-gallery">
                                <div class="product-image">
                                    <div class="product-image-inner">
                                        <a class="product-image-link" href="images/product.jpg">
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-image-thumbs">
                                    <ul class="clearfix">
                                        <li>
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="images/product.jpg" alt="">
                                        </li>
                                    </ul>
                                    <span class="thumb-nav thumb-prev"><i class="fa fa-chevron-left"></i></span>
                                    <span class="thumb-nav thumb-next"><i class="fa fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="product-country">Страна изготовления: Австрия</div>
                            <div class="product-price-retail">Розничная цена: 2000 руб./шт.</div>
                            <div class="product-price"><span>Ваша цена:</span> 1200 руб./шт.</div>
                            <div class="showcase-buy clearfix">
                                <form class="form-buy">
                                    <input class="count" type="number" value="1">
                                    <button type="submit" class="btn btn-basket">В корзину</button>
                                </form>
                            </div>
                            <div class="product-detail">
                                <p>Матовые 3050*600*26 мм<br/>Матовые 3050*600*38 мм</p>
                                <p>Равным образом сложившаяся структура организации играет важную роль в формировании модели развития. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке систем массового участия.</p>
                            </div>
                        </div>
                    </div>
                    <h3>Задать вопрос</h3>
                    <div class="reply-form">
                        <form>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="ФИО">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="e-mail">
                                </div>
                                <div class="form-group">
                                    <div class="fileform">
                                        <div class="form-control fileformlabel" id="fileformlabel">Прикрепить файл</div>
                                        <input type="file" name="upload" class="upload" onchange="getName(this.value);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <textarea class="form-control" rows="10" placeholder="Название товара"></textarea>
                                </div>

                            </div>
                            <div class="text-center">
                                <button class="btn btn-red btn-large">Отправить</button>
                            </div>
                        </form>
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
