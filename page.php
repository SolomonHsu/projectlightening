<?php get_header(); ?>

<div class="container--main">
    <div class="main">
<<<<<<< HEAD

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
=======
        <div class="main--content">
            <article>

                <?php
                    while(have_posts()):
                        the_post();
                ?>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    
                    <div class="container--article_body">
                        <section class="article_body">
                            <div class="article_body--content">
                                <?php the_content(); ?>
                            </div>
                        </section>
                    </div>

                <?php endwhile; ?>
            </article>

        </div> <!-- .main--content -->

    </div> <!-- .main -->

</div> <!-- .container--main -->

<nav class="details">
    
        <?php wp_nav_menu(); ?>
</nav>
>>>>>>> 5e88b1d2550a5610f133329d88f930aeca4a076e

<?php get_footer(); ?>
