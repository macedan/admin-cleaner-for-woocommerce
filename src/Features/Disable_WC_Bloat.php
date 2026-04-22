<?php

    namespace SB\Features; 

    use SB\Utils\Abstract_Feature;

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    class Disable_WC_Bloat extends Abstract_Feature {

        public function boot() {

            // Check if WooCommerce is active
            if ( ! class_exists( 'WooCommerce' ) ) {
                return;
            }

            // Disable WooCommerce Analytics.
            add_filter( 'option_woocommerce_analytics_enabled', '__return_false' );

            // Remove the order counter on the WooCommerce menu item in the admin dashboard.
            add_filter( 'woocommerce_include_processing_order_count_in_menu', '__return_false' );
        }
    }