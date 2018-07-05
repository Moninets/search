<?php
/* Template Name: Team Template */
get_header();
?>

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
        <?php endwhile; endif; ?>


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


<?php get_footer() ?>
