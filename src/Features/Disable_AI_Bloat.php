<?php

    namespace DanMace\ACT\Features; 

    use DanMace\ACT\Utils\Abstract_Feature;

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    class Disable_AI_Bloat extends Abstract_Feature {

        public function boot() {

            // Check if Yoast SEO is active before proceeding.
            if ( ! class_exists( 'WPSEO_Options' ) ) {
                return;
            }

            // Check status of Yoast AI in the database, and if it is disabled, return early.
            if ( \WPSEO_Options::get_option( 'enable_ai_generator', false ) === false ) {
                return;
            }

            // Manually set the SEO AI content analysis option to false, as it is enabled by default.
            \WPSEO_Options::save_option( 'wpseo', 'enable_ai_generator', false );
        }
    }