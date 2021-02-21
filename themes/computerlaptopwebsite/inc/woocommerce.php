<?php
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

function computerlaptopwebsite_woocommerce_single_product_summury_subtitle() {
    echo 'Look at the amazing price!!!';
}
add_action( 'woocommerce_single_product_summary', 'computerlaptopwebsite_woocommerce_single_product_summury_subtitle', 2 );

function computerlaptopwebsite_woocommerce_before_add_to_cart_quantity_test() {
    echo '<span style="color:red">Look at the amazing price!!!</span>';
}
add_action ( 'woocommerce_before_add_to_cart_quantity', 'computerlaptopwebsite_woocommerce_before_add_to_cart_quantity_test');
