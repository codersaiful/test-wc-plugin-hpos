<?php
/**
 * Plugin Name: AAA Test wc plugin for HPOS
 * Plugin URI: https://codeastrology.com/min-max-quantity/
 * Description: This is a AAA Test wc plugin for HPOS
 * Author: CodeAstrology Team
 * Author URI: https://codeastrology.com
 * Tags: WooCommerce, minimum quantity, maximum quantity, woocommrce quantity, input step control for WC, customize wc quantity, wc qt, max qt, min qt, maximum qt, minimum qt
 * 
 * Version: 1.0.0
 * Requires at least:    4.0.0
 * Tested up to:         6.3.1
 * WC requires at least: 3.0.0
 * WC tested up to: 	 8.0.3
 * 
 * Text Domain: wcmmq
 * Domain Path: /languages/
 */

add_filter('woocommerce_loop_add_to_cart_args','test_hpos_wc_args_handle', 9999, 2);
add_filter('woocommerce_quantity_input_args','test_hpos_wc_args_handle', 9999, 2);
add_filter('woocommerce_available_variation','test_hpos_wc_args_handle', 9999, 2);

function test_hpos_wc_args_handle( $args, $product )
{

    $args['min_value'] = 10;
    $args['input_value'] = 30;
    $args['step_value'] = 10;
    $args['mmax_value'] = 100;

    return $args;
}