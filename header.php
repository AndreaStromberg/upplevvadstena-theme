<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <header class="site-header">
            <div class="site-header__inner">
                <!-- Branding -->
                <a href="<?php echo home_url('/'); ?>" class="site-header__branding">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.svg" alt="Upplev Vadstena Logotyp">
                </a>



                <!-- Menu -->
                <?php
                $args = array(
                    'theme-location' => 'main_menu',
                    'containter' => 'nav',
                    'container_class' => 'site-menu'
                );

                wp_nav_menu($args);
                ?>


                <!-- Buttons -->
                <div class="top-buttons">
                    <ul class="top-buttons__list">
                        <li class="top-buttons__item">
                            <button class="button">
                                <span class="button__text">Sök</span>
                                <figure class="button__icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99903 3.3684e-08C7.5614 0.000155699 6.14473 0.344701 4.86761 1.00479C3.59049 1.66489 2.49007 2.62132 1.65849 3.79402C0.826908 4.96672 0.288354 6.32158 0.0879101 7.74516C-0.112533 9.16874 0.0309677 10.6196 0.5064 11.9764C0.981833 13.3331 1.77536 14.5562 2.82056 15.5433C3.86576 16.5304 5.13221 17.2527 6.5139 17.6498C7.89558 18.0469 9.3523 18.1073 10.7621 17.8258C12.1719 17.5443 13.4938 16.9292 14.617 16.032L18.292 19.707C18.4806 19.8892 18.7332 19.99 18.9954 19.9877C19.2576 19.9854 19.5084 19.8802 19.6938 19.6948C19.8793 19.5094 19.9844 19.2586 19.9867 18.9964C19.989 18.7342 19.8882 18.4816 19.706 18.293L16.031 14.618C17.089 13.2939 17.7516 11.6979 17.9425 10.0138C18.1334 8.32966 17.8449 6.62586 17.1102 5.0985C16.3754 3.57113 15.2243 2.28228 13.7894 1.38029C12.3544 0.478308 10.6939 -0.000146577 8.99903 3.3684e-08ZM2.99903 9C2.99903 8.21207 3.15422 7.43185 3.45575 6.7039C3.75728 5.97595 4.19923 5.31451 4.75639 4.75736C5.31354 4.20021 5.97497 3.75825 6.70293 3.45672C7.43088 3.15519 8.2111 3 8.99903 3C9.78696 3 10.5672 3.15519 11.2951 3.45672C12.0231 3.75825 12.6845 4.20021 13.2417 4.75736C13.7988 5.31451 14.2408 5.97595 14.5423 6.7039C14.8438 7.43185 14.999 8.21207 14.999 9C14.999 10.5913 14.3669 12.1174 13.2417 13.2426C12.1164 14.3679 10.5903 15 8.99903 15C7.40773 15 5.8816 14.3679 4.75639 13.2426C3.63117 12.1174 2.99903 10.5913 2.99903 9Z" fill="currentColor" />
                                    </svg>
                                </figure>


                            </button>

                        </li>

                        <li class="top-buttons__item language-button">
                            <button class="button ">
                                <span class="button__text">Language</span>
                                <span class="button__text button__text--responsive">Lang.</span>
                                <figure class="button__icon button__icon--chevron">
                                    <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1.00001L14 13L27 1.00001" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel" />
                                    </svg>
                                </figure>


                            </button>

                        </li>

                        <li class="top-buttons__item top-buttons__item--hidden">
                            <button id="menu-button" class="button">
                                <figure class="button__icon">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.9722 9.76318C17.524 9.74754 17.9845 10.1821 18.0005 10.7339C18.0163 11.2859 17.5809 11.7464 17.0288 11.7622L8.72119 12.0005H8.66162L0.969236 11.7622C0.417393 11.745 -0.0165649 11.2838 0.000485759 10.7319C0.0175446 10.1799 0.479717 9.74613 1.03174 9.76318L8.69482 9.99951L16.9722 9.76318ZM16.9722 4.88232C17.5241 4.86668 17.9847 5.30107 18.0005 5.85302C18.0163 6.40508 17.5809 6.86555 17.0288 6.88135L8.72119 7.11865H8.66162L0.969236 6.88135C0.41749 6.8641 -0.0163954 6.40284 0.000485759 5.85107C0.0175404 5.29905 0.479714 4.86527 1.03174 4.88232L8.69482 5.11865L16.9722 4.88232ZM16.9722 0.000485759C17.5241 -0.0151483 17.9847 0.420202 18.0005 0.972165C18.0161 1.5241 17.5808 1.9847 17.0288 2.00049L8.72119 2.23779H8.66162L0.969236 2.00049C0.417383 1.98324 -0.0165652 1.52114 0.000485759 0.969236C0.0177269 0.417383 0.479833 -0.0165652 1.03174 0.000485759L8.69482 0.238767L16.9722 0.000485759Z" fill="currentColor" />
                                    </svg>
                                </figure>


                            </button>

                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <nav class="responsive-menu">



            <div class="responsive-menu__inner">
                <!-- Kryssknapp för att stänga menyn -->
                <button class="close-menu">
                    <span>X</span>
                </button>

                <?php
                $args = array(
                    'theme_location' => 'main_menu',
                    'container' => 'ul'
                );

                wp_nav_menu($args);
                ?>

                <!-- <ul class="responsive-menu__buttons">
                    <li class="responsive-menu__item responsive-menu__item--language">
                        <button class="button ">
                            <span class="button__text">Language</span>
                            <span class="button__text button__text--responsive">Lang.</span>
                            <figure class="button__icon button__icon--chevron">
                                <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1.00001L14 13L27 1.00001" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel" />
                                </svg>
                            </figure>


                        </button>

                    </li>
                </ul> -->
            </div>


        </nav>