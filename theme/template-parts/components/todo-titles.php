<!--poderia usar isso: clip-path: polygon(0 22%, 100% 0, 100% 71%, 0% 100%); -->
<!-- style="background-image: url(<?php //echo get_template_directory_uri()?>/img/bg-todo.png)" -->
<div class="bg-strange px-4 py-24 lg:py-28 mt-[130px] z-0 bg-black" style="clip-path: polygon(0 25%, 100% 0, 100% 75%, 0% 100%);">
    <div class="max-w-[600px] mx-auto text-center">
        <h2 class="max-w-max mx-auto text-xl lg:text-6xl font-semibold text-white border-b-4 border-coopers-green"><?php echo get_field('titulo-cta'); ?></h2>
        <p class="mt-8 text-white mx-auto lg:text-2xl"><?php echo get_field('descritivo-cta'); ?>
    </div>
</div>