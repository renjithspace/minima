<?php

// Reading time calculate
function the_readtime($postID) {
    $content = get_post_field( 'post_content', $postID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
        $timer = " minute";
    } else {
        $timer = " minutes";
    }
    $totalreadingtime = $readingtime . $timer;

    echo $totalreadingtime;
}

// First category name
function the_category_name($postID) {
    $category = get_the_category($postID);
    echo $category[0]->cat_name;
}

// Description
function the_description($postID) {
    $content = get_post_field( 'post_content', $postID );
    $description = substr( strip_tags($content), 0, 320);
    echo $description;
}
