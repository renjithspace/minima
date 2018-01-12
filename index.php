    <?php get_header(); ?>

    <header>
        <a href="<?php bloginfo('url'); ?>" class="name"><?php bloginfo('name'); ?></a>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php static $count = 0; if($count == 1) {break;}?>
            <section>
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <div class="meta">
                    <span><?php the_time('jS F Y'); ?></span>
                    <span><?php the_category_name(get_the_ID()); ?></span>
                    <span><?php the_readtime(get_the_ID()); ?></span>
                </div>
                <div class="content">
                    <?php wp_trim_words( the_content(), 55, "" )?>
                </div>
            </section>

            <nav>
                <ul>
                    <li><?php previous_post_link( '%link', '%title', true ); ?></li>
                    <li><?php next_post_link( '%link', '%title', true ); ?></li>
                </ul>
            </nav>
        <?php $count++; ?>
    <?php endwhile; endif; ?>
    </main>

    <?php get_footer(); ?>
</body>
</html>
