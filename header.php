<!doctype html >
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http - equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php wp_title('|', true, 'right') ?><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Muli:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>
<header class="so-header">
    <div class="row">
        <div class="column so-nav">
            <div class="title-bar" data-responsive-toggle="primary-animated-menu" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle></button>
            </div>
            <div class="so-nav__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="140"
                         height="35"
                         viewBox="0 0 140 35">
                        <metadata>
                            <xpacket begin="﻿" id="W5M0MpCehiHzreSzNTczkc9d">
                                <x:xmpmeta xmlns:x="adobe:ns:meta/"
                                           x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01">
                                    <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                        <rdf:Description rdf:about=""/>
                                    </rdf:RDF>
                                </x:xmpmeta>
                                <xpacket end="w">
                        </metadata>
                        <image id="Logo.svg" width="140" height="35"
                               xlink:href="data:img/png;base64,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"/>
                    </svg>
                </a>

            </div>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'top-bar')); ?>
        </div>
    </div>
</header>
