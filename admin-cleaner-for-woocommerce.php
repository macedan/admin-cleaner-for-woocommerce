<?php

    /**
     * Plugin Name: Admin Cleaner for WooCommerce
     * Description: Clean up WooCommerce admin interface by hiding unnecessary elements and providing a streamlined admin experience.
     * Version: 1.0
     * Author: Dan Mace
     * License: GPL3
     * Text Domain: admin-cleaner-for-woocommerce
     */

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    // Composer autoloader.
    require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

    // Initialize the plugin.
    function acfw_init() {

        // Check if WooCommerce is active
        if ( class_exists( 'WooCommerce' ) ) {

            // Initialize the plugin's main class
            $admin_cleaner = ACFW\AdminCleaner::get_instance();
        }
    }
    add_action( 'plugins_loaded', 'acfw_init' );