<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php if( is_page('contacto') ){ ?>
	    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.validate.min.js"></script>
	    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/verif.js"></script>
    <?php }?>
</head>

<body>
    <?php wp_body_open(); ?>
    <?php get_template_part('template-parts/content/content','header'); ?>

    <main class="productos">
        <div class="container-fluid gx-5">