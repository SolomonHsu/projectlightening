<?php get_header(); ?>

<div class="main--full">
    <div class="main">

        <section class="articles">

        <?php
            
            while(have_posts()):
                the_post();
        ?>
                    <header>
                        <h2><?php the_title(); ?></h2>
<!--                    <span class="article_meta">Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link() ?></span>
                        <span class="article_categories">Categories: <?php the_category(', '); ?></span>
                    </header>
                    <p>
                        Written by: <?php the_author_posts_link(); ?> 
                    </p>
-->                    
                    <?php the_content(); ?>

                    </article>     

            <?php
                endwhile;
            ?>

        </section>


        <?php get_sidebar(); ?>

    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>














