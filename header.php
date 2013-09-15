<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="author" content="Leonardo Fernandez Sanchez" />
    <meta name="description" content="Software engineering applied. Software Craftsmanship.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <header>
        <div class="container">
            <div class="row blog-name">
                <a href="<?php echo site_url() ?>">
                    Leonardo<b>FS</b>
                </a>
            </div>
           <div class="row navbar">
            <?php wp_nav_menu(
                    array(
                        'menu' => 'main-menu',
                        'container_class' => 'nav-collapse collapse',
                        'menu_class' => 'nav',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new Bootstrapwp_Walker_Nav_Menu()
                    )
                ); ?>
            </div>
        </div>
        
    </header>
    <!-- End Header. Begin Template Content -->