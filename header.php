<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Benefisshop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
    <!-- Favicon
============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
   <!-- google font CSS
============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- style CSS
============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Add your site or application content here -->

    <!-- header area start -->
    <div class="header-area">
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="single-drop">
                            <nav>
                                <ul>
                                    <li>
                                        <label><i class="fa fa-map-marker"></i>Or. Chisinau, str. Teatrala, 6 </label>
                                    </li>
                                    <li>
                                        <label><i class="fa fa-cog"></i><?php pll_e('Валюта'); ?>: </label><span class="currenty"><?php echo do_shortcode('[woocommerce_currency_switcher_drop_down_box]'); ?></span>
                                        
                                    </li>
                                    <li>
                                        <label><i class="fa fa-globe"></i><?php pll_e('Язык'); ?>: </label><a href="#"><span><?php echo pll_current_language('name'); ?> </span><i class="fa fa-angle-down"></i></a>
<ul><?php pll_the_languages();?></ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                            <ul class="social_list">
    <li><a target="_blank" href="https://www.pinterest.com/president2439/"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://www.linkedin.com/in/benefisshopcom/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://www.youtube.com/channel/UC4GDpzOuLCaKcn1x3xjllgA/videos"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://twitter.com/benefisshop"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://www.instagram.com/explore/locations/1030092475/benefis-ballet-costumes/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://www.facebook.com/balletcostumesbenefis/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
</ul>
                        <div class="single-menu">
                            <nav>
                                <ul>
                                    <li><a href="#"><?php pll_e('Вход'); ?></a></li>
                                    <li><a class="lastbdr" href="#"><?php pll_e('Регистрация'); ?></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo-area">
                            <a href="/"><img src="http://benefis.myihor.ru/images/template/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-9 col-xs-12">
                        <div class="block-header">
                            <div class="phone"><i class="fa fa-phone"></i>+373 (22) 213-256</div>
							<div class="phone"><i class="fa fa-phone"></i>+373 (22) 229-710</div>
                            <div class="email"><a href="mailto:benefisshop.com"><i class="fa fa-envelope-o"></i>support@<span>benefisshop.com</span></a></div>
                        </div>
                        <div class="search-categori">
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" class="form-control input-sm" maxlength="64" placeholder="<?php pll_e('Введите поисковой запрос'); ?> ...">
                                    <button type="submit"><?php pll_e('Поиск'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 hidden-sm col-xs-12">
                        <div class="shopping-cart expand">
                            <a href="cart.html"><span><?php pll_e('Корзина'); ?> (<?php echo WC()->cart->get_cart_contents_count(); ?>)</span></a>
    <!--                        <div class="restrain small-cart-content">
                                <p class="total">Сумма: <span class="amount">155 mdl</span></p>
                                <p class="buttons">
                                    <a href="" class="button">В конзину</a>
                                </p>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- main-menu start -->
                        <div class="main-menu">
                            <nav>
<!--                                 <ul>
                                    <li><a href="#">HOME</a></li>
                                    <li><a href="#">ABOUT US</a></li>
                                    <li><a href="#">CATALOGUE</a></li>
                                    <li><a href="#">HOW TO BUY</a></li>
                                    <li><a href="#">HELP</a></li>
                                    <li><a href="#">GUEST BOOK</a></li>
                                    <li><a href="#">VIDEO</a></li>
                                    <li><a href="#">CONTACTS</a></li>
                             </ul> -->
<?php
wp_nav_menu( array(
    'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                          // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
    'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
    'container_class' => '',              // (string) class контейнера (div тега)
    'container_id'    => '',              // (string) id контейнера (div тега)
    'menu_class'      => '',          // (string) class самого меню (ul тега)
    'menu_id'         => '',              // (string) id самого меню (ul тега)
    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
    'fallback_cb'     => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
    'before'          => '',              // (string) Текст перед <a> каждой ссылки
    'after'           => '',              // (string) Текст после </a> каждой ссылки
    'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
    'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
    'walker'          => new Child_Wrap(),              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
    'theme_location'  => 'topmenu'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
) );
?>
                            </nav>
                        </div>
                        <!-- main-menu end -->
                        <!-- mobile-menu-area start -->

                        <!--mobile menu area end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->
<!-- HEADER CONTENT -->
    <!-- main area start -->
    <div class="main-area">