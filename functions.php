<?php
function wp_custom_menus()
{
    register_nav_menus(
        array(
            'principal' => __('Menu principal'),
            'footer' => __('Menu du pied de page'),
        )
    );
}
add_action('init', 'wp_custom_menus');

function ajouter_span_a_la_fin_de_la_balise_a($items, $args)
{
    // Vérifie si c'est le bon menu principal
    if ($args->theme_location == 'principal') {
        // Divise les éléments de menu en un tableau en utilisant "</li>" comme délimiteur
        $menu_items = explode('</li>', $items);

        // Chaîne pour stocker les éléments de menu avec des spans
        $menu_with_spans = '';

        // Parcourir chaque élément de menu
        foreach ($menu_items as $item) {
            // Vérifier s'il y a un lien (<a>) dans l'élément de menu
            if (strpos($item, '<a') !== false) {
                // Divise l'élément de menu en deux parties : avant et après la balise "<a>"
                $split_item = explode('<a', $item, 2);
                // La première partie (avant la balise "<a>")
                $part_before_a = $split_item[0];
                // La deuxième partie (la balise "<a>" et le reste de l'élément de menu)
                $part_with_a = '<a' . $split_item[1];
                // Ajouter le span à la fin de l'intérieur de la balise "<a>"
                $part_with_a = str_replace('</a>', '<span></span></a>', $part_with_a);
                // Reconstruire l'élément de menu avec le span ajouté à la fin de la balise "<a>"
                $item_with_span = $part_before_a . $part_with_a;
                // Ajouter l'élément de menu modifié à la chaîne résultante
                $menu_with_spans .= $item_with_span . '</li>';
            } else {
                // S'il n'y a pas de lien, ajouter simplement l'élément de menu sans span
                $menu_with_spans .= $item . '</li>';
            }
        }

        // Remplacer les éléments de menu originaux par ceux avec des spans
        $items = $menu_with_spans;
    }

    return $items;
}
add_filter('wp_nav_menu', 'ajouter_span_a_la_fin_de_la_balise_a', 10, 2);
add_theme_support('menus');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
/*
array(
    'width'                => null,
    'height'               => null,
    'flex-width'           => false,
    'flex-height'          => false,
    'header-text'          => '',
    'unlink-homepage-logo' => false,
    */

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function _4w4_modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', 'populaire');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', '_4w4_modifie_requete_principal');

function customizer_favicon_section($wp_customize)
{
    // Créez une section pour le favicon
    $wp_customize->add_section(
        'favicon_section',
        array(
            'title' => __('Favicon', 'Theme Minji (indispensable)'),
            'priority' => 30,
        )
    );

    // Ajoutez un réglage pour stocker l'URL du favicon
    $wp_customize->add_setting('favicon_url');

    // Ajoutez un contrôle pour téléverser le favicon
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'favicon_url',
            array(
                'label' => __('Upload Favicon', 'Theme Minji (indispensable)'),
                'section' => 'favicon_section',
                'settings' => 'favicon_url',
            )
        )
    );
}
add_action('customize_register', 'customizer_favicon_section');

// Affichez le favicon dans la balise <head>
function display_customizer_favicon()
{
    $favicon_url = get_theme_mod('favicon_url');
    if ($favicon_url) {
        echo '<link rel="icon" href="' . esc_url($favicon_url) . '" type="image/x-icon" />';
    }
}
add_action('wp_head', 'display_customizer_favicon');
