<?php

    namespace ACFW\Features; 

    use ACFW\Utils\Abstract_Feature;

    class Disable_Analytics extends Abstract_Feature {

        public function boot() {

            // Disable WooCommerce Analytics.
            add_filter( 'option_woocommerce_analytics_enabled', '__return_false' );
        }
    }