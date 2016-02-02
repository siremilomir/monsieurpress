<?php get_header(); ?>

<div class="container">

    <main id="main" class="col-10 col-push-1" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'page' );	
            comments_template();
        endwhile;
        ?>

    </main>

</div>


<?php get_footer(); ?>