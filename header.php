<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Bienvenidos a mi web</title>
</head>
<body <?php body_class( )?>>

    <div class="cabecera">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url( "/") ?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
                wp_nav_menu( 
                    array(
                        'theme_location' => 'infobasic_main_menu'
                    )
                 )
            ?>
        </div>
        </nav>
    
    </div>