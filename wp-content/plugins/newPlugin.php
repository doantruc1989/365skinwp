<?php
/*
Plugin Name: new Plugin
Author: quocson
*/

add_shortcode( 'footerfollow' , 'create_footerfollow');
function create_footerfollow() {
    return "
    <div class='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 items-center'>
        <a href='https://www.tiktok.com/@minhcotmetit' class='flex flex-col items-center justify-center'>
            <img class='w-28' src='http://localhost/wordpress/wp-content/uploads/2023/04/tiktok.png' alt=''>
            <p class='font-bold mt-3'>Tiktok Nhân Viên</p>
            <p class='italic'>@minhcotmetit</p>
        </a>
        <a href='https://www.tiktok.com/@skin.365' class='flex flex-col items-center justify-center'>
            <img class='w-28' src='http://localhost/wordpress/wp-content/uploads/2023/04/tiktok.png' alt=''>
            <p class='font-bold mt-3'>Tiktok Sản phẩm</p>
            <p class='italic'>@skin.365</p>
        </a>
        <a href='https://www.facebook.com/skin365.vn' class='flex flex-col items-center justify-center'>
            <img class='w-28' src='http://localhost/wordpress/wp-content/uploads/2023/04/facebook.png' alt=''>
            <p class='font-bold mt-3'>Facebook</p>
            <p class='italic'>fb.com/skin365.vn</p>
        </a>
        <a href='https://zalo.me/3227705294574144599?src=qr&f=2&utm_src=zoa-cms' class='flex flex-col items-center justify-center'>
            <img class='w-28' src='http://localhost/wordpress/wp-content/uploads/2023/04/zalo.png' alt=''>
            <p class='font-bold mt-3'>Zalo</p>
            <p class='italic'>Minh Cosmetics</p>
        </a>
        <a href='https://www.instagram.com/minhcosmetics/' class='flex flex-col items-center justify-center'>
            <img class='w-28' src='http://localhost/wordpress/wp-content/uploads/2023/04/instagram.png' alt=''>
            <p class='font-bold mt-3'>Instagram</p>
            <p class='italic'>@minhcosmetics</p>
        </a>
        <a href='tel:0913991345' class='flex flex-col items-center justify-center'>
            <img class='w-28' src='http://localhost/wordpress/wp-content/uploads/2023/04/phone.png' alt=''>
            <p class='font-bold mt-3'>Hotline</p>
            <p class='italic'>0913.991.345</p>
        </a>

    </div>
    ";
}

add_shortcode('thuonghieunoibat', 'create_thuonghieunoibat');
function create_thuonghieunoibat()
{
    return "
    <div class='grid grid-cols-4 md:grid-cols-6 lg:grid-cols-9 gap-2 items-center justify-center mt-6'>
    <a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/9wishes/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/9wishes.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/anessa/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/anessa.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/bioderma/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/bioderma.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/biore/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/biore.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/blackrouge/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/blackrouge.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/caryophy/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/caryophy.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/cellfusionc/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cellfusion.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/cerave/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cerave.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/cetaphil/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cetaphil.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/cocoon/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cocoon.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/cosrx/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/cosrx.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/dhc/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/dhc.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/hatomugi/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/hatomugi.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/huxley/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/huxley.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/imfrom/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/imfrom.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/innisfree/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/innisfree.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/klairs/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/klairs.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/kose/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/kose.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/larocheposay/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/larocheposay.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/loreal/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/loreal.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/mise-en/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/mise-en.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/naruko/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/naruko.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/neutrogena/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/neutrogena.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/obagi/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/obagi.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/romend/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/romend.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/senka/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/senka.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/simple/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/simple.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/sivanna/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/sivanna.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/skin1004/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/skin1004.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/somebymi/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/somebymi.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/stives/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/stives.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/theordinary/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/theordinary.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/unicharm/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/unicharm.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/vaseline/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/vaseline.png' alt=''></a>
<a class='border border-gray-300 hover:shadow-md shadow-sm flex items-center justify-self-center'
href='http://localhost/wordpress/brand/whiteconc/'><img class='w-28 h-28' src='http://localhost/wordpress/wp-content/uploads/brand/whiteconc.png' alt=''></a>
    </div>
    ";
}

add_shortcode('fourbanner', 'create_banner');
function create_banner() {
    return "
    <div class='w-full grid lg:grid-cols-2 gap-2'>
   
        <a href='http://localhost/wordpress/danh-muc-san-pham/cham-soc-da-mat/'>
            <img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner1.png' alt=''>
        </a>


        <a href='http://localhost/wordpress/danh-muc-san-pham/gia-tot-hom-nay/'>
            <img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner2.png' alt=''>
        </a>

        <a href='http://localhost/wordpress/danh-muc-san-pham/cham-soc-co-the/'>
            <img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner3.png' alt=''>
        </a>

        <a href='http://localhost/wordpress/danh-muc-san-pham/trang-diem/'>
            <img class='w-full rounded-lg' src='http://localhost/wordpress/wp-content/uploads/banner/banner4.png' alt=''>
        </a>
    </div>

    ";
}

add_shortcode('topbanner', 'create_topbanner');
function create_topbanner() {
    return "
    <div class='w-full'>
   
        <a href='http://localhost/wordpress/danh-muc-san-pham/gia-tot-hom-nay/'>
            <img class='w-full' src='http://localhost/wordpress/wp-content/uploads/banner/banner5.png' alt=''>
        </a>
        </div>
        ";
}
