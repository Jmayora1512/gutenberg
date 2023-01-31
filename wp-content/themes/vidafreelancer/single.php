<?php get_header(); ?>

<div class="contenido-blog contenedor">
    <main id="entradas" class="entradas-blog">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="entrada-blog">
            
                <div class="entry-content">
                    <?php the_post_thumbnail(); ?>

                    <h3><?php the_title(); ?></h3>

                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b956ada55785ecd"></script>

                    <div class="informacion-meta">
                        <p>Escrito el: <span> <?php the_date(); ?> </span></p>
                        <div class="post-categoria">
                            <p>Escrito en: <?php the_category(); ?></p>
                        </div>
                        <p><?php the_tags('', ', ', '<br />'); ?></p>
                    </div>
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else: ?>
            <h1>hola</h1>

        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>