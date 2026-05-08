<?php

    namespace DanMace\ACT\Features; 

    use DanMace\ACT\Utils\Abstract_Feature;

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    class Disable_AI_Bloat extends Abstract_Feature {

        public function boot() {

            // Disable Core WP AI features.
            add_filter( 'wp_supports_ai', '__return_false' );

            // Disable Jetpack AI features.
            add_filter( 'jetpack_ai_enabled', '__return_false' );

            // Hook into yoast options to disable AI features in-flight.
            add_filter( 'option_wpseo', function( $options ) {
                $options['enable_ai_generator'] = false;
                return $options;
            });
        }
    }
    