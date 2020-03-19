<?php
/**
 * Contains Customizer Extended Controls
 *
 * @since 1.0
 */
 

if (class_exists('WP_Customize_Control')):

    /**
     * Profound Customize Important Links Control
     *
     * Controls Important Links for the Theme
     */
    class Profound_Customize_Important_Links_Control extends WP_Customize_Control {

        public function render_content() {
            echo '<p><a href="' . PROFOUND_DOCS_URL . '" target="_blank">' . __('Theme Documentation', 'profound') . '</a></p>';
            echo '<p><a href="' . PROFOUND_CONTACT_URL . '" target="_blank">' . __('Contact us', 'profound') . '</a></p>';
        }

    }

endif;