<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php leonardofs_hero('') ?>
<div class="container">
    <div class="row offset2 span7 content">
        <ul class="listing">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li <?php post_class(); ?>>
                        <a href="<?php the_permalink();?>", title="<?php the_title();?>">
                            <?php the_title();?>
                        </a>
                        <span class="pull-right">
                            <?php the_date(); ?>
                        </span>
                </li><!-- /.post_class -->
            <?php endwhile; endif; ?>
            <!--
            <?php bootstrapwp_content_nav('nav-below');?>-->
        </ul>
    </div>
</div>
<?php get_footer(); ?>