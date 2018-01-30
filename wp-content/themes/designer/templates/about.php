<?php /* Template Name: About */

get_header();
$baseUrl = get_site_url();
?>

<div id="content">

    <?php
        include('include/header.php');
    ?>

    <div id="body">
        <section class="about">
            <div class="left">
                <video width="640" height="480" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="<?= $baseUrl; ?>/wp-content/uploads/about/videos/beginning.mp4" type="video/mp4">
                </video>
                <div class="cover">
                    <img src="<?= $baseUrl; ?>/wp-content/uploads/about/covers/beginning.png" alt="stg">
                </div>
            </div>
            <div class="right">
                <div class="large-text">
                    <p class="animate">
                        It all started in 2015, when a university student had a dream
                    </p>
                </div>
                <div class="small-text">
                    <p class="animate">
                        A dream about unique and spectacular web designs, with the minimum amount of data usage and fast loading time. At that point Endre Soó started to create websites accessible on the slowest 3g connections within a glance.
                    </p>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="left">
                <div class="large-text">
                    <p class="animate">
                        It all started in 2015, when a university student had a dream
                    </p>
                </div>
                <div class="small-text">
                    <p class="animate">
                        A dream about unique and spectacular web designs, with the minimum amount of data usage and fast loading time. At that point Endre Soó started to create websites accessible on the slowest 3g connections within a glance.
                    </p>
                </div>
            </div>
            <div class="right">
                <video width="640" height="480" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="<?= $baseUrl; ?>/wp-content/uploads/about/videos/change.mp4" type="video/mp4">
                </video>
                <div class="cover">
                    <img src="<?= $baseUrl; ?>/wp-content/uploads/about/covers/change.png" alt="stg">
                </div>
            </div>
        </section>
        <section class="about">
            <div class="left">
                <video width="640" height="480" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="<?= $baseUrl; ?>/wp-content/uploads/about/videos/present.mp4" type="video/mp4">
                </video>
                <div class="cover">
                    <img src="<?= $baseUrl; ?>/wp-content/uploads/about/covers/present.png" alt="stg">
                </div>
            </div>
            <div class="right">
                <div class="large-text">
                    <p class="animate">
                        It all started in 2015, when a university student had a dream
                    </p>
                </div>
                <div class="small-text">
                    <p class="animate">
                        A dream about unique and spectacular web designs, with the minimum amount of data usage and fast loading time. At that point Endre Soó started to create websites accessible on the slowest 3g connections within a glance.
                    </p>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="left">
                <div class="large-text">
                    <p class="animate">
                        It all started in 2015, when a university student had a dream
                    </p>
                </div>
                <div class="small-text">
                    <p class="animate">
                        A dream about unique and spectacular web designs, with the minimum amount of data usage and fast loading time. At that point Endre Soó started to create websites accessible on the slowest 3g connections within a glance.
                    </p>
                </div>
            </div>
            <div class="right">
                <video width="640" height="480" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="<?= $baseUrl; ?>/wp-content/uploads/about/videos/future.mp4" type="video/mp4">
                </video>
                <div class="cover">
                    <img src="<?= $baseUrl; ?>/wp-content/uploads/about/covers/future.png" alt="stg">
                </div>
            </div>
        </section>

        <div class="line-1 animate"></div>
        <div class="line-2 animate"></div>
        <div class="line-3 animate"></div>

    </div>

</div>
<?php get_footer(); ?>