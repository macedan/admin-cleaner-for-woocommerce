<?php

    namespace ACFW\Handlers;

    class Admin_Handler {

        private static $instance = null;

        /**
         * Private constructor to enforce singleton pattern.
         */
        private function __construct() {

            // Register settings page.
            add_action( 'admin_menu', [ $this, 'admin_menu' ] );

            // Initialise settings handler.
            new Settings_Handler();
        }

        /**
         * Register submenu for settings page.
         *
         * @return void
         */
        public function admin_menu(): void {

            add_submenu_page( 'options-general.php', 'Admin Cleaner for WooCommerce', 'Admin Cleaner', 'manage_options', 'admin-cleaner', [ $this, 'settings_page' ] );
        }

        /**
         * Render content for settings page.
         *
         * @return void
         */
        public function settings_page(): void {

            // Capability check before render.
            if ( ! current_user_can( 'manage_options' ) ) {
                return;
            }

            ?>
            <div class="wrap">
                <h1>Admin Cleaner</h1>
                <form method="post" action="options.php">
                    <?php
                    settings_fields( 'acfw_settings_group' );
                    do_settings_sections( 'admin-cleaner' );
                    submit_button();
                    ?>
                </form>
            </div>
            <?php
        }

        /**
         * Returns singleton instance of Admin_Handler.
         *
         * @return self
         */
        public static function get_instance(): self {

            if ( empty( static::$instance ) ) {
                static::$instance = new self();
            }

            return static::$instance;
        }
    }
