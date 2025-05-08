<?php

function ds-theme-final-main_customizer($wp_customize) {

    $wp_customize ->add_section(

        'sec_copyright',
        array(
            'title'=> 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
        );

        $wp_customize -> add_setting (
          'set_copyright',
          array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'santize_text_field'
          )
          );

          $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => 'Copyright Information',
                'description' => 'Please, type your copyright here',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
            );

          // 2 Hero
          $wp_customize ->add_section(

            'sec_hero',
            array(
                'title'=> 'Hero Section',
            )
            );
    
            $wp_customize -> add_setting (
              'set_hero_title',
              array(
                'type' => 'theme_mod',
                'default' => 'Please add some title',
                'sanitize_callback' => 'santize_text_field'
              )
              );
    
              $wp_customize->add_control(
                'set_hero_title',
                array(
                    'label' => 'Hero Title',
                    'description' => 'Please, type your title here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
                );
            // Subtitle
            $wp_customize -> add_setting (
              'set_hero_subtitle',
              array(
                'type' => 'theme_mod',
                'default' => 'Please, type your subtitle here',
                'sanitize_callback' => 'santize_textarea_field'
              )
              );
    
              $wp_customize->add_control(
                'set_hero_subtitle',
                array(
                    'label' => 'Hero Subtitle',
                    'description' => 'Please, add some subtitle here',
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
                );

              // Button
            $wp_customize -> add_setting (
              'set_hero_button_text',
              array(
                'type' => 'theme_mod',
                'default' => 'Learn more',
                'sanitize_callback' => 'santize_text_field'
              )
              );
    
              $wp_customize->add_control(
                'set_hero_button_text',
                array(
                    'label' => 'Hero Subtitle',
                    'description' => 'Please, add some hero button here',
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
                );

              // Button Link
            $wp_customize -> add_setting (
              'set_hero_button_link',
              array(
                'type' => 'theme_mod',
                'default' => '#',
                'sanitize_callback' => 'esc_url_raw'
              )
              );
    
              $wp_customize->add_control(
                'set_hero_button_link',
                array(
                    'label' => 'Hero Bottom Link',
                    'description' => 'Please, type your hero button link here',
                    'section' => 'sec_hero',
                    'type' => 'url'
                )
                );

                // Hero Height
            $wp_customize -> add_setting (
              'set_hero_height',
              array(
                'type' => 'theme_mod',
                'default' => 800,
                'sanitize_callback' => 'absint'
              )
              );
    
              $wp_customize->add_control(
                'set_hero_height',
                array(
                    'label' => 'Hero Height',
                    'description' => 'Please, type your hero height here',
                    'section' => 'sec_hero',
                    'type' => 'url'
                )
                );

                // Hero Background
            $wp_customize -> add_setting (
              'set_hero_background',
              array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
              )
            )

              $wp_customize->add_control( new Wp_Costumize_Media_Control($wp_costumize,
                'set_hero_height',
                array(
                    'label' => 'Hero Image',
                    'section' => 'sec_hero',
                    'type' => 'image'

                ))
              );

  
}

add_action('customize_register', 'dsthemefinalmain_customizer');
?>