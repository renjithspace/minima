<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if (is_home()): ?>
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php else: ?>
        <title><?php the_title(); ?></title>
    <?php endif; ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
</head>
<body <?php body_class(); ?>>
