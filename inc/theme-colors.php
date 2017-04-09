<?php
/**
 * theme colors
 *
 * listed color outputs that are inline
 *
 * @package Modernscape
 */

function modernscape_register_theme_customizer( $wp_customize ) {

    $wp_customize->add_setting(
        'modernscape_header_color',
        array(
            'default'     => '#ffffff',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_color',
            array(
                'label'      => __( 'Header Colors (Site Title & Navigation)', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_header_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_header_background_color',
        array(
            'default'     => '#222222',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'background_color',
            array(
                'label'      => __( 'Header Background', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_header_background_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_menu_background',
        array(
            'default'     => '#333',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_background',
            array(
                'label'      => __( 'Main navigation background', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_menu_background',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_menu_color_active',
        array(
            'default'     => '#e18728',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_color_active',
            array(
                'label'      => __( 'Main navigation links (active/hover)', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_menu_color_active',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_body_color',
        array(
            'default'     => '#fafafa',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'body_color',
            array(
                'label'      => __( 'Body Background', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_body_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_link_color',
        array(
            'default'     => '#1e73be',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Link Color', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_link_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_headline_color',
        array(
            'default'     => '#222222',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'headline_color',
            array(
                'label'      => __( 'Headline Color', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_headline_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );


    $wp_customize->add_setting(
        'modernscape_text_color',
        array(
            'default'     => '#222222',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'text_color',
            array(
                'label'      => __( 'Text Color', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_text_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

    $wp_customize->add_setting(
        'modernscape_main_color',
        array(
            'default'     => '#2374dd',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'main_color',
            array(
                'label'      => __( 'Button Color', 'modernscape' ),
                'section'    => 'colors',
                'settings'   => 'modernscape_main_color',
                'sanitize_callback' => 'esc_url_raw'
            )
        )
    );

}

add_action( 'customize_register', 'modernscape_register_theme_customizer' );


function modernscape_customizer_css() {
    ?>
    <style type="text/css">
        body { background-color: <?php echo esc_html (get_theme_mod( 'modernscape_body_color' ) ); ?>; }
        a { color: <?php echo esc_html (get_theme_mod( 'modernscape_link_color' ) ); ?>; }
        body , .main-navigation ul ul a { color: <?php echo esc_html( get_theme_mod ( 'modernscape_text_color' ) ); ?>; }
        h1,h2,h3,h4,h5 { color: <?php echo esc_html (get_theme_mod ( 'modernscape_headline_color' ) ); ?>; }
        .current_page_item a { color: <?php echo esc_html (get_theme_mod ('modernscape_main_color' ) ); ?>;}
        button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_html (get_theme_mod ( 'modernscape_main_color' ) ); ?>; background-color: <?php echo esc_html( get_theme_mod ( 'modernscape_main_color' ) ); ?>; }
        .site-title a, .site-description, .main-navigation a { color: <?php echo esc_html (get_theme_mod ('modernscape_header_color') ); ?>; }
        .site-description:after { border-color: <?php echo esc_html (get_theme_mod ('modernscape_header_color') ); ?>; }
        #masthead { background-repeat: no-repeat; background-size: cover; background-image: url('<?php esc_url(header_image()); ?>'); ;}
        #masthead { background-color: <?php echo esc_html(get_theme_mod ('modernscape_header_background_color') );?>; }
        .main-navigation { background-color: <?php echo esc_html(get_theme_mod('modernscape_menu_background') ); ?>; }
        .current_page_item a, .main-navigation a:focus, .main-navigation a:hover { color: <?php echo esc_html(get_theme_mod('modernscape_menu_color_active') ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'modernscape_customizer_css' );


?>
