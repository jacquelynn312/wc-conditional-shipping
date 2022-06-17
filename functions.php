<?php
/**
 * @snippet       Shipping by Weight | WooCommerce
 */
add_filter( 'woocommerce_package_rates', 'jl_woocommerce_tiered_shipping', 9999, 2 );
    
function jl_woocommerce_tiered_shipping( $rates, $package ) {
     
     if ( WC()->cart->get_cart_contents_weight() < 5.7 ) {
       
         if ( isset( $rates['flat_rate:9'] ) ) unset( $rates['flat_rate:10'], $rates['flat_rate:11'], $rates['flat_rate:12'], $rates['flat_rate:13'] );
       
     } elseif ( WC()->cart->get_cart_contents_weight() < 15 ) {
       
         if ( isset( $rates['flat_rate:9'] ) ) unset( $rates['flat_rate:9'], $rates['flat_rate:11'], $rates['flat_rate:12'], $rates['flat_rate:13'] );
       
     } elseif ( WC()->cart->get_cart_contents_weight() < 25.9 ) {
       
         if ( isset( $rates['flat_rate:9'] ) ) unset( $rates['flat_rate:9'], $rates['flat_rate:10'], $rates['flat_rate:12'], $rates['flat_rate:13'] );
       
     } elseif ( WC()->cart->get_cart_contents_weight() < 41.5 ) {
       
         if ( isset( $rates['flat_rate:9'] ) ) unset( $rates['flat_rate:9'], $rates['flat_rate:10'], $rates['flat_rate:11'], $rates['flat_rate:13'] );
       
     } else {
       
         if ( isset( $rates['flat_rate:9'] ) ) unset( $rates['flat_rate:9'], $rates['flat_rate:10'], $rates['flat_rate:11'], $rates['flat_rate:12'] );
       
     }
    
     return $rates;
    
}
