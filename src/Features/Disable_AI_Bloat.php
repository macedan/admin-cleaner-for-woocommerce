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

            // Hook into Yoast options at runtime to disable AI generator without modifying the database.
            // Only the AI generator key is overridden; all other Yoast settings pass through unchanged.
            add_filter( 'option_wpseo', function( $options ) {
                $options['enable_ai_generator'] = false;
                return $options;
            });
        }
    }