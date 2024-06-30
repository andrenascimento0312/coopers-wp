<?php

$planos_args = [
   'post_type' => 'planos',
   'numberposts' => 2,
];

$planos = get_posts($planos_args);

?>

<div class="todo-list max-w-[1440px] px-4 mx-auto flex justify-center flex-col lg:flex-row gap-8 mt-11" id="todo">
   <?php foreach ($planos as $plano) : ?>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden min-w-full lg:min-w-96 z-10">
         <div class="bg-coopers-green h-5 w-full"></div>
         <div class="p-10 text-center">
            <h2 class="text-4xl font-semibold text-black">R$ <?php echo esc_html(get_post_meta($plano->ID, 'valor-por-mes', true)); ?> / mês</h2>
            <h3 class="text-2xl text-black mt-5"><?php echo esc_html($plano->post_title); ?></h3>
            <h4 class="text-2xl font-bold text-black mb-11"><?php echo esc_html(get_post_meta($plano->ID, 'breve-descriptivo', true)); ?></h4>

            <?php get_template_part('template-parts/components/todo-item', null, ['plano_id' => $plano->ID]); ?>

            <a href="<?php echo esc_url(get_post_meta($plano->ID, 'link-botao', true)); ?>" class="mt-16 block bg-black hover:bg-coopers-green hover:transition-all text-white font-semibold text-2xl text-center py-4 w-full rounded-xl">get in touch</a>
         </div>
      </div>
   <?php endforeach; ?>

   <img class="absolute left-0 translate-y-16" src="<?php echo get_template_directory_uri() ?>/img/grafismos-lateral-esquerda.png" alt="">
</div>