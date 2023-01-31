<?php get_header(); ?>

<div class="contenido-blog contenedor">
    <main id="entradas" class="entradas-blog">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="entrada-blog">
                <div class="entry-content">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>