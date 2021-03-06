<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 04.04.18
 * Time: 18:19
 */

$query = new WP_Query([
    'post_type' => 'any',
    'posts_per_page' => -1,
]);
get_header();

while ($query->have_posts()) {
    $query->the_post();

    echo '<div>';
    printf('<a href="%s"><h1>%s</h1></a>', get_the_permalink(), get_the_title());
    the_content();
    echo '</div>';
}

get_footer();
