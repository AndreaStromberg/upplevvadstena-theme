<?php get_header(); ?>
<main class="site-content">
    <article class="single">
        <?php
        $single_image = get_template_directory_uri() . '/assets/images/kyrkorOchKloster.jpg';

        if (has_post_thumbnail()) {
            $single_image = get_the_post_thumbnail_url(get_the_id());
        }
        ?>


        <header class="single__header" style="background-image: url(<?php echo $single_image; ?>)">
            <h1 class="single__title"><?php the_title(); ?></h1>


            <?php if (get_post_type() == 'evenemang') :  ?>

                <div class="single__published single__published--event"><?php the_field('startdatum') ?> <?php the_field('starttid') ?> - <?php the_field('sluttid') ?></div>

            <?php else : ?>

                <div class="single__published"> <?php the_time('j F, Y - H:i') ?></div>

            <?php endif ?>


        </header>
        <div class="gutenberg single__content">

            <?php the_content(); ?>

        </div>

    </article>

</main>



<?php get_footer(); ?>