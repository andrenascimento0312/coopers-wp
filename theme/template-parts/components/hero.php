<div class="mb-[400px] mt-6 lg:mt:0 lg:mb-0 block lg:flex items-center justify-between max-w-[1440px] mx-auto">
   <div class="px-4 left flex-1 mb-16 md:mb-0">
      <h1 class="font-bold text-4xl md:text-7xl text-black">
         <?php echo esc_html(get_field('titulo-hero')) ?>
      </h1>

      <h2 class="text-2xl md:text-6xl text-coopers-green mb-4">
         <?php echo esc_html(get_field('subtitulo-hero')) ?>
      </h2>

      <h3 class="text-xl md:text-2xl mb-8 md:mb-32">
         <?php echo esc_html(get_field('descritivo-hero')) ?>
      </h3>

      <a href="#todo" class="md:text-xl bg-coopers-green text-white py-4 px-8 rounded-xl font-semibold hover:transition-all hover:bg-black">
         <?php echo esc_html(get_field('texto-botao-hero')) ?>
      </a>

   </div>

   <div class="right flex-1">
      <img class="px-4 absolute lg:relative lg:float-right z-20" src="<?php echo esc_url(get_field('imagem-hero')) ?>" alt="<?php echo esc_html(get_field('subtitulo-hero')) ?>">
      <div class="z-10  img-hero float-right lg:float-none relative lg:absolute w-[340px] lg:w-[640px] h-[430px] lg:h-[740px] lg:right-0 lg:top-0 bg-cover bg-no-repeat" style="background-image: url('<?php echo esc_url(get_field('bg-imagem-hero')); ?>')"></div>
   </div>

</div>