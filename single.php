<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php leonardofs_hero($post->ID)?>
<article class="container post">
        <header class="span3 post-title">
            <h2><?php the_title();?></h2>
            <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_tags('<div>Tags: ', ', ', '</div>'); ?>
        </header> <!--/.span3 -->
        <section role="main" class="span8">
            <?php the_content(); ?>
            
            <?php endwhile; // end of the loop. ?>
            <hr/>

            <?php bootstrapwp_content_nav('nav-below'); ?>
        </section><!-- /.span8 -->
        <secttion role="secondary" class="offset1 span10">
            <?php comments_template(); ?>
        </section>
</article><!--/.container -->
<?php get_footer(); ?>