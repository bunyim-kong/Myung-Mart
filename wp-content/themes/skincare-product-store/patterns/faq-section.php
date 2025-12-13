<?php
/**
 * FAQ Section
 * 
 * slug: skincare-product-store/faq-section
 * title: FAQ Section
 * categories: skincare-product-store
 */

    return array(
        'title'      =>__( 'FAQ Section', 'skincare-product-store' ),
        'categories' => array( 'skincare-product-store' ),
        'content'    => '<!-- wp:group {"className":"faq-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"thirdaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
      <div class="wp-block-group faq-section has-thirdaccent-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
      <div class="wp-block-columns"><!-- wp:column {"className":"faq-left wow bounceInUp center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
      <div class="wp-block-column faq-left wow bounceInUp center"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium"} -->
      <p class="has-tertiary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Frequently Asked Questions','skincare-product-store').'</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontFamily":"rubik"} -->
      <h2 class="wp-block-heading has-tertiary-color has-text-color has-link-color has-rubik-font-family" style="font-size:26px;font-style:normal;font-weight:800">'. esc_html__('Have Any Questions For Us?','skincare-product-store').'</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"extra-small","fontFamily":"rubik"} -->
      <p class="short-para-text has-tertiary-color has-text-color has-link-color has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:300;line-height:1.7">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','skincare-product-store').'</p>
      <!-- /wp:paragraph -->

      <!-- wp:image {"id":6,"sizeSlug":"full","linkDestination":"none"} -->
      <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/FAQ.png" alt="" class="wp-image-6"/></figure>
      <!-- /wp:image --></div>
      <!-- /wp:column -->

      <!-- wp:column {"className":"faq-right wow bounceInDown center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
      <div class="wp-block-column faq-right wow bounceInDown center"><!-- wp:details {"showContent":true,"className":"faq-list"} -->
      <details class="wp-block-details faq-list" open><summary>'. esc_html__('What services does your agency offer?','skincare-product-store').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
      <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','skincare-product-store').'</p>
      <!-- /wp:paragraph --></details>
      <!-- /wp:details -->

      <!-- wp:details {"className":"faq-list"} -->
      <details class="wp-block-details faq-list"><summary>'. esc_html__('Who do you work with?','skincare-product-store').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
      <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','skincare-product-store').'</p>
      <!-- /wp:paragraph --></details>
      <!-- /wp:details -->

      <!-- wp:details {"className":"faq-list"} -->
      <details class="wp-block-details faq-list"><summary>'. esc_html__('Do you offer customized marketing packages?','skincare-product-store').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
      <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','skincare-product-store').'</p>
      <!-- /wp:paragraph --></details>
      <!-- /wp:details -->

      <!-- wp:details {"className":"faq-list"} -->
      <details class="wp-block-details faq-list"><summary>'. esc_html__('Can you help us improve our SEO rankings?','skincare-product-store').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
      <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','skincare-product-store').'</p>
      <!-- /wp:paragraph --></details>
      <!-- /wp:details -->

      <!-- wp:details {"className":"faq-list"} -->
      <details class="wp-block-details faq-list"><summary>'. esc_html__('Do you manage social media accounts?','skincare-product-store').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
      <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','skincare-product-store').'</p>
      <!-- /wp:paragraph --></details>
      <!-- /wp:details --></div>
      <!-- /wp:column --></div>
      <!-- /wp:columns --></div>
      <!-- /wp:group -->

      <!-- wp:spacer {"height":"80px"} -->
      <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->',
    );