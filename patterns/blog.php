<?php
 /**
  * Title:Blog
  * Slug: featured/blog
  * Categories: featured
  */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"50px"}}} -->
<p class="has-text-align-center" style="font-size:50px"><strong>Blog Standard</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":1324,"width":66,"height":66,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="http://localhost/eaglev/wp-content/uploads/2023/01/chevrondownoutline_110911-4.png" alt="" class="wp-image-1324" width="66" height="66"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--30);flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":28,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","style":{"typography":{"fontSize":"20px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"25px"}}} -->
<p style="font-size:25px"><strong>Search</strong></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":349,"widthUnit":"px","buttonText":"Search","buttonPosition":"no-button","style":{"typography":{"fontSize":"27px"}}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"25px"}}} -->
<p style="font-size:25px"><strong>Recent Posts</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":37,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"align":"center","style":{"border":{"width":"8px"}},"borderColor":"base"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px","padding":{"left":"8px"}}}} -->
<div class="wp-block-column" style="padding-left:8px"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"23px","fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>No page found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

