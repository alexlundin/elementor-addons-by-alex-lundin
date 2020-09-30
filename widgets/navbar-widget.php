<?php

namespace Elementor;

class Elementor_Navbar_Widget extends Widget_Base {
    public function get_name() {
        return 'convos_navbar';
    }

    public function get_title() {
        return __( 'Toggle Menu', 'elementor-convos-extension' );
    }

    public function get_icon() {
        return 'fa fa-bars';
    }

    public function get_categories() {
        return [ 'convos_category' ];
    }
}