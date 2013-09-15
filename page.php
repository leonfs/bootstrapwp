<?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php leonardofs_hero($post->ID) ?>
<article class="container post">
		<header>
    		<h2 class="offset1 span page-title"><?php the_title();?></h2>
    	</header>
	    <section class="span8">
	        <?php the_content(); ?>
	        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
	        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
	        <?php endwhile; // end of the loop. ?>
	    </section><!-- /.span8 -->

</article> <!-- /.container -->
<?php get_footer(); ?>