<?php get_header(); ?>

<div class="main--full">
    <div class="main">

        <?php get_sidebar(); ?>
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



    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
