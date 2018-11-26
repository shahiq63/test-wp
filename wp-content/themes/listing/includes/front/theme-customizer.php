<?php

function ju_customize_register($wp_customize) {
  $wp_customize->add_setting('ju_facebook_handle',array(
    'default'=>''
  ));
  $wp_customize->add_setting( 'ju_twitter_handle', array(
    'default'                   =>  '',
  ));
  $wp_customize->add_setting( 'ju_instagram_handle', array(
    'default'                   =>  '',
  ));
  $wp_customize->add_setting( 'ju_phone_handle', array(
    'default'                   =>  '',
  ));
  $wp_customize->add_setting( 'ju_email_handle', array(
    'default'                   =>  '',
  ));
  $wp_customize->add_section('ju_social_section',array(
    'title'=>__('Social Links Settings','Test-wp'),
    'priority'=>30,
    'panel'=>'test-wp',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_social_facebook_input',
        array(
            'label'          => __( 'Facebook Link here', 'listing' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_facebook_handle',
            'type'           => 'text',
        )
    ));
  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_social_Twitter_input',
        array(
            'label'          => __( 'Twitter Link here', 'listing' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_twitter_handle',
            'type'           => 'text',
        )
    ));
  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_social_Instagram_input',
        array(
            'label'          => __( 'Instagram Link here', 'listing' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_instagram_handle',
            'type'           => 'text',
        )
    ));
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_social_Phone_input',
        array(
            'label'          => __( 'Phone Number here', 'listing' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_phone_handle',
            'type'           => 'text',
        )
    ));
      $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ju_social_Email_input',
        array(
            'label'          => __( 'Email Link here', 'listing' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_email_handle',
            'type'           => 'text',
        )
    ));
}