<?php

class WPSI_Restore_Tests extends WP_UnitTestCase {
    public function test_can_instantiate_restore() {
        $restore = new WPSI_Restore();
        $this->assertInstanceOf('WPSI_Restore', $restore);
    }

    public function test_class_exists() {
        $this->assertTrue(class_exists('WPSI_Restore'));
    }
} 