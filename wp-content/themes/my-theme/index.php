<?php   get_header();?>
    <div class="container">

    <div class="site-content clearfix">
        <!--main column-->
        <div class="main-column">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                    <?php get_template_part( 'content' ); ?>

                <?php endwhile;
            else:
                echo '<p>No content found</p>';
            endif;?>
        </div>

        <!--main column-->

        <?php get_sidebar(); ?>
        </div>

<?php get_footer(); ?>