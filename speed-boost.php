<?php

    /**
     * Plugin Name: Speed Boost — Backend performance
     * Description: Boost WordPress backend performance by removing unnecessary admin bloat and streamlining the dashboard experience.
     * Version: 1.0.0
     * Author: Dan Mace
     * License: GPLv3 or later
     * Text Domain: speed-boost
     */

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    // Composer autoloader.
    require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

    // Initialize the plugin.
    function sb_init() {

        // Initialize the plugin's main class
        $speed_boost = SB\Speed_Boost::get_instance();
    }
    add_action( 'plugins_loaded', 'sb_init' );