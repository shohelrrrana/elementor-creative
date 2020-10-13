<?php
require_once get_template_directory() . '/plugins/class-tgm-plugin-activation.php';

function creative_plugin_activation () {

    $plugins = [
        [
            'name'     => __( 'One Click Demo Import', 'creative' ),
            'slug'     => 'one-click-demo-import',
            'source'   => 'https://downloads.wordpress.org/plugin/one-click-demo-import.2.6.1.zip',
            'required' => true,
        ],
        [
            'name'     => __( 'Elementor', 'creative' ),
            'slug'     => 'elementor',
            'required' => true,
        ],
        [
            'name'     => __( 'Mailchimp', 'creative' ),
            'slug'     => 'mailchimp-for-wp',
            'required' => true,
        ],
        [
            'name'     => __( 'Elementor Creative Plugin', 'creative' ),
            'slug'     => 'elementor-creative',
            'source'   => get_template_directory_uri() . '/plugins/elementor-creative.zip',
            'required' => true,
        ],
    ];

    $config = [
        'id'          => 'creative_plugins_activation',
        'menu'        => 'creative_plugins-activation',
        'parent_slug' => 'themes.php',
        'has_notices' => true,

    ];

    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'creative_plugin_activation' );