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
			<p>Sản phẩm <span class="text-red-500">đang có sẵn </span>tại cửa hàng:</p>
		</div>
		<div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-2 pl-4 text-xs">
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

// add_action('woocommerce_after_single_product_summary', 'tp_template_single_sharing', 15);
// function tp_template_single_sharing()
// {
// 	echo "
// 	<div class='w-full grid lg:grid-cols-2 gap-2 mb-6'>
   
// 	<a href='http://localhost/wordpress/danh-muc-san-pham/cham-soc-da-mat/'>
// 		<img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner1.png' alt=''>
// 	</a>


// 	<a href='http://localhost/wordpress/danh-muc-san-pham/gia-tot-hom-nay/'>
// 		<img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner2.png' alt=''>
// 	</a>

// 	<a href='http://localhost/wordpress/danh-muc-san-pham/cham-soc-co-the/'>
// 		<img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner3.png' alt=''>
// 	</a>

// 	<a href='http://localhost/wordpress/danh-muc-san-pham/trang-diem/'>
// 		<img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner4.png' alt=''>
// 	</a>

// </div>";
// }

// add_action('woocommerce_after_single_product_summary', 'tp_thuonghieu', 21);
// function tp_thuonghieu()
// {
// 	echo "
// 	<h3 class='mt-6'>THƯƠNG HIỆU NỔI BẬT</h3>
//     <div class='grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-2 items-center justify-center mt-6'>
//     <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/9wishes/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/9wishes.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/anessa/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/anessa.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/bioderma/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/bioderma.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/biore/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/biore.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/blackrouge/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/blackrouge.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/caryophy/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/caryophy.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/cellfusionc/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cellfusion.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/cerave/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cerave.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/cetaphil/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cetaphil.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/cocoon/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cocoon.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/cosrx/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cosrx.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/dhc/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/dhc.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/hatomugi/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/hatomugi.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/huxley/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/huxley.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/imfrom/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/imfrom.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/innisfree/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/innisfree.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/klairs/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/klairs.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/kose/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/kose.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/larocheposay/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/larocheposay.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/loreal/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/loreal.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/mise-en/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/mise-en.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/naruko/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/naruko.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/neutrogena/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/neutrogena.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/obagi/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/obagi.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/romend/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/romend.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/senka/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/senka.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/simple/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/simple.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/sivanna/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/sivanna.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/skin1004/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/skin1004.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/somebymi/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/somebymi.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/stives/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/stives.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/theordinary/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/theordinary.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/unicharm/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/unicharm.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/vaseline/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/vaseline.png' alt=''></a>
// <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
// href='http://localhost/wordpress/brand/whiteconc/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/whiteconc.png' alt=''></a>
//     </div>
//     ";
// }

