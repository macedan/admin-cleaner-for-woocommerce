<?php

    namespace ACFW\Features;

    abstract class Abstract_Feature {

        /**
         * Method to be implemented by all features to initialize their functionality.
         */
        abstract public function boot();

        /**
         * Method to determine if feature is enabled.
         */
        public function is_enabled(): bool {
            return true;
        }
    }