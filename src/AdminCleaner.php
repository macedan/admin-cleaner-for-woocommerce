<?php

    namespace ACFW;

    class AdminCleaner {

        private static $instance = null;

        private $features = [
            Features\Disable_WC_Bloat::class,
            Features\Disable_WP_Bloat::class,
        ];

        /**
         * Private constructor to prevent direct instantiation. Use get_instance() method instead.
         */
        private function __construct() {

            // Loop over features + initialize them.
            foreach ( $this->features as $feature_class ) {
                $feature = new $feature_class();
                if ( $feature->is_enabled() ) {
                    $feature->boot();
                }
            }
        }

        /**
         * Returns singleton instance of the AdminCleaner class.
         */
        public static function get_instance() {
            if ( self::$instance === null ) {
                self::$instance = new self();
            }
            return self::$instance;
        }
    }