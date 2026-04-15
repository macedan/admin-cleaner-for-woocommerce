<?php

    namespace ACFW\Handlers;

    use ACFW\Utils\Settings;

    class Settings_Handler {

        private array $fields = [
            [ 'id' => 'disable_woocommerce_bloat', 'type' => 'checkbox' ],
            [ 'id' => 'disable_wp_bloat',          'type' => 'checkbox' ],
        ];

        public function __construct() {

            add_action( 'admin_init', [ $this, 'register_settings' ] );
        }

        /**
         * Register settings.
         *
         * @return void
         */
        public function register_settings(): void {

            register_setting( 'acfw_settings_group', 'acfw_settings', [ $this, 'sanitize_settings' ] );

            add_settings_section( 'acfw_general', 'General', null, 'admin-cleaner' );

            foreach ( $this->fields as $field ) {
                add_settings_field(
                    $field['id'],
                    $field['label'] ?? ucwords( str_replace( '_', ' ', $field['id'] ) ),
                    [ $this, 'render_field' ],
                    'admin-cleaner',
                    'acfw_general',
                    $field
                );
            }
        }

        /**
         * Render a settings field.
         *
         * @param array $args
         * @return void
         */
        public function render_field( array $args ): void {

            $id          = $args['id'];
            $type        = $args['type'];
            $value       = Settings::get( $id );
            $placeholder = isset( $args['placeholder'] ) ? ' placeholder="' . esc_attr( $args['placeholder'] ) . '"' : '';

            if ( $type === 'checkbox' ) {
                $checked = checked( true, (bool) $value, false );
                echo '<input type="checkbox" name="acfw_settings[' . esc_attr( $id ) . ']" value="1" ' . $checked . '>';
            } else {
                echo '<input type="' . esc_attr( $type ) . '" name="acfw_settings[' . esc_attr( $id ) . ']" value="' . esc_attr( $value ) . '"' . $placeholder . '>';
            }
        }

        /**
         * Sanitize settings before saving.
         *
         * @param ?array $input
         * @return array
         */
        public function sanitize_settings( ?array $input ): array {

            $input = $input ?? [];

            foreach ( $this->fields as $field ) {
                if ( $field['type'] === 'checkbox' ) {
                    $input[ $field['id'] ] = isset( $input[ $field['id'] ] ) && $input[ $field['id'] ] === '1';
                }
            }

            return $input;
        }
    }
