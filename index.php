<?php get_header(); ?>

<div class="main--full">
    <div class="main">

        <section class="articles">
            <?php
                
                while(have_posts()):
                    the_post();
            ?>
                <article>
                <?php 
                    if ( has_post_thumbnail() ) {
                ?>
                <figure class="featured_image">
                    <?php
                        the_post_thumbnail();
                    ?>
                </figure>
                <?php 
                    }
                ?> 
                <header>
                    <h2><?php the_title(); ?></h2>

<!--                <span class="article_meta">Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link(); ?></span>
                    <span class="article_categories">Categories: <?php the_category(', '); ?></span>
-->
            <?php the_content(); ?>

                </header>

                <!--<?php the_excerpt(); ?> -->


                <hr />
            </article>

            <?php
                endwhile;
            ?>

        </section>


    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
