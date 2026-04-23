<?php

    /**
     * Plugin Name: DanMace Admin Cleanup Tools
     * Description: Boost WordPress backend performance by removing unnecessary admin bloat and streamlining the dashboard experience.
     * Version: 1.0.0
     * Author: Dan Mace
     * License: GPLv3 or later
     * Text Domain: danmace-admin-cleanup-tools
     */

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    // Composer autoloader.
    require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

    // Initialize the plugin.
    function act_init() {

        // Initialize the plugin's main class
        $danmace_admin_cleanup_tools = DM\Admin_Cleanup_Tools::get_instance();
    }
    add_action( 'plugins_loaded', 'act_init' );