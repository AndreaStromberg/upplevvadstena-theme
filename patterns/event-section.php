<?php

/**
 * Title: Event Section
 * slug: upplevvadstena-theme/event-section
 */
?>


<!-- wp:group {"tagName":"section","metadata":{"name":"Evenemangssektion"},"align":"full","className":"evenemang","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"blockGap":"0"}},"backgroundColor":"accent-lighter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull evenemang has-accent-lighter-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)"><!-- wp:group {"metadata":{"name":"Evenemang - Header"},"className":"evenemang__header","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group evenemang__header" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","className":"evenemang__miniheading","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent","fontSize":"uv-large","fontFamily":"dosis"} -->
        <h2 class="wp-block-heading has-text-align-center evenemang__miniheading has-accent-color has-text-color has-link-color has-dosis-font-family has-uv-large-font-size" style="font-style:normal;font-weight:600">Evenemang</h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","className":"evenemang__heading","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","fontSize":"uv-3xl","fontFamily":"open-sans"} -->
        <h2 class="wp-block-heading has-text-align-center evenemang__heading has-dark-color has-text-color has-link-color has-open-sans-font-family has-uv-3-xl-font-size" style="text-transform:uppercase">På gång i staden</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"evenemang__ingress","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
        <p class="has-text-align-center evenemang__ingress has-dark-color has-text-color has-link-color">Tider för löpande verksamheter (museer och utställningar) samt sammanfattande program för föreläsningar, guidade turer, konserter och teater mm hittar du under flikarna (genvägarna) ovan och i huvudmenyn.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Evenemang - kort och knapp"},"align":"full","className":"event__feed","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|90","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group alignfull event__feed" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":5,"query":{"perPage":3,"pages":0,"offset":0,"postType":"evenemang","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:post-featured-image {"isLink":true} /-->

            <!-- wp:group {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);text-transform:uppercase"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":91,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="http://upplev-vadstena.local/wp-content/uploads/2026/03/icon-calendar.svg" alt="" class="wp-image-91" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"startdatum"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":92,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="http://upplev-vadstena.local/wp-content/uploads/2026/03/klockikon.svg" alt="" class="wp-image-92" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"starttid"} /-->

                        <!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"sluttid","hideEmpty":true,"prefix":"-","displayLayout":"inline-block"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"typography":{"textTransform":"uppercase"}},"textColor":"dark","fontSize":"uv-medium"} /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->

        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:button {"fontSize":"uv-medium"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-uv-medium-font-size has-custom-font-size wp-element-button">Se alla evenemang</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->