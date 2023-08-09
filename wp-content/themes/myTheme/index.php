<?php get_header(); ?>

<h1>Tout les articles</h1>

<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col">
                <h2> <?php the_title() ?></h2>
                <small> <?php the_author() ?></small>
                <p><?php the_excerpt() ?></p>
                <time datetime=""><?php the_date() ?> <?php the_time() ?></time>
                <details>
                    <summary>Détails</summary>
                    OUI OUI
                </details>
                <a href="<?php the_permalink() ?>">Lire la suite</a>
                <p><?php the_post_thumbnail() ?></p>
            </div>
    <?php endwhile;
    endif ?>
</div>

<?php get_footer();
