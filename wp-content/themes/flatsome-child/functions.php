<?php
// Add custom Theme Functions here

function tp_before_main_content()
{ ?>
	<div class="w-full mb-6">
		<div class="w-full">
			<img class="w-full h-fit" src="http://localhost/wordpress/wp-content/uploads/2023/04/skin365-freeship-banner.png" alt="vanchuyen">
		</div>
	</div>
    <div class="p-2 my-3 border border-gray-300 bg-gray-100 rounded-md">
        <div class="flex gap-1">
            <img class="h-6 w-6" src="http://localhost/wordpress/wp-content/uploads/2023/location.png" alt="">
            <p>Sản phẩm</p>
            <p class="text-red-500">đang có sẵn</p>
            <p>tại cửa hàng:</p>
        </div>
        <div class="grid grid-cols-2 pl-4 text-xs">
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>106 Bà Triệu, Huế</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>126 Mai Thúc Loan, Huế</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>39 Phan Bội Châu, Huế</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>74B Phan Thanh, Đà Nẵng</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>115 Phan Đăng Lưu, ĐN</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>175 Lý Thường Kiệt, H.An</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>76 Nguyễn Trãi, Đông Hà</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>384 Phan Chu Trinh, Huế</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>64 Âu Cơ, Đà Nẵng</p>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4" src="http://localhost/wordpress/wp-content/uploads/2023/cart-icon.png" alt="">
                <p>36 Quang Trung, TX.QT</p>
            </div>
        </div>
    </div>
<?php }
add_action('woocommerce_after_add_to_cart_form', 'tp_before_main_content');

function my_text_strings($translated_text, $text, $domain)
{
	switch ($translated_text) {
		case 'Shopping Cart':
			$translated_text = __('Giỏ hàng', 'woocommerce');
			break;
	}
	switch ($translated_text) {
		case 'Checkout details':
			$translated_text = __('Thanh Toán', 'woocommerce');
			break;
	}
	switch ($translated_text) {
		case 'Order Complete':
			$translated_text = __('Hoàn Thành', 'woocommerce');
			break;
	}
	switch ($translated_text) {
		case 'Province':
			$translated_text = __('Tỉnh Thành', 'woocommerce');
			break;
	}
	switch ($translated_text) {
		case 'District':
			$translated_text = __('Quận Huyện', 'woocommerce');
			break;
	}
	switch ($translated_text) {
		case 'Add to cart':
			$translated_text = __('Thêm vào giỏ hàng', 'woocommerce');
			break;
	}
    switch ($translated_text) {
		case 'Related products':
			$translated_text = __('Sản phẩm liên quan', 'woocommerce');
			break;
	}
    switch ($translated_text) {
		case 'View more':
			$translated_text = __('Xem thêm', 'woocommerce');
			break;
	}
	return $translated_text;
}
add_filter('gettext', 'my_text_strings', 20, 3);

// Register Product Brand Taxonomy
function tb_product_brand_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Thương hiệu', 'Taxonomy General Name', 'tb_product_brand' ),
		'singular_name'              => _x( 'Product Brand', 'Taxonomy Singular Name', 'tb_product_brand' ),
		'menu_name'                  => __( 'Product Brands', 'tb_product_brand' ),
		'all_items'                  => __( 'All Brands', 'tb_product_brand' ),
		'parent_item'                => __( 'Parent Brand', 'tb_product_brand' ),
		'parent_item_colon'          => __( 'Parent Brand:', 'tb_product_brand' ),
		'new_item_name'              => __( 'New Item Brand', 'tb_product_brand' ),
		'add_new_item'               => __( 'Add New Brand', 'tb_product_brand' ),
		'edit_item'                  => __( 'Edit Brand', 'tb_product_brand' ),
		'update_item'                => __( 'Update Brand', 'tb_product_brand' ),
		'view_item'                  => __( 'View Brand', 'tb_product_brand' ),
		'separate_items_with_commas' => __( 'Separate brands with commas', 'tb_product_brand' ),
		'add_or_remove_items'        => __( 'Add or remove brands', 'tb_product_brand' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tb_product_brand' ),
		'popular_items'              => __( 'Popular Brands', 'tb_product_brand' ),
		'search_items'               => __( 'Search Brand', 'tb_product_brand' ),
		'not_found'                  => __( 'Not Found', 'tb_product_brand' ),
		'no_terms'                   => __( 'No brands', 'tb_product_brand' ),
		'items_list'                 => __( 'Brandlist', 'tb_product_brand' ),
		'items_list_navigation'      => __( 'Brand list navigation', 'tb_product_brand' ),
	);
	$rewrite = array(
		'slug'                       => 'brand',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'tb_product_brand', array( 'product' ), $args );

}
add_action( 'init', 'tb_product_brand_taxonomy', 0 );

// Add ACF thumbnail columns to Product Brand custom taxonomy

function add_thumbnail_columns($columns) {
   $columns['brand_logo'] = __('Logo');
   $new = array();
   foreach ($columns as $key => $value) {
       if ($key=='name') // Put the Thumbnail column before the Name column
           $new['brand_logo'] = 'Logo';
       $new[$key] = $value;
   }
   return $new;
   // Code end
}
add_filter('manage_edit-tb_product_brand_columns', 'add_thumbnail_columns');

/**
* Output ACF thumbnail content in Linen Category custom taxonomy columns
*/
function thumbnail_columns_content($content, $column_name, $term_id) {
   if ('brand_logo' == $column_name) {
       $term = get_term($term_id);
      // $linen_thumbnail_var = get_field('thumbnail_id', $term);
      
      $image_id = get_term_meta( $term->term_id, 'brand_logo', true );
      $image_data = wp_get_attachment_image_src( $image_id, 'full' );
     
      if ( $image_data != false ) {
          $image = $image_data[0];
         $content = '<img src="' .  esc_url( $image ) . '" width = "60px" alt="'. $term->name .'"/>';
      }
     
      /*if ( $image_id ) {
           $image = wp_get_attachment_image( $image_id,  array('80', 'auto') );
           if( $image ){
               $content = $image;
           }
         }*/		
     
      //$content = '<img src="'.$linen_thumbnail_var['url'].'" width="60" />';
       //$content = print_r($image_data);
    }
   return $content;
}

// Add Brand Logo to Single Product page  and Product Archive
// add_action('woocommerce_single_product_summary','tb_single_product_logo', 1);
// add_action('woocommerce_after_shop_loop_item', 'tb_single_product_logo', 10 );
// function tb_single_product_logo() {
  
//    $terms = get_the_terms( get_the_ID(), 'tb_product_brand');
//   //print_r($terms);
//   if(is_array($terms) || is_object($terms)){
// 	echo '<div class="tb-brand-logo">';
//   	foreach ((array) $terms as $term ) {
//     	$thumbnail_id = get_term_meta($term->term_id, 'brand_logo', true ) ;
// 	  	if ( $thumbnail_id ) {
// 			$image = wp_get_attachment_image( $thumbnail_id, 'full', $icon = false ,  array( 'class' => 'brand-logo', 'alt' => $term->name ) );
// 			if( $image ){
// 				echo sprintf( '<a href="%s">%s</a>', get_term_link( $term ), $image );
// 			}
//   		}		
//   	}
// 	echo '</div>';
//   }
// }