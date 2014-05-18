<?php get_header(); ?>

<div class="main--full wrapper">
    <div class="main">

        <?php get_sidebar(); ?>
        <section class="articles">
            <article>
                <div class="content--left">
                    <?php
                        while(have_posts()):
                            the_post();
                    ?>
                            <h2>
                                    <?php the_title(); ?>
                            </h2>
                    <?php the_content(); ?>

                    <p class="tel"> <?php the_field('tel'); ?></p>
                    <p class="address"> <?php the_field('address'); ?> </p>
                </div>
            <div class="map content--right"> <?php the_field('google_map'); ?> </div>
            <div class="content--right">
                <img src="<?php the_field('photos'); ?>" />
            </div>
            <?php endwhile; ?>

        </article>

        </section>



    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
