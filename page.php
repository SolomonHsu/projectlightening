<?php get_header(); ?>

<div class="main--full">
    <div class="main">

        <section class="articles">
            <article>

            <?php
                while(have_posts()):
                    the_post();
            ?>
                    <h2>
                            <?php the_title(); ?>
                    </h2>
            <?php the_content();

                endwhile;

            ?>
        </article>

        </section>

        <?php get_sidebar(); ?>

    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
