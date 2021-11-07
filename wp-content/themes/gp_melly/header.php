<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="">
            <ul class="m-gn_header">
                <li class="logo"><h1><a href="<?php echo get_home_url() ?>">Merrily Thorp</a></h1></li>
                <li class="m-gn_hamburger">
                    <div class="m-gn_hamburger_btn"></div>
                </li>
            </ul>
            <?php
            
            wp_nav_menu(
                [
                    'container_class'   => 'm-gn_hamburger_container',
                    'menu_class'        => 'm-gn_hamburger_list',
                    'theme_location'    => 'hamburger',
                    'depth'             => '2',
                    'li_class'          => 'm-gn_hamburger_list_item',
                ]
            );
            
            ?>
        </nav>
    </header>
    <main>