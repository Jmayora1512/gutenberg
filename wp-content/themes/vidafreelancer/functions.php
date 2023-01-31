<?php


add_filter( 'lazyblock/informacion-curso/frontend_callback', 'vidafreelance_info_curso', 10, 2 );

// filter for Editor output.
add_filter( 'lazyblock/informacion-curso/editor_callback', 'vidafreelance_info_curso', 10, 2 );

if ( ! function_exists( 'vidafreelance_info_curso' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function vidafreelance_info_curso( $output, $attributes ) {
        ob_start();
        ?>

        <div class="informacion-curso-vf">
        <div class="contenido-curso">
            <div class="texto-curso">
            <h2><?php echo esc_html($attributes['titulo']) ?> </h2>
            <ul class="lista-aprender">
                <?php 
                    $lista = $attributes['lista_aprender'];
                    foreach($lista as $aprender){
                        //var_dump($aprender);
                        ?>
                            <li><?php echo esc_html($aprender['<<aprender>>']); ?></li>
                        <?php
                    }
                ?>
            </ul>
            <a href="<?php echo esc_attr($attributes['enlace']) ?>" target="_blank" rel = "noopener noreferrer">Tomar Curso</a>
            </div>
            <?php 
                $imagen = $attributes['imagen'];
                echo wp_get_attachment_image( $imagen['id'], 'large' );
            ?>
        </div>
        </div>        

        <?php
        return ob_get_clean();
    }
endif;

function vidafreelancer_scripts() {

    wp_register_style('normalize', 'https://necolas.github.io/normalize.css/8.0.0/normalize.css');

    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');

    wp_register_style('caveat', 'https://fonts.googleapis.com/css?family=Caveat|Lato:400,700');

    wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/css/blocks.css' );
    
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('normalize', 'fontawesome', 'caveat') );
}
add_action('wp_enqueue_scripts', 'vidafreelancer_scripts');

function vidafreelancer_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    add_image_size('destacado-blog', 768, 515, true);

    // Soporte a Gutenberg 
    add_theme_support('wp-block-styles');
    // Soporte extra para imagenes
    add_theme_support('align-wide');

// Soporte para nuevos tamaños de fuentes

// add_theme_support( 'editor-font-sizes', array(
//     array(
//         'name' => __( 'small', 'vidafreelancer' ),
//         'shortName' => __( 'S', 'vidafreelancer' ),
//         'size' => 12,
//         'slug' => 'small'
//     ),
//     array(
//         'name' => __( 'regular', 'vidafreelancer' ),
//         'shortName' => __( 'M', 'vidafreelancer' ),
//         'size' => 16,
//         'slug' => 'regular'
//     ),
//     array(
//         'name' => __( 'large', 'vidafreelancer' ),
//         'shortName' => __( 'L', 'vidafreelancer' ),
//         'size' => 36,
//         'slug' => 'large'
//     ),
//     array(
//         'name' => __( 'larger', 'vidafreelancer' ),
//         'shortName' => __( 'XL', 'vidafreelancer' ),
//         'size' => 48,
//         'slug' => 'larger'
//     ),
//     array(
//         'name' => __( 'xlarger', 'vidafreelancer' ),
//         'shortName' => __( 'XXL', 'vidafreelancer' ),
//         'size' => 70,
//         'slug' => 'xlarger'
//     )
// ) );

// // Soporte a Colores
// add_theme_support( 'editor-color-palette', array(
//     array(
//         'name'  => __( 'Azul', 'vidafreelancer' ),
//         'slug'  => 'azul',
//         'color' => '#25a5d5',
//     ),
//     array(
//         'name'  => __( 'Verde', 'vidafreelancer' ),
//         'slug'  => 'verde',
//         'color' => '#82bd58',
//     ),
//     array(
//         'name'  => __( 'Gris', 'vidafreelancer' ),
//         'slug'  => 'gris',
//         'color' => '#414141',
//     ),
//     array(
//         'name'  => __( 'Blanco', 'vidafreelancer' ),
//         'slug'  => 'blanco',
//         'color' => '#FFFFFF',
//     ),
// ) );

add_theme_support('disable-custom-colors');


}
add_action('after_setup_theme', 'vidafreelancer_setup');



// Creación de menus
function vidafreelancer_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'lapizzeria')
     ));
}
add_action('init', 'vidafreelancer_menus');


/** Widgets */

function vidafreelancer_widgets() {

	register_sidebar( array(
		'name'          => 'Widgets Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );


add_theme_support('disable-custom-colors');

}
add_action( 'widgets_init', 'vidafreelancer_widgets' );