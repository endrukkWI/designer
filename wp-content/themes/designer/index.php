<?php
/**
 * The main template file.
 *
 * @package musicmacho
 */
get_header();
?>



    <div id="blog_posts" class="blog-wrap">

        <div class="container">
            <div class="portfolio">
                <div class="title animate">
                    <h1>
                        <?= __('Stories') ?>
                    </h1>
                </div>
                <div class="subtitle animate">
                    <h3>
                        <?= __('... about design, and development ...') ?>
                    </h3>
                </div>
            </div>
            <div class="line y-r-line y-1 animate"></div>
            <div class="line y-r-line y-2 animate"></div>
            <div class="line y-l-line y-3 animate"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="content-area">
                        <?php
                        if ( have_posts() ) :
                            $i = 0;
                            while ( have_posts() ) : the_post();
                                if( ($i % 2) == 0)
                                    get_template_part( 'templates/include/content-odd', get_post_format() );
                                else
                                    get_template_part( 'templates/include/content-even', get_post_format() );
                                wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                                ) );
                                $i++;
                            endwhile;
                            the_posts_pagination( array(
                                'prev_text'          => esc_html__( 'Previous page' ),
                                'next_text'          => esc_html__( 'Next page'),
                            ) );
                        endif; ?>
                    </div>
                </div>
                <?php /* get_sidebar(); */ ?>
            </div>
        </div>
    </div>
<?php get_footer();
