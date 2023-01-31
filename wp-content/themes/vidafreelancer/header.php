<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="encabezado-interior">
    <div class="contenedor">
        <div class="contenido-header">
            <a href="<?php echo home_url('/'); ?>">
                <h1 class="nombre-sitio">VidaFreelancer para <span>Diseñadores Web</span></h1>
            </a>
       
            <div class="navegaciones">
                <?php
                    $args = array(
                        'theme_location' => 'header-menu',
                        'container' => 'nav',
                        'container_class' => 'menu-header'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
        </div>
        
    </div>
    
</header>