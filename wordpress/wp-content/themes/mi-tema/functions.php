<?php
// Registro del menú de Wordpress
add_theme_support('nav-menus');
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main' => 'Main'
        )
    );
}
?>
<?php
// Main Sidebar
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'before_widget' => '<hr>',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
?>
<?php
//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 150, true);
?>
<?php
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class='pagination'>";
        if ($paged > 1) echo "<a href='" . get_pagenum_link($paged - 1) . "'>« Anterior</a>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='current'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a>";
            }
        }
        if ($paged < $pages) echo "<a href='" . get_pagenum_link($paged + 1) . "'>Siguiente »</a>";
        echo "</div>";
    }
}
?>
<?php
// Permitir comentarios encadenados
function enable_threaded_comments()
{
    if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');
?>