<?php

class WPSI_Export_Handler_Tests extends WP_UnitTestCase {
    public function test_can_instantiate_export_handler() {
        $handler = new WP_Site_Inspector_Export_Handler();
        $this->assertInstanceOf('WP_Site_Inspector_Export_Handler', $handler);
    }

    public function test_ajax_action_registered() {
        global $wp_filter;
        $handler = new WP_Site_Inspector_Export_Handler();
        $this->assertArrayHasKey('wp_ajax_wpsi_export_excel', $wp_filter);
    }
} 
// something