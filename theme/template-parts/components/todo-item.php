<?php

/**
 * Template part para exibir items do card.
 *
 * @param array $args {
 *     Parameters passed to the template part.
 *
 *     @type int $plano_id The ID of the plan post.
 * }
 */

$plano_id = $args['plano_id'];


if (have_rows('itens-do-plano', $plano_id)) : ?>
    <ul class="mt-4 flex flex-col gap-5">
        <?php while (have_rows('itens-do-plano', $plano_id)) : the_row();
            $contem_no_plano = get_sub_field('contem-no-plano');
            $item_titulo = get_sub_field('item-titulo');

            $caminho_imagem = $contem_no_plano ? 'check.webp' : 'uncheck.webp';
        ?>
            <li class="flex items-center mt-2">
                <img src="<?php echo get_template_directory_uri() . '/img/' . $caminho_imagem ?>" width="24" height="24" alt="Escolha <?php echo $item_titulo?>" srcset="">
                <span class="ml-2"><?php echo esc_html($item_titulo); ?></span>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>