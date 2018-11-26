<?php

function ju_misc_customizer_section($wp_customize) {
  $wp_customize->add_setting('ju_header_show_search',array(
    'default' =>'yes',
  ));

  $wp_customize->add_setting('ju_header_show_cart',array(
    'default' =>'yes',
  ));

  $wp_customize->add_setting('ju_footer_copyright_text',array(
    'default' =>'Copyrights &copy. All Rights Reserved Listing theme.',
  ));

  $wp_customize->add_setting('ju_footer_tos_page',array(
    'default' => 0,
  ));

  $wp_customize->add_setting('ju_footer_privacy_page',array(
    'default' => 0,
  ));

  $wp_customize->add_section('ju_misc_section',array(
    'title'=>__('Misc Settings','Test-wp'),
    'priority'=>30
  ));

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_show_header_search_input',
        array(
            'label'          => __( 'Header Search Input', 'listing' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_header_show_search',
            'type'           => 'checkbox',
            'choices'        => array(
              'yes'          => __('Yes','Lisiting'),
            )
        )
    ));

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_show_header_cart',
        array(
            'label'          => __( 'Show Cart In header', 'listing' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_header_show_cart',
            'type'           => 'checkbox',
            'choices'        => array(
              'yes'          => __('Yes','Lisiting'),
            )
        )
    ));

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_show_footer_input',
        array(
            'label'          => __( 'Show Footer Text', 'listing' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_copyright_text',
            'type'           => 'text',
        )
    ));

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_show_tos_page_input',
        array(
            'label'          => __( 'Term of Use Page', 'listing' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_tos_page',
            'type'           => 'dropdown-pages',
        )
    ));

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_show_privacy_policy_page',
        array(
            'label'          => __( 'Privacy Policy Page', 'listing' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_privacy_page',
            'type'           => 'dropdown-pages',
        )
    ));

}