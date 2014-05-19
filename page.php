<?php get_header(); ?>

<div class="container--main">
    <div class="main">
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

<?php get_footer(); ?>
