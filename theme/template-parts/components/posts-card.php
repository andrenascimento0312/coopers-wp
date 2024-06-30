<?php

/**
 * Template part para exibir itens do post.
 *
 * @param array $args {
 *     Parameters passed to the template part.
 *
 *     @type int $id The ID of the post.
 *     @type string $post_title The title of the post.
 * }
 */

$id = $args['id'];
$post_title = $args['post_title'];

// Limita o título a 13 palavras
$limited_title = limit_words($post_title, 13);

$categories = get_the_category($id);

// print_r($categories);

?>

<div class="card shadow-lg rounded-xl bg-white min-w-full lg:min-w-[360px] swiper-slide mb-14">
    <img class="w-full max-h-[200px] object-cover rounded-t-xl" src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'full')) ?>" alt="<?php echo esc_attr($post_title) ?>" srcset="">
    <div class="p-6 flex flex-col justify-between min-h-[230px]">
        <div class="top">
            <div class="flex gap-2 flex-wrap mb-4">
                <?php
                // Iterar sobre as categorias e exibi-las
                foreach ($categories as $category):
                    if ($category->term_id && $category->name) :?>
                        <span class="text-[#9499B3] border border-[#9499B3] py-1 px-3 rounded-full"><?php echo esc_html($category->name) ?></span>
                    <?php endif;
                endforeach;
                ?>
            </div>
            <h2 class="text-black text-lg font-normal"><?php echo esc_html($limited_title); ?></h2>
        </div>
        <div class="down">
            <a class="text-coopers-green hover:text-black hover:transition-all font-bold" aria-label="Read more about <?php echo $post_title ?>" href="<?php echo get_the_permalink($id) ?>">read more</a>
        </div>
    </div>
</div>