<?php /* Template Name: Menu */ ?>
<?php get_header(); ?>

<div class="food_menu--full wrapper">
    <div class="food_menu">

        <section class="food_menu--items">
            <section class="sashimi--items">
                <h2>Sashimi</h2>
            <?php
                $args = array(
                    'post_type' => 'menu',
                    'category_name' => 'sashimi'
                );
                query_posts( $args );
                while(have_posts()):
                    the_post(); ?>

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
                        <h3><?php the_title(); ?></h3>

                    </header>

                    <p class="price">$<?php the_field('item_price'); ?></p>
                    
                    <hr class="item-divider"/>
                </article>

            <?php
                endwhile;
            ?>
            </section> <!-- .sashimi--items -->

            <section class="sushi--items">
                <h2>Sushi</h2>

                <?php
                $args = array(
                    'post_type' => 'menu',
                    'category_name' => 'sushi'
                );
                query_posts( $args );
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
                        <h3><?php the_title(); ?></h3>

                    </header>

                    <hr />
                </article>

            <?php
                endwhile;
            ?>
            </section>

        </section>


    </div>

</div> <!-- .main--full -->

<?php get_footer(); ?>
