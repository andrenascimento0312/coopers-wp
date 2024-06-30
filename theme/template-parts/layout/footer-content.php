<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coopers
 */

?>

<footer id="colophon" class="bg-black pt-20" style="clip-path: polygon(0 16%, 100% 0%, 100% 100%, 0% 100%);">
	<div class="px-4 max-w-[1140px] mx-auto flex flex-col items-center">
		<div class="text-white flex flex-col gap-4 text-center">
			<h2 class="font-semibold text-2xl"><?php echo esc_html(get_field('titulo-rodape', 'option')); ?></h2>
			<h3 class="font-semibold text-2xl"><?php echo esc_html(get_field('email-contato', 'option')); ?></h3>
			<p class="text-sm">@copyright <?php echo date('Y'); ?> Coopers. All rights reserved.</p>
		</div>
		<div class="w-[511px] h-[41px] bg-coopers-green mt-7"></div>
	</div>
</footer><!-- #colophon -->