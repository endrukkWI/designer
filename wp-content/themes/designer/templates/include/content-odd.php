<?php
/**
 * Template part for displaying posts.
 *
 * @package musicmacho
 */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-post-content">
        <div class="left">
            <div class="title">
                <h3><?= get_the_title(); ?></h3>
            </div>
            <div class="excerpt">
                <?= get_the_excerpt(); ?>
            </div>
            <div class="bottom">
                <div class="w50">
                    <?= get_the_date('d F Y'); ?>
                </div>
                <div class="w50">
                    <a href="<?= get_permalink(); ?>" title="<?= get_the_title() ?>" class="btn btn-general">
                        <?= __('Read more'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="post-image">
                <?php
                $image = get_field('featured_image');
                if($image && $image != ""){
                    echo '
                        <a href="'. get_permalink() . '"  title="' . get_the_title() . '" rel="nofollow">
                            <img src="' . $image . '" alt="' . get_the_title() . '" class="post-image">
                        </a>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
</div>