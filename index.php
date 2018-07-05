<?php get_header() ?>


    <!-- BEGAN BANNER -->

    <section class="so-banner">
        <div class="row text-center">
            <div class="so-banner__wrapper column medium-8 medium-centered">
                <h1>Vad är Lorem Ipsum?</h1>
                <p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard
                    ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra
                    ett provexemplar av en bok.
                </p>
                <a href="about.html" class="button so-btn">Fine jobe</a>
            </div>
        </div>
    </section>

    <!-- AND BANNER -->

    <!-- BEGAN TOOLS -->
    <section class="so-tools">
        <div class="row">
            <div class="column small-12 medium-6 medium-centered text-center">
                <p class="so-tools__description">
                    Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard
                    ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra
                    ett provexemplar <br>av en bok.
                </p>
            </div>
        </div>
        <div class="row so-row">
            <div class="columns small-12 medium-4 so-step">
                <img src="<?php echo get_template_directory_uri()?> /dist/assets/img/kravprofil.png" alt="Kravprofil">
                <div class="so-step__content ">
                    <p>Step 1</p>
                    <h4>Kravprofil</h4>
                </div>
            </div>
            <div class="columns small-12 medium-4 so-step">
                <img src="<?php echo get_template_directory_uri()?> /dist/assets/img/kandidater.png" alt="Kandidater">
                <div class="so-step__content">
                    <p>Step 2</p>
                    <h4>Hitta <br> Kandidater</h4>
                </div>
            </div>
            <div class="columns small-12 medium-4 so-step">
                <img src="<?php echo get_template_directory_uri()?> /dist/assets/img/intervju.png" alt="Intervju">
                <div class="so-step__content">
                    <p>Step 3</p>
                    <h4>Intervju</h4>
                </div>
            </div>
        </div> <!-- and row -->
        <div class="row">
            <div class="columns small-12 medium-4 so-step">
                <img src="<?php echo get_template_directory_uri()?> /dist/assets/img/tester.png" alt="Tester">
                <div class="so-step__content">
                    <p>Step 4</p>
                    <h4>Tester och <br> analyser</h4>
                </div>
            </div>
            <div class="columns small-12 medium-4 so-step">
                <img src="<?php echo get_template_directory_uri()?> /dist/assets/img/referenser.png" alt="Referenser">
                <div class="so-step__content">
                    <p>Step 5</p>
                    <h4>Referenser</h4>
                </div>
            </div>
            <div class="columns small-12 medium-4 so-step">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/garantier.png" alt="Garantier">
                <div class="so-step__content">
                    <p>Step 6</p>
                    <h4>Garantier och <br> uppföljningr</h4>
                </div>
            </div>
        </div><!-- and row -->

    </section>
    <!-- AND TOOLS -->


    <!--BEGAN APPLY-->
    <section class="so-apply">
        <div class="row">
            <div class="column medium-6 medium-offset-3">
                <form class="so-subscribe flex-container">
                    <input class="so-subscribe__email" type="email" placeholder="Your email address">
                    <button class="button so-subscribe__button">Get new jobs</button>
                </form>
            </div>
        </div>
    </section>
    <!--AND APPLY -->

    <!-- START POST-LIST -->

    <section class="so-post-list">
        <div class="row">
            <div class="columns small-12 medium-4">
                <article class="so-post">
                    <img class="so-post__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/room.png" alt="Room">
                    <h5 class="so-post__title">Varför använder vi det</h5>
                    <div class="so-post__description">
                        Det är ett välkänt faktum att läsare distraheras av läsbar text på en sida när man skall studera
                        layouten. Poängen med Lorem Ipsum är att det ger ett normalt ordflöde, till skillnad från "Text
                        här.
                    </div>
                </article>
            </div>
            <div class="columns small-12 medium-4">
                <article class="so-post">
                    <img class="so-post__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/people.png" alt="People">
                    <h5 class="so-post__title">Varför använder vi det</h5>
                    <div class="so-post__description">
                        Det är ett välkänt faktum att läsare distraheras av läsbar text på en sida när man skall studera
                        layouten. Poängen med Lorem Ipsum är att det ger ett normalt ordflöde, till skillnad från "Text
                        här.
                    </div>
                </article>
            </div>
            <div class="columns small-12 medium-4">
                <article class="so-post">
                    <img class="so-post__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/house.png" alt="Room">
                    <h5 class="so-post__title">Varför använder vi det</h5>
                    <div class="so-post__description">
                        Det är ett välkänt faktum att läsare distraheras av läsbar text på en sida när man skall studera
                        layouten. Poängen med Lorem Ipsum är att det ger ett normalt ordflöde, till skillnad från "Text
                        här.
                    </div>
                </article>
            </div>
        </div> <!-- and row -->
    </section>

    <!-- AND POST-LIST -->

    <!-- BEGAN TEAM-->

    <section class="so-team">
        <div class="row so-slider text-center" id="slider-team">
            <div class="columns medium-4 so-slide so-member">
                <img class="so-member__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/man_rw.png" alt="Man">
                <h5 class="so-member__title">Rikard Wicksells</h5>
                <p class="so-member__description">vd Sophiahemmet</p>
            </div>
            <div class="columns medium-4 so-slide so-member">
                <img class="so-member__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/man_ps.png" alt="Man">
                <h5 class="so-member__title">Peter Seger</h5>
                <p class="so-member__description">vd Sophiahemmet</p>
            </div>
            <div class="columns medium-4 so-slide so-member">
                <img class="so-member__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/woman.png" alt="Woman">
                <h5 class="so-member__title">Rikard Wicksells</h5>
                <p class="so-member__description">vd Sophiahemmet</p>
            </div> <!-- and slide -->
            <div class="columns medium-4 so-slide so-member">
                <img class="so-member__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/man_rw.png" alt="Man">
                <h5 class="so-member__title">Rikard Wicksells</h5>
                <p class="so-member__description">vd Sophiahemmet</p>
            </div>
            <div class="columns medium-4 so-slide so-member">
                <img class="so-member__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/man_ps.png" alt="Man">
                <h5 class="so-member__title">Peter Seger</h5>
                <p class="so-member__description">vd Sophiahemmet</p>
            </div>
            <div class="columns  so-slide so-member">
                <img class="so-member__image" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/woman.png" alt="Women">
                <h5 class="so-member__title">Rikard Wicksells</h5>
                <p class="so-member__description">vd Sophiahemmet</p>
            </div> <!-- and slide -->

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

    <!-- AND TEAM -->

    <!-- BEGAN PARTNERS -->

    <div class="so-partners">
        <div class="row so-row">
            <div class="column">
                <ul class="so-partners__list">
                    <li class="so-partners__item">
                        <img src="<?php echo get_template_directory_uri()?>/dist/assets/img/logo_hospital.png" alt="hospital" class="so-partners__image">
                    </li>
                    <li class="so-partners__item">
                        <img src="<?php echo get_template_directory_uri()?>/dist/assets/img/mission.png" alt="Mission" class="so-partners__image">
                    </li>
                    <li class="so-partners__item">
                        <img src="<?php echo get_template_directory_uri()?>/dist/assets/img/apollo.png" alt="Apollo" class="so-partners__image">
                    </li>
                    <li class="so-partners__item">
                        <img src="<?php echo get_template_directory_uri()?>/dist/assets/img/sos_small.png" alt="Sos" class="so-partners__image">
                    </li>
                    <li class="so-partners__item">
                        <img src="<?php echo get_template_directory_uri()?>/dist/assets/img/chlogo.png" alt="Chlogo" class="so-partners__image">
                    </li>
                    <li class="so-partners__item">
                        <img src="<?php echo get_template_directory_uri()?>/dist/assets/img/plus.png" alt="Plus" class="so-partners__image">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- AND PARTNERS -->

    <!-- FOOTER -->


<?php get_footer() ?>
