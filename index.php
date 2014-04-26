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
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span class="article_meta">Written on <?php the_time(); ?> at <?php the_time(); ?> by <?php the_author_posts_link(); ?></span>
                    <span class="article_categories">Categories: <?php the_category(', '); ?></span>
                </header>

                <?php the_excerpt(); ?>

                <nav>
                    <a href="<?php the_permalink(); ?>">Read more...</a>
                </nav>

                <hr />
            </article>

            <?php
                endwhile;
            ?>

        </section>

        <?php get_sidebar(); ?>

    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
