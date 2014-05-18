<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

<div class="main--full wrapper">
    <div class="main">

        <section class="homepage articles">
            <?php
                
                while(have_posts()):
                    the_post();
            ?>
                <article>
                    <div class="content--left">
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

                        <?php the_content(); ?>
                    </div>
            <?php the_field('google_map'); ?>
                </header>

                <hr />
            </article>

            <?php
                endwhile;
            ?>

        </section>


    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
