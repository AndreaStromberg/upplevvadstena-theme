<?php

/**
 * Title: Hero
 * slug: upplevvadstena-theme/hero
 */
?>


<!-- wp:cover {"url":"http://upplev-vadstena.local/wp-content/uploads/2026/03/compressed_2-1.mp4","id":20,"dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","isDark":false,"sizeSlug":"full","metadata":{"name":"Hero"},"align":"full","className":"hero","layout":{"type":"constrained","contentSize":"915px"}} -->
<div class="wp-block-cover alignfull is-light hero" style="min-height:100vh"><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="http://upplev-vadstena.local/wp-content/uploads/2026/03/compressed_2-1.mp4" data-object-fit="cover"></video><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hero__content","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group hero__content"><!-- wp:paragraph {"align":"center","className":"hero__welcome","style":{"typography":{"fontSize":"2.63rem"},"elements":{"link":{"color":{"text":"var:preset|color|accent-light"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"accent-light"} -->
            <p class="has-text-align-center hero__welcome has-accent-light-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:2.63rem">Välkommen till Vadstena</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":1,"className":"hero__title","style":{"typography":{"textTransform":"uppercase","fontSize":"5.63rem"},"elements":{"link":{"color":{"text":"var:preset|color|accent-lightest"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"accent-lightest","fitText":true} -->
            <h1 class="wp-block-heading has-text-align-center hero__title has-fit-text has-accent-lightest-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:5.63rem;text-transform:uppercase">En liten stad med <br>stor historia</h1>
            <!-- /wp:heading -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"hero__cta","fontSize":"uv-medium"} -->
                <div class="wp-block-button hero__cta"><a class="wp-block-button__link has-uv-medium-font-size has-custom-font-size wp-element-button">Utforska sevärdheter</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"align":"full","className":"pausknapp","layout":{"type":"flex","verticalAlignment":"bottom"}} -->
        <div class="wp-block-buttons alignfull pausknapp"><!-- wp:button {"backgroundColor":"accent","textColor":"light","className":"button\u002d\u002dpaus","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"var(\u002d\u002duv-font-size-default)","textTransform":"uppercase"}},"fontFamily":"dosis"} -->
            <div class="wp-block-button button--paus"><a class="wp-block-button__link has-light-color has-accent-background-color has-text-color has-background has-link-color has-dosis-font-family has-custom-font-size wp-element-button" style="font-size:var(--uv-font-size-default);text-transform:uppercase">pausa video</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->