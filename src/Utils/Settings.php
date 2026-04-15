<?php

    namespace ACFW\Utils;

    class Settings{

        private static $settings_cache = [];

        /**
         * Load settings array from WP Options
         * @return void
         */
        private static function load_settings(){

            // Load settings from WP Options.
            static::$settings_cache = get_option( 'acfw_settings', [] );
        }

        /**
         * Update the value of a setting and store in WP Options.
         *
         * @param string $setting_key
         * @param $value
         * @return void
         */
        public static function set( string $setting_key, $value ): void {

            // Ensure settings are loaded.
            if ( empty( static::$settings_cache ) ) {
                static::load_settings();
            }

            // Update the setting locally.
            static::$settings_cache[ $setting_key ] = $value;

            // Update the settings options.
            update_option( 'acfw_settings', static::$settings_cache );
        }

        /**
         * Get the value of a setting, or the default if not present in settings.
         *
         * @param string $setting_key
         * @param $default
         * @return false|mixed
         */
        public static function get( string $setting_key, $default = false ) {

            // Ensure settings are loaded.
            if( empty( static::$settings_cache ) ) {
                static::load_settings();
            }

            // Return cached value.
            if( isset( static::$settings_cache[ $setting_key ] ) ){
                return static::$settings_cache[ $setting_key ];
            }

            // No value, return default.
            return $default;
        }
    }