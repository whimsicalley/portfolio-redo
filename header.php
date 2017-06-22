<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo(); ?></title>
    <?php wp_head('name'); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <div class="container">
        <header class="row">
            <div class="eight columns" id="header-container">
                <div id="logo">
                    <a href="index.html"><img src="http://www.alleymanalio.com/work/wp-content/uploads/2017/06/logo_original.png" alt="Alley Manalio - Logo image" title="Alley Manalio - Logo Image" width="100" /></a>
                </div>
            </div>
            <div class="four columns">
                <h3>Search Bar</h3>
            </div>
        </header>
        <!-- MENU CODE BEGINS -->
        <div class="row">
            <div class="twelve columns">
            <?php
                wp_nav_menu( array (
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
              ));
            ?>
            </div>
        </div>
    <!-- MENU CODE ENDS -->
