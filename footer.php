<!-- FOOTER -->

<div class="so-footer">
    <div class="row">
        <div class="columns so-logo small-12 medium-6 large-2">
            <a href="#">
                <img src="<?php the_field('logo', 'options'); ?>" alt="Logo">
            </a>
        </div>
        <div class="columns small-12 medium-6 large-4">
            <div class="so-footer__description">
                <?php the_field('description', 'options'); ?>
            </div>
        </div>
        <div class="columns small-12 medium-6 large-2 large-offset-1">
            <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'so-navigation')); ?>
        </div>
        <div class="columns small-12 medium-6 large-3">
            <div class="so-contact">
                <ul class="so-contact__list">
                    <li class="so-contact__item"><?php the_field('contact_title', 'options'); ?></li>
                    <li class="so-contact__item"><?php the_field('contact_text', 'options'); ?></li>
                    <li class="so-contact__item">
                        <a href="<?php the_field('phone_intr', 'options'); ?>" class="so-contact__link">
                            <?php the_field('phone_number', 'options'); ?>
                        </a>
                    </li>
                    <li class="so-contact__item">
                        <a href="https://www.info@search4s.com"
                           class="so-contact__link"><?php the_field('email_text', 'options'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="so-socials">

                <?php if (have_rows('social_menu', 'options')): ?>
                    <ul class="so-socials__list">
                        <?php while (have_rows('social_menu', 'options')) : the_row(); ?>
                            <li class="so-socials__item">
                                <a href="<?php the_sub_field('social_link'); ?>" class="so-socials__link">
                                    <?php the_sub_field('social_text'); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer() ?>
<a href="#" class="so-scroll">
    <i class="fas fa-long-arrow-alt-up so-scroll__arrow"></i>
</a>


</body>
</html>