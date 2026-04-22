<?php

    namespace SB\Features;

    use SB\Utils\Abstract_Feature;

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    class Disable_WP_Bloat extends Abstract_Feature {

        public function boot(){

            // Remove unnecessary dashboard widgets.
            add_action('wp_dashboard_setup', [ $this, 'remove_dashboard_widgets' ], 100 );
        }

        public function remove_dashboard_widgets() {
            remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
            remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' ); 
            remove_meta_box( 'dashboard_right_now', 'dashboard', 'side' ); 
            remove_meta_box( 'dashboard_site_health', 'dashboard', 'side' );
            remove_meta_box( 'dashboard_activity', 'dashboard', 'side' ); 
        }
    }