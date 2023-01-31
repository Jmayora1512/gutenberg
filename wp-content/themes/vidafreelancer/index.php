<?php get_header(); ?>

<div class="contenido-blog contenedor">
    <main id="entradas" class="entradas-blog">
        <h2>Blog sobre Freelancing</h2>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="entrada-blog">
                <div class="entry-content">
                    <?php the_post_thumbnail('destacado-blog'); ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="informacion-meta">
                        <p>Escrito el: <span> <?php the_date(); ?> </span></p>
                        <div class="post-categoria">
                            <p>Escrito en: <?php the_category(); ?></p>
                        </div>
                        <p><?php the_tags('', ', ', '<br />'); ?></p>
                    </div>
                    <?php the_excerpt(); ?>
                    <div class="enlace">
                        <a href="<?php the_permalink(); ?>" class="boton">Leer Completo</a>
                    </div>
                </div>
            </article>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>