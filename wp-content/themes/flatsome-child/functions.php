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
	return $translated_text;
}
add_filter('gettext', 'my_text_strings', 20, 3);

