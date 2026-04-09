<?php get_header(); ?>
<main class="site-content">
    <article class="page">
        <?php
        $page_image = get_template_directory_uri() . '/assets/images/kyrkorOchKloster.jpg';

        if (has_post_thumbnail()) {
            $page_image = get_the_post_thumbnail_url(get_the_id());
        }
        ?>


        <header class="page__header" style="background-image: url(<?php echo $page_image; ?>)">
            <h1 class="page__title"><?php the_title(); ?></h1>

        </header>
        <div class="gutenberg page__content">

            <?php the_content(); ?>

        </div>

    </article>

</main>



<?php get_footer(); ?>