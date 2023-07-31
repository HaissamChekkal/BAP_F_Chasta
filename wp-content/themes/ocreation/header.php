<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <title><?php the_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


    <!-- Dublin Core -->
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/"/>
    <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/"/>
    <meta name="DC.language" content="fr-FR">
    <meta name="DC.coverage" content="World">
    <meta name="DC.format" content="website">
    <meta name="DC.creator" content="Bastien Malahieude, Julien Kerangoarec, Marion Tonard">
    <meta name="DC.rights" content="&copy; Bastien Malahieude,Julien Kerangoarec, Marion Tonard">


    <!--
    Site réalisé au sein de l'IIM durant une Bourse aux projets par :
    Bastien Malahieude
    Marion Tonard
    Julien Kerangoarec

   en tant que chefs de projets et :

   Baptiste Briois
   Christopher Cueille
   Haïssam Chekkal
   Léonard Pozo

   Jessica Guetta
   Marouan Es Sarhdaoui
   Solenne Cordel

   Jorik Dupont

   en tant que techniciens

    -->



    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <?php $version = filemtime( get_theme_root().'/'.get_template() . '/css/build/main.css' ); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/build/main.css?v=<?= $version; ?>">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/lib/owlcarrousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/lib/owlcarrousel/owl.transitions.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!--[if lt IE 9]>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/build/html5shiv.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/build/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(is_front_page() ? 'bg-white' : ''); ?>>

<div class="container-fluid">
    <header>
        <?php

        $args = [
            'orderby' => 'id',
            'order' => 'DESC',
            'hide_empty' => true,
        ];
        $tax_actu = get_terms('category',$args);
        $tax_creations = get_terms('type-de-creation',$args);
        ?>


        <?php if(is_front_page()){ ?>
            <?php $hideMenu = get_field('hide_menu'); ?>
            <?php if ($hideMenu !== true) {
                include __DIR__ . '/template/menu-home.php';
            }
        }else{ ?>
        <div class="row">
            <?php
            include __DIR__ . '/template/menu.php';
            } ?>
    </header>
