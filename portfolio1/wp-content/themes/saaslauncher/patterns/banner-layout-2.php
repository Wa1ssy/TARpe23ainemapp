<?php

/**
 * Title: Hero and Banner style 2
 * Slug: saaslauncher/banner-layout-2
 * Categories: saaslauncher
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/launcher-dash.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/header-large-with-banner","name":"Header Large with Banner"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"60px"}}},"gradient":"gradient-eight","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-gradient-eight-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"className":"saaslauncher-header","style":{"spacing":{"padding":{"top":"22px","right":"var:preset|spacing|40","bottom":"22px","left":"var:preset|spacing|40"},"margin":{"bottom":"40px"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group saaslauncher-header" style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:40px;padding-top:22px;padding-right:var(--wp--preset--spacing--40);padding-bottom:22px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px","fontSize":"28px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:navigation {"ref":4450,"textColor":"light-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","className":"saaslauncher-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"normal","layout":{"type":"flex","justifyContent":"center"}} /-->

            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover"} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"18px"}}} -->
                <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php esc_html_e('Get Started', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"dimRatio":0,"minHeight":580,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-cover is-light" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"right","contentSize":"590px"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"24px","right":"24px"}},"border":{"radius":"60px","top":{"radius":"60px","width":"2px"},"right":{"radius":"60px","width":"2px"},"bottom":{"radius":"60px","width":"0px","style":"none"},"left":{"radius":"60px","width":"2px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-radius:60px;border-top-width:2px;border-right-width:2px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px;padding-top:8px;padding-right:24px;padding-bottom:8px;padding-left:24px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Welcome to SaasLauncher', 'saaslauncher') ?></h5>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"className":"saaslauncher-big-title","style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"48px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <h1 class="wp-block-heading has-text-align-left saaslauncher-big-title has-light-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:800;line-height:1.2"><?php esc_html_e('Redefine Socializing', 'saaslauncher') ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('The Ultimate', 'saaslauncher') ?></mark> <?php esc_html_e('Experience', 'saaslauncher') ?></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:40px"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Start Free Trial', 'saaslauncher') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="margin-top:0px"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"border":{"radius":"30px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:30px"><!-- wp:image {"id":8983,"sizeSlug":"large","linkDestination":"none","align":"full","className":"is-style-saaslauncher-image-hover-zoom"} -->
                            <figure class="wp-block-image alignfull size-large is-style-saaslauncher-image-hover-zoom"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-8983" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->