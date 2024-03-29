<?php
/**
 * Title: Featured Two Columns - Yellow Background.
 * Slug: jm-web-dev-fse-starter-theme/two-columns-featured-yellow-background
 * Categories: jm-web-dev-fse-starter-theme-columns
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","right":"15px","bottom":"3rem","left":"15px"}}},"backgroundColor":"dark-yellow","textColor":"black","className":"two-columns-featured yellow-background","layout":{"inherit":true}} -->
<div class="wp-block-group two-columns-featured yellow-background has-black-color has-dark-yellow-background-color has-text-color has-background" style="padding-top:3rem;padding-right:15px;padding-bottom:3rem;padding-left:15px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2>Column Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"black"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-background-color has-background">Button Text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2031,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mansfield-railroad.jpg" alt="" class="wp-image-2031"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
