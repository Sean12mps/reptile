<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <title>
            <?php global $page, $paged; ?>
            <?php wp_title( '|', true, 'right' ); ?>
            <?php bloginfo( 'name' ); ?>
            <?php $site_description = get_bloginfo( 'description', 'display' ); ?>
            <?php if ( $site_description && ( is_home() || is_front_page() ) ) : ?>
                <?php echo " | $site_description"; ?>
            <?php endif; ?>
            <?php if ( $paged >= 2 || $page >= 2 ) : ?>
                <?php echo ' | '.sprintf( __( 'Page %s' ), max( $paged, $page ) ); ?>
            <?php endif; ?>
        </title>

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php do_action( 'reptile_meta' ); ?>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
    