<?php $posts = get_posts(); ?>

<div class="max-w-[1440px] mx-auto mt-24 px-4">
    <div class="max-w-5xl mx-auto bg-coopers-green px-3 py-6 lg:pl-20 lg:pt-20 min-h-[520px] rounded-md">
        <h2 class="text-white font-bold text-5xl"><?php echo esc_html(wp_strip_all_tags(get_field('titulo-blog-secao'))); ?></h2>
    </div>

    <div class="postsSwiper max-w-5xl p-2 mt-[-430px] lg:mt-[-350px] relative lg:right-[85px]">
        <div class="swiper-wrapper flex lg:justify-normal lg:flex-row">
            <?php foreach ($posts as $post) : ?>
                <?php get_template_part('template-parts/components/posts-card', 'post-card', ['id' => $post->ID, 'post_title' => $post->post_title]); ?>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</div>