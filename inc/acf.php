<?php

add_action( 'acf/init', 'consultancy_acf_init' );

function consultancy_acf_init() {
    // require_once __DIR__ . '/acf/buttons.php';
    require_once __DIR__ . '/acf/flexible_content.php';
}