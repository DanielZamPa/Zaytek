<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zaytek
 */

get_header();
?>

<main id="main" class="site-main container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">

    <?php if ( have_posts() ) : ?>

        <?php
        // Inicia el bucle de WordPress para mostrar el contenido.
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12 prose dark:prose-invert max-w-none'); ?>>
                <header class="entry-header mb-4">
                    <?php the_title( '<h1 class="entry-title text-4xl font-bold">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        // Muestra un mensaje si no se encuentra contenido.
        echo '<p>No se encontró contenido para mostrar.</p>';
    endif;
    ?>

</main><!-- #main -->

<?php
get_footer();