<?php get_header(); ?>
<div id="post">
    <div class="container">
        <div class="row">
            <?php if(have_posts()): while (have_posts()): the_post(); ?>
                <article>
                    <div class="col-md-12 cent">
                    <h1><?php the_title(''); ?></h1>
                    <h4><?php echo the_time('l, F, jS, Y'); ?></h4>
                </div>
                    <?php the_content(); ?>
                    <div class="col-md-12 cent">
                    <a href='<?php comments_link(); ?>'>
                        <?php comments_number(); ?>
                    </a>
                </div>
                </article>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
