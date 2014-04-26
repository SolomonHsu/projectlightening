<div class="header--full">
    <header>
        <h1>
            <a href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <span class="tagline">
            <?php bloginfo('description'); ?>
        </span>
    </header>
</div> <!-- .header--full -->
<div class="nav--full">

    <nav class="site--nav">

        <?php wp_nav_menu(); ?>
    </nav>
</div> <!-- .nav--full -->