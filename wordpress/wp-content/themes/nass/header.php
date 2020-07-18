<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>National Academy HSS & College</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/image/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
    <!--<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <?php wp_head(); ?>
</head>

<?php $topMenu = get_field('top_menu'); ?>

<body>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 float-left d-none d-lg-block">
                        <div class="header-left">
                            <ul>

                                <li>
                                    <a href=""><i class="fas fa-map-marker-alt"></i><?php echo $topMenu['address'];  ?></a>
                                </li>

                                <li>
                                    <a href="<?php echo "tel:" . $topMenu['phone']; ?>"><i class="fas fa-phone-alt"></i><?php echo $topMenu['phone']; ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo "mailto:" . $topMenu['email']; ?>"><i class="far fa-envelope"></i><?php echo $topMenu['email']; ?></a>
                                </li>
                            </ul>
                        </div>
                        <!--header-left ends-->
                    </div>

                    <div class="col-lg-4 float-right">
                        <div class="header-right">

                            <ul>
                                <?php if (have_rows('social_sites')) : ?>

                                    <?php while (have_rows('social_sites')) : the_row();
                                        $socialSiteLink = get_sub_field('social_site_link');
                                    ?>
                                        <?php if ($socialSiteLink) : ?>

                                            <li>
                                                <a href="<?php echo $socialSiteLink; ?>" target="_blank"><i class="
                                            <?php
                                            $str = $socialSiteLink;
                                            preg_match('/https:\/\/www.(.*?).com/', $str, $match);
                                            echo "fab fa-" . $match[1]; ?>">
                                                    </i></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>


                                <li><a href="">Career</a></li>
                                <li><a href="">Downloads</a></li>
                                <li>
                                    <a href="#search"><i class="fas fa-search"></i></a>
                                </li>
                            </ul>

                        </div>
                        <!--header-right ends-->
                        <div id="search">
                            <button type="button" class="close btn btn-danger" id="btnclose">
                                ×
                            </button>
                            <form>
                                <input type="search" value="" placeholder="type keyword(s) here" />
                                <button type="submit" class="btn btn-primary btn-lg search-button">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <!--row ends-->
            </div>
            <!--container ends-->
        </div>
        <!--top-header ends-->

        <!-- Main menu -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <?php
                    /* wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu' => 'main-menu',
                            'container' => 'ul', 
                            'menu_class'=> 'navbar-nav ml-auto'
                        )
                        );*/
                    wp_nav_menu([
                        'menu'            => 'main-menu',
                        'theme_location'  => 'main-menu',
                        'container'       => 'div',
                        'container_id'    => 'navbarSupportedContent',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav ml-auto',
                        'depth'           => 3,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'walker'          => new bs4navwalker()
                    ]);
                    ?>
                    <!--                         
                    <ul class="navbar-nav ml-auto">
                    
                        <li class="nav-item active animation">
                            <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item animation">
                            <a class="nav-link" href="#">Academics</a>
                        </li>
                        <li class="nav-item dropdown animation">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admission
                            </a>
                            <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown animation">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Facilities
                            </a>
                            <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown animation">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News & Events
                            </a>
                            <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item animation">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
        <!-- Main menu ends -->
    </header>

    <!--notice board-->

    <?php
    // Get the ID of a given category
    $category_id = get_cat_ID('Notice');

    // Get the URL of this category
    $category_link = get_category_link($category_id);
    ?>
    <div class="notice-board">
        <div class="container">
            <div class="notice">

                <a href="<?php echo esc_url($category_link); ?>">
                    <div class="notice-heading d-none d-sm-block col-lg-2 col-md-3 col-sm-4 text-center">
                        <i class="fas fa-clipboard-list fa-fw"></i>
                        <!-- Opens category.php post -->
                        Notice Board
                    </div>
                </a>


                <div class="notice-heading d-block d-sm-none">
                    <i class="fas fa-clipboard-list fa-fw"></i>
                </div>

                <div class="carouselTicker notice-details col-lg-10 col-md-9 col-sm-8">

                    <?php $catquery = new WP_Query('cat=3&posts_per_page=5'); ?>
                    <ul class="carouselTicker__list">

                        <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

                            <li class="carouselTicker__item">
                                <a href="<?php the_permalink() ?>"><?php
                                //opens single.php post
                                the_title(); // Get title
                                //continue;
                                ?></a>
                            </li>
                            <!-- 
                        <li class="carouselTicker__item">
                            <a href="#">Scholarship Scheme for Academic year 075/076</a>
                        </li>

                        <li class="carouselTicker__item">
                            <a href="#">Closing Ceremony of Persanility Development Training</a>
                        </li>
                        <li class="carouselTicker__item">
                            <a href="#">Result Published - Pre-board</a>
                        </li>
                        <li class="carouselTicker__item">
                            <a href="#">Scholarship Scheme for Academic year 075/076</a>
                        </li>
                        <li class="carouselTicker__item">
                            <a href="#">Scholarship Scheme for Academic year 075/076</a>
                        </li>
                        <li class="carouselTicker__item">
                            <a href="#">Closing Ceremony of Persanility Development Training</a>
                        </li>
                        <li class="carouselTicker__item">
                            <a href="#">Result Published - Pre-board LAst</a>
                        </li> -->
                        <?php endwhile; ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                </div>

            </div>
        </div>
    </div>
    <!--Notice Board-->