<!DOCTYPE html>
<html <?php language_attributes();; ?>>

    <head>
    
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.blue-red.min.css" />
        <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <!-- site-header -->
    <header class="site-header">
        <h1 id="site-title">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <h1>
        <h5 id="site-description"><?php bloginfo('description'); ?></h5>
    </header>
    <!-- /site-header -->