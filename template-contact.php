<?php
/* Template Name: Contact Template */
?>
<?php get_header(); ?>

    <main>

        <section class="so-contact">
            <div class="row">
                <div class="columns medium-6">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <?php echo do_shortcode('[contact-form-7 id="166" title="Contact Form" /*html_class="so-subscribe flex-container"*/]'); ?>
                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </div>
                <div class="columns medium-6">
                    <?php
                    $location = get_field('map');
                    if (!empty($location)):
                        ?>
                        <div id="map" class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                                 data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </section>

    </main>
<?php get_footer() ?>