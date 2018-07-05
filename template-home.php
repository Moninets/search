<?php
/* Template Name: Home Template */
?>
<?php get_header(); ?>

<main>
    <section class="so-banner" style="background-image: url(<?php the_field('banner_section_image'); ?>)">

        <div class="row text-center">
            <div class="so-banner__wrapper column medium-8 medium-centered">

                <h1><?php the_field('banner_section_title'); ?></h1>
                <p><?php the_field('banner_section_description'); ?></p>
                <a href="<?php the_field('banner_section_button_link'); ?>"
                   class="button so-btn"><?php the_field('banner_section_button_text'); ?>
                </a>

            </div>
        </div>
    </section>

    <!-- BEGAN TOOLS -->
    <section class="so-tools">
        <div class="row">
            <div class="column small-12 medium-6 medium-centered text-center">
                <div class="so-tools__description">
                    <?php the_field('tools_content'); ?>
                </div>
            </div>
        </div>
        <div class="row so-row">

            <?php if (get_field('tools_section')): ?>
                <?php while (has_sub_field('tools_section')): ?>
                    <div class="columns small-12 medium-4 so-step">
                        <img src="<?php the_sub_field('tools_section_image'); ?>" alt="xxx">
                        <div class="so-content">
                            <p class="so-content__description"><?php the_sub_field('tools_section_title'); ?></p>
                            <h4><?php the_sub_field('tools_section_description'); ?></h4>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

    </section>
    <!-- AND TOOLS -->

    <!--BEGAN APPLY-->
    <section class="so-apply" style="background-image: url(<?php the_field('apply_section_image'); ?>)">
        <div class="row">
            <div class="column medium-6 medium-offset-3">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php echo do_shortcode('[contact-form-7 id="127" title="Contact form 1" html_class="so-subscribe flex-container"]'); ?>
                <?php endwhile; endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <!--AND APPLY -->


    <section class="so-post-list">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
            );
            $posts = new WP_Query($args);
            ?>

            <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
                <div class="columns small-12 medium-4">
                    <article class="so-post">
                        <a href="<?php the_permalink(); ?>">
                            <img class="so-post__image"
                                 src="<?php echo get_the_post_thumbnail_url() ?>">
                            <h5 class="so-post__title"> <?php the_title(); ?> </h5>
                            <div class="so-post__description">
                                Det är ett välkänt faktum att läsare distraheras av läsbar text på en sida när man skall
                                studera
                                layouten. Poängen med Lorem Ipsum är att det ger ett normalt ordflöde, till skillnad
                                från
                                "Text
                                här.
                            </div>
                        </a>
                    </article>
                </div>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>

        </div> <!-- and row -->
    </section>


    <section class="so-team">
        <div class="row so-slider text-center" id="slider-team">


            <?php
            $args = array(
                'post_type' => 'post_team',
                'posts_per_page' => 4,
                'order' => 'DESC',
            );
            $team_members = new WP_Query($args);
            ?>

            <?php if ($team_members->have_posts()): while ($team_members->have_posts()) : $team_members->the_post(); ?>
                <div class="columns medium-4 so-slide so-member">
                    <img class="so-member__image"
                         src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?> ">
                    <h5 class="so-member__title"><?php the_title(); ?></h5>
                    <div class="so-member__description">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>


            <button class="button so-slider__arrow--left" type="button">
                <i class="fa fa-angle-left"></i>
            </button>
            <button class="button so-slider__arrow--right" type="button">
                <i class="fa fa-angle-right"></i>
            </button>
        </div> <!-- and slider -->
        <div class="row">
            <div class="column medium-4 medium-offset-4 so-blockquote">
                <blockquote>”Det är ett välkänt faktum att läsare distraheras <br>av läsbar text på en sida när man
                    skall
                    studera layouten.”
                </blockquote>
            </div>
        </div>
    </section>

    <!-- BEGAN PARTNERS -->

    <div class="so-partners">
        <div class="row so-row">
            <div class="column">
                <ul class="so-partners__list">
                    <?php if (get_field('partners_section')): ?>

                        <?php while (has_sub_field('partners_section')): ?>
                            <li class="so-partners__item">
                                <img src="<?php the_sub_field('partners_section_image') ?>" alt="Hospital"
                                     class="so-partners__image">
                            </li>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- AND PARTNERS -->
</main>
<?php get_footer() ?>
