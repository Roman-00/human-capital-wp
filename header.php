<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo ' - '; bloginfo('description');?></title>
    <meta name="title" content="<?php bloginfo('name'); echo ' - '; bloginfo('description');?>">
    <meta name="description" content="<?php bloginfo('description');?>">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hcse.asia/">
    <meta property="og:title" content="<?php bloginfo('name'); echo ' - '; bloginfo('description');?>">
    <meta property="og:description" content="<?php bloginfo('description');?>">
    <meta property="og:image" content="<?php echo bloginfo('template_url');?>/assets/images/metatag.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://hcse.asia/">
    <meta property="twitter:title" content="<?php bloginfo('name'); echo ' - '; bloginfo('description');?>">
    <meta property="twitter:description" content="  ">
    <meta property="twitter:image" content="<?php echo bloginfo('template_url');?>/assets/images/metatag.jpg">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url');?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url');?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url');?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url');?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url');?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url');?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head();?>
</head>
<body>

<div class="top-bar" id="top-bar">
    <div class="container">
        <div class="top-bar-content">
            <div class="top-bar__menu is-mobile">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/menu.svg" alt="Top Bat Menu">
            </div>
            <!-- /.top-bar__menu -->

            <div class="social-link top-bar__social-link">
                <a href="<?php the_field('link-to-facebook', 2);?>" target="_blank" class="social-link__item">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 6V10H19C18.31 10 18 10.81 18 11.5V14H21V18H18V26H14V18H11V14H14V10C14 8.93913 14.4214 7.92172 15.1716 7.17157C15.9217 6.42143 16.9391 6 18 6H21Z" fill="#4B629E"/>
                    </svg>
                </a>
                <a href="<?php the_field('link-to-whatsapp', 2);?>" target="_blank" class="social-link__item">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.75 17.96C21 18.09 21.16 18.16 21.21 18.26C21.27 18.37 21.25 18.87 21 19.44C20.8 20 19.76 20.54 19.3 20.56C18.84 20.58 18.83 20.92 16.34 19.83C13.85 18.74 12.35 16.08 12.23 15.91C12.11 15.74 11.27 14.53 11.31 13.3C11.36 12.08 12 11.5 12.26 11.26C12.5 11 12.77 10.97 12.94 11H13.41C13.56 11 13.77 10.94 13.96 11.45L14.65 13.32C14.71 13.45 14.75 13.6 14.66 13.76L14.39 14.17L14 14.59C13.88 14.71 13.74 14.84 13.88 15.09C14 15.35 14.5 16.18 15.2 16.87C16.11 17.75 16.91 18.04 17.15 18.17C17.39 18.31 17.54 18.29 17.69 18.13L18.5 17.19C18.69 16.94 18.85 17 19.08 17.08L20.75 17.96ZM16 6C17.3132 6 18.6136 6.25866 19.8268 6.7612C21.0401 7.26375 22.1425 8.00035 23.0711 8.92893C23.9997 9.85752 24.7362 10.9599 25.2388 12.1732C25.7413 13.3864 26 14.6868 26 16C26 18.6522 24.9464 21.1957 23.0711 23.0711C21.1957 24.9464 18.6522 26 16 26C14.03 26 12.2 25.43 10.65 24.45L6 26L7.55 21.35C6.57 19.8 6 17.97 6 16C6 13.3478 7.05357 10.8043 8.92893 8.92893C10.8043 7.05357 13.3478 6 16 6ZM16 8C13.8783 8 11.8434 8.84285 10.3431 10.3431C8.84285 11.8434 8 13.8783 8 16C8 17.72 8.54 19.31 9.46 20.61L8.5 23.5L11.39 22.54C12.69 23.46 14.28 24 16 24C18.1217 24 20.1566 23.1571 21.6569 21.6569C23.1571 20.1566 24 18.1217 24 16C24 13.8783 23.1571 11.8434 21.6569 10.3431C20.1566 8.84285 18.1217 8 16 8Z" fill="#3ABA27"/>
                    </svg>
                </a>
                <a href="<?php the_field('link-to-instagram', 2);?>" target="_blank" class="social-link__item">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8 6H20.2C23.4 6 26 8.6 26 11.8V20.2C26 21.7383 25.3889 23.2135 24.3012 24.3012C23.2135 25.3889 21.7383 26 20.2 26H11.8C8.6 26 6 23.4 6 20.2V11.8C6 10.2617 6.61107 8.78649 7.69878 7.69878C8.78649 6.61107 10.2617 6 11.8 6ZM11.6 8C10.6452 8 9.72955 8.37928 9.05442 9.05442C8.37928 9.72955 8 10.6452 8 11.6V20.4C8 22.39 9.61 24 11.6 24H20.4C21.3548 24 22.2705 23.6207 22.9456 22.9456C23.6207 22.2705 24 21.3548 24 20.4V11.6C24 9.61 22.39 8 20.4 8H11.6ZM21.25 9.5C21.5815 9.5 21.8995 9.6317 22.1339 9.86612C22.3683 10.1005 22.5 10.4185 22.5 10.75C22.5 11.0815 22.3683 11.3995 22.1339 11.6339C21.8995 11.8683 21.5815 12 21.25 12C20.9185 12 20.6005 11.8683 20.3661 11.6339C20.1317 11.3995 20 11.0815 20 10.75C20 10.4185 20.1317 10.1005 20.3661 9.86612C20.6005 9.6317 20.9185 9.5 21.25 9.5ZM16 11C17.3261 11 18.5979 11.5268 19.5355 12.4645C20.4732 13.4021 21 14.6739 21 16C21 17.3261 20.4732 18.5979 19.5355 19.5355C18.5979 20.4732 17.3261 21 16 21C14.6739 21 13.4021 20.4732 12.4645 19.5355C11.5268 18.5979 11 17.3261 11 16C11 14.6739 11.5268 13.4021 12.4645 12.4645C13.4021 11.5268 14.6739 11 16 11ZM16 13C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16C13 16.7956 13.3161 17.5587 13.8787 18.1213C14.4413 18.6839 15.2044 19 16 19C16.7956 19 17.5587 18.6839 18.1213 18.1213C18.6839 17.5587 19 16.7956 19 16C19 15.2044 18.6839 14.4413 18.1213 13.8787C17.5587 13.3161 16.7956 13 16 13Z" fill="url(#paint0_linear_6_71)"/>
                        <defs>
                            <linearGradient id="paint0_linear_6_71" x1="8" y1="25" x2="24.5" y2="7.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFC400"/>
                                <stop offset="1" stop-color="#DA00AE"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <a href="<?php the_field('link-to-telegram', 2);?>" target="_blank" class="social-link__item">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.524 23.9715L12.8347 19.2168L21.3569 11.4385C21.7342 11.09 21.2792 10.9214 20.7799 11.2249L10.2603 17.9579L5.7107 16.4967C4.73421 16.2157 4.72311 15.53 5.93264 15.0354L23.6539 8.11134C24.4639 7.7404 25.2407 8.31366 24.93 9.57259L21.9117 23.9715C21.7009 24.9944 21.0906 25.2417 20.2472 24.7696L15.6532 21.33L13.445 23.4994C13.1898 23.758 12.979 23.9715 12.524 23.9715Z" fill="#479AD6"/>
                    </svg>
                </a>
            </div>
            <!-- /.social-link -->

            <div class="top-bar-language">
                <a href="https://hcse.asia/en/" class="top-bar-language__link">
                    Eng
                </a>
                /
                <a href="https://hcse.asia/" class="top-bar-language__link top-bar-language__link--active">
                    Rus
                </a>
            </div>

            <div class="top-bar-phone">
                <a href="tel:<?php the_field('top-bar__phone-one');?>" class="top-bar-phone__item">
                    <?php the_field('top-bar__phone-one', 2);?>
                </a>
                <a href="tel:<?php the_field('top-bar__phone-two');?>" class="top-bar-phone__item">
                    <?php the_field('top-bar__phone-two', 2);?>
                </a>
            </div>
            <!-- /.top-bar-phone -->

        </div>
    </div>
</div>
<!-- /#top-bar.top-bar -->

<header class="header" id="header">
    <div class="container">
        <div class="header-exhibition-content">
            <div class="logo-link header-exhibition__logo">
                <?php the_custom_logo(); ?>
            </div>
            <!-- /.logo-link header-logo__link -->

            <div class="header-exhibition-title">
                <p class="header-exhibition-title__text">
                    <?php bloginfo('description');?>
                </p>
            </div>
            <!-- /.header-title -->

            <div class="header-exhibition-date">
                <span class="header-exhibition-date__number">
                    <span class="text-color-primary">
                        <?php the_field('header_day_exhibition', 2);?>
                    </span>
                    <?php the_field('header_month_exhibition', 2);?>
                    <span class="text-color-primary">
                        <?php the_field('header_yaer_exhibition', 2);?>
                    </span>
                </span>
                <span class="header-exhibition-date__venue">
                    <?php the_field('header_venue_exhibition', 2);?>
                </span>
            </div>
            <!-- /.header-exhibition-date -->
        </div>
        <!-- /.header-content -->

        <p class="header-exhibition-title__text desctop-hidden">
            <?php bloginfo('description');?>
        </p>
        <!-- /.header-exhibition-title__text desctop-hidden -->

        <div class="header-menu">
            <?php
            wp_nav_menu( [
                'menu'            => 'Header',
                'container'       => false,
                'menu_class'      => 'nav menu-nav',
                'menu_id'         => 'header-menu-nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul id="header-menu-nav" class="nav menu-nav">%3$s</ul>',
                'depth'           => 2,
            ] );
            ?>
        </div>
        <!-- /.header-menu -->
    </div>
</header>
<!-- /#header.header -->


<menu class="mobile-menu">
    <div class="mobile-menu__block">
        <button class="mobile-menu__block-close"></button>
        <div class="mobile-menu__block-language">
            <a href="#" class="mobile-menu__block-language-link">
                Eng
            </a>
            /
            <a href="#" class="mobile-menu__block-language-link mobile-menu__block-language-link--active">
                Rus
            </a>
        </div>
        <nav class="mobile-menu-navigation">
            <?php
            wp_nav_menu( [
                'menu'            => 'Header',
                'container'       => false,
                'menu_class'      => 'mobile-menu__list',
                'menu_id'         => 'header-menu-nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul id="header-menu-nav" class="mobile-menu__list">%3$s</ul>',
                'depth'           => 2,
            ] );
            ?>
        </nav>
    </div>
    <div class="mobile-menu__overlay"></div>
</menu>