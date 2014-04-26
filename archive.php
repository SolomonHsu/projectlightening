<?php get_header(); ?>

<div class="main--full">
    <div class="main">

        <section class="articles">
            <?php if (is_category()) { ?>
                <h1 class="title">Category: <?php single_cat_title(); ?></h1>

            <?php }

            else if( is_tag() ) { ?>

                <h1 class="title">Tag: <?php single_tag_title(); ?></h1>

            <?php } 
            else if (is_author()) {

                $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
            ?>

                <h1 class="title">Articles Written By: <?php echo($curauth->display_name); ?></h1>

            <?php } ?>

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
                    <span class="article_meta">Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link() ?></span>
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
