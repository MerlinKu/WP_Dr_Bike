<?php

function wpdr_customize_register($wp_customize){
  // Showcase Section
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase','Dr_Bike'),
    'description' => sprintf(__('Options for showcase','Dr_Bike')),
    'priority' => 30
  ));

  $wp_customize->add_setting('showcase_image',array(
    'default' => get_bloginfo('template_directory').'/img/bike_BW.jpg',
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
    'label' =>  __('Showcase Image','Dr_Bike'),
    'section' => 'showcase',
    'settings' => 'showcase_image',
    'priority' => 1
  )));

  $wp_customize->add_setting('showcase_heading',array(
    'default' => _x('DR. Bike @ UEA','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_heading', array(
    'label' =>  __('Heading','Dr_Bike'),
    'section' => 'showcase',
    'priority' => 2
  ));

  $wp_customize->add_setting('showcase_sub_heading',array(
    'default' => _x('Your bike takes center stage in our workshop.','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_sub_heading', array(
    'label' =>  __('Sub-Heading','Dr_Bike'),
    'section' => 'showcase',
    'priority' => 3
  ));

  $wp_customize->add_setting('showcase_text',array(
    'default' => _x('Dr.Bike is the best way to repair and maintain your bike, or shop a high quality refurbished second hand one. Enjoy all the cycling you can do with a smooth running bike. ','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_text', array(
    'label' =>  __('Text','Dr_Bike'),
    'section' => 'showcase',
    'priority' => 3
  ));

  // Location Section
  $wp_customize->add_section('location', array(
    'title' => __('Location','Dr_Bike'),
    'description' => sprintf(__('Options for location','Dr_Bike')),
    'priority' => 31
  ));

  $wp_customize->add_setting('location_heading',array(
    'default' => _x('Location','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('location_heading', array(
    'label' =>  __('Heading','Dr_Bike'),
    'section' => 'location',
    'priority' => 4
  ));

  $wp_customize->add_setting('location_sub_heading',array(
    'default' => _x('Behind UEA Congregation Hall. Just a few steps away!','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('location_sub_heading', array(
    'label' =>  __('Sub-Heading','Dr_Bike'),
    'section' => 'location',
    'priority' => 5
  ));

  $wp_customize->add_setting('location_text',array(
    'default' => _x('University of East Anglia, University Dr, Norwich NR4 7TJ, United Kingdom','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('location_text', array(
    'label' =>  __('Text','Dr_Bike'),
    'section' => 'location',
    'priority' => 6
  ));

  $wp_customize->add_setting('location_btn_url',array(
    'default' => _x('https://goo.gl/maps/7dvCWC1eowdhvL2Y6','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('location_btn_url', array(
    'label' =>  __('Button URL','Dr_Bike'),
    'section' => 'location',
    'priority' => 7
  ));

  $wp_customize->add_setting('location_btn_text',array(
    'default' => _x('Read More','Dr_Bike'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('location_btn_text', array(
    'label' =>  __('Button Text','Dr_Bike'),
    'section' => 'location',
    'priority' => 8
  ));
}
add_action('customize_register','wpdr_customize_register');
