
        <footer class="site-footer">
            <div class="contenedor">
                <div class="contenido-footer">
                    <?php
                        $args = array(
                            'theme_location' => 'header-menu',
                            'container' => 'nav',
                            'container_class' => 'menu-footer'
                        );
                        wp_nav_menu( $args );
                    ?>
                    <div class="navegacion-contenido">  
                        <p class="copyright">Vida Freelancer - Todos los derechos reservados <?php echo date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>