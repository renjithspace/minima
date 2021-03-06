<?php get_header(); ?>

<header>
    <a href="<?php bloginfo('url'); ?>" class="name"><?php bloginfo('name'); ?></a>
    <p><?php bloginfo('description'); ?></p>
</header>

<main>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <div class="content">
            <p><?php the_short_content(get_the_ID()); ?></p>
        </div>
    </article>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