// function carzyFunction(){
// 	return "[fourbanner]";
// }
// add_action( 'woocommerce_after_single_product_summary', 'carzyFunction', 9 );

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
function tb_product_brand_taxonomy()
{

	$labels = array(
		'name'                       => _x('Thương hiệu', 'Taxonomy General Name', 'tb_product_brand'),
		'singular_name'              => _x('Product Brand', 'Taxonomy Singular Name', 'tb_product_brand'),
		'menu_name'                  => __('Product Brands', 'tb_product_brand'),
		'all_items'                  => __('All Brands', 'tb_product_brand'),
		'parent_item'                => __('Parent Brand', 'tb_product_brand'),
		'parent_item_colon'          => __('Parent Brand:', 'tb_product_brand'),
		'new_item_name'              => __('New Item Brand', 'tb_product_brand'),
		'add_new_item'               => __('Add New Brand', 'tb_product_brand'),
		'edit_item'                  => __('Edit Brand', 'tb_product_brand'),
		'update_item'                => __('Update Brand', 'tb_product_brand'),
		'view_item'                  => __('View Brand', 'tb_product_brand'),
		'separate_items_with_commas' => __('Separate brands with commas', 'tb_product_brand'),
		'add_or_remove_items'        => __('Add or remove brands', 'tb_product_brand'),
		'choose_from_most_used'      => __('Choose from the most used', 'tb_product_brand'),
		'popular_items'              => __('Popular Brands', 'tb_product_brand'),
		'search_items'               => __('Search Brand', 'tb_product_brand'),
		'not_found'                  => __('Not Found', 'tb_product_brand'),
		'no_terms'                   => __('No brands', 'tb_product_brand'),
		'items_list'                 => __('Brandlist', 'tb_product_brand'),
		'items_list_navigation'      => __('Brand list navigation', 'tb_product_brand'),
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
	register_taxonomy('tb_product_brand', array('product'), $args);
}
add_action('init', 'tb_product_brand_taxonomy', 0);

// Add ACF thumbnail columns to Product Brand custom taxonomy

function add_thumbnail_columns($columns)
{
	$columns['brand_logo'] = __('Logo');
	$new = array();
	foreach ($columns as $key => $value) {
		if ($key == 'name') // Put the Thumbnail column before the Name column
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
function thumbnail_columns_content($content, $column_name, $term_id)
{
	if ('brand_logo' == $column_name) {
		$term = get_term($term_id);
		// $linen_thumbnail_var = get_field('thumbnail_id', $term);

		$image_id = get_term_meta($term->term_id, 'brand_logo', true);
		$image_data = wp_get_attachment_image_src($image_id, 'full');

		if ($image_data != false) {
			$image = $image_data[0];
			$content = '<img src="' .  esc_url($image) . '" width = "60px" alt="' . $term->name . '"/>';
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


// remove Woocommerce reviews tab?
add_filter('woocommerce_product_tabs', 'remove_review_tab', 98);
function remove_review_tab($tabs)
{
	unset($tabs['reviews']); // Remove the reviews tab
	return $tabs;
}

/**
 * Customize product data tabs
 */
add_filter('woocommerce_product_tabs', 'hk_custom_tab');
function hk_custom_tab($tabs)
{

	$tabs['hk_custom_tab'] = array(
		'title'    => 'Hướng dẫn mua hàng',
		'callback' => 'hk_custom_tab_content',
		'priority' => 50,
	);

	return $tabs;
}

function hk_custom_tab_content()
{
	echo "
	<div class='w-full'>
    	<h2 class='font-bold uppercase text-center'>HƯỚNG DẪN ĐẶT HÀNG TẠI SKIN365.VN</h2>
		<p><span class='text-green-500 font-bold underline'>Bước 1: </span>Chọn sản phẩm cần mua, <span class='font-bold'>đưa vào giỏ hàng</span></p>
		<div class='flex items-center justify-center'>
    		<img src='http://localhost/wordpress/wp-content/uploads/banner/huongdan1.png' alt=''>
		</div>
		<p class='mt-6'><span class='text-green-500 font-bold underline'>Bước 2: </span>Điền <span class='font-bold'>Mã Giảm Giá </span>và <span class='font-bold'>Thông Tin Giao Hàng</span></p>
    	<div class='flex items-center justify-center'>
    		<img src='http://localhost/wordpress/wp-content/uploads/banner/huongdan2.png' alt=''>
		</div>
		<p class='mt-6'><span class='text-green-500 font-bold underline'>Bước 3: </span>Chọn <span class='font-bold'>Phương Thức Thanh Toán </span>và <span class='font-bold'>Đặt Hàng</span></p>
    	<div class='flex items-center justify-center'>
    		<img src='http://localhost/wordpress/wp-content/uploads/banner/huongdan3.png' alt=''>
		</div>
	</div>
	";
}

// Remove checkout fields
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields)
{
	// remove billing fields
	unset($fields['billing']['billing_company']); // Billing company
	return $fields;
}

add_filter('woocommerce_billing_fields', 'optional_checkout_fields1', 1000, 1);
function optional_checkout_fields1($fields)
{
	$fields['billing_email']['required'] = false;
	return $fields;
}


add_action('woocommerce_after_add_to_cart_button','devvn_quickbuy_after_addtocart_button');

function devvn_quickbuy_after_addtocart_button(){

    global $product;

    ?>


    <button type="button" class="button buy_now_button">

        <?php _e('Mua ngay', 'devvn'); ?>

    </button>

    <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off"/>

    <script>

        jQuery(document).ready(function(){

            jQuery('body').on('click', '.buy_now_button', function(e){

                e.preventDefault();

                var thisParent = jQuery(this).parents('form.cart');

                if(jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) {

                    jQuery('.single_add_to_cart_button', thisParent).trigger('click');

                    return false;

                }

                thisParent.addClass('devvn-quickbuy');

                jQuery('.is_buy_now', thisParent).val('1');

                jQuery('.single_add_to_cart_button', thisParent).trigger('click');

            });

        });

    </script>

    <?php

}

add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout($redirect_url) {

    if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {

        $redirect_url = wc_get_cart_url(); //or wc_get_cart_url()

    }

    return $redirect_url;

}
