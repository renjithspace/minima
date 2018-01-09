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
