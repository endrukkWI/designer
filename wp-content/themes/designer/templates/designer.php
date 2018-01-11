<?php /* Template Name: Designer Template */

get_header();
?>

<div id="content">
    <div class="container">
        <div class="portfolio">
            <div class="title animate">
                <h1>
                    <?= get_field('title') ?>
                </h1>
            </div>
            <div class="subtitle animate">
                <h3>
                    <?= get_field('subtitle') ?>
                </h3>
            </div>
        </div>
        <div class="line y-r-line y-1 animate"></div>
        <div class="line y-r-line y-2 animate"></div>
        <div class="line y-l-line y-3 animate"></div>


        <div class="port-container animate">
            <section class="port-slider">
                <div>
                    <img src="http://placehold.it/350x300?text=1">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=2">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=3">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=4">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=5">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=6">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=7">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=8">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=9">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=10">
                </div>
            </section>
        </div>


    </div>
</div>
<?php get_footer(); ?>