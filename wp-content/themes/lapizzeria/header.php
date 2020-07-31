<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="encabezado-sitio">
        <div class="contenedor">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') );?>">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="" class="logotipo">
                </a>
            </div>

            <!-- Esta es la información que muestra el menu social -->
            <div class="informacion-encabezado">
                <div class="redes-sociales">
                    <?php $args = array(
                        'theme_location' => 'social-menu',
                        'container' => 'nav',
                        'container_class' => 'menu-social',
                        'container_id' => 'menu-social',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>',          
                    ); 
                    
                    /* Esta función es la que imprime el menu de las redes sociales */
                    wp_nav_menu( $args );
                    ?>
                </div>

                <div class="direccion">
                    <p>8179 Bay Avene Mountain View, CA 94043</p>
                    <p>Teléfono: +58-414-711-8050</p>
                </div>
            </div>

        </div>
    </header>

    <!-- Creación del menu de navegación -->

    <nav class="menu-sitio">
        <div class="contenedor navegacion">
            <?php
                
                /* Estos son los argumentos que se les pasan a la función */
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'menu-sitio'
                );

                /* Esta es la función que realiza la acción */

                wp_nav_menu( $args );

            ?>
        </div>
        
    </nav>