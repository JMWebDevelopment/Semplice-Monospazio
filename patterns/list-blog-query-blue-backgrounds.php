<?php
/**
 * Title: Blog Post List Query - Blue Backgrounds.
 * Slug: jm-web-dev-fse-starter-theme/list-blog-query-blue-backgrounds
 * Categories: jm-web-dev-fse-starter-theme-list-query
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"className":"blog-query-list purple-backgrounds","layout":{"inherit":true}} -->
<div class="wp-block-group blog-query-list purple-backgrounds"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"dark-blue","textColor":"white","className":"list-blog-post"} -->
<div class="wp-block-group list-blog-post has-white-color has-dark-blue-background-color has-text-color has-background has-link-color" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"fontSize":"large"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"Read This Post","style":{"spacing":{"padding":{"top":"10px","right":"25px","bottom":"10px","left":"25px"}},"border":{"width":"1px"}},"borderColor":"black","backgroundColor":"white","textColor":"black"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
