<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coopers
 */

?>

<header id="masthead" class="max-w-[1440px] mx-auto pt-4 px-4">

	<img class="max-w-44 lg:w-full" src="<?php echo esc_html(get_field('logo', 'option')); ?>" alt="<?php echo esc_html(get_field('titulo-hero')) . ' - ' . esc_html(get_field('subtitulo-hero')) ?>"/>
	
</header><!-- #masthead -->
