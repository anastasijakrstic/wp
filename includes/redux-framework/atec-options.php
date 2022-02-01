<?php

// START General Settings
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General settings', 'redux-framework' ),
        'id'               => 'general',
        'desc'             => __( 'General theme settings', 'redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );
    Redux::setSection( $opt_name,
        array(
            'title'            => __( 'Header Options', 'redux-framework' ),
            'id'               => 'atec-header-options',
            'subsection'       => true,
            'customizer_width' => '450px',
            'desc'             => '',
            'fields' => array(
                array(
                    'id' => 'main-logo',
                    'type' => 'media',
                    'title' => __('Header Logo', 'redux-framework'),
                    'subtitle' => __('Please use image file.', 'redux-framework'),
                    'desc' => __('More logo settings can be found in "Logo" section.', 'redux-framework'),
                    'url' => true,
                    'compiler' => false,
                    'output' => false,
                    'default' => ""
                ),
                array(
                    'id' => 'text-logo',
                    'type' => 'text',
                    'title' => __('Site Slogan', 'redux-framework'),
                    'desc' => __('It wil be used if you didn\'t define graphic logo previously.', 'redux-framework'),
                    'default' => ''
                ),

                array(
                    'id' => 'call-us-number',
                    'type' => 'text',
                    'title' => __('Phone number', 'redux-framework'),
                    'desc' => __('Add your phone number here.', 'redux-framework'),
                    'default' => ''
                ),
            )
        ) );


    //Page options
        Redux::setSection( $opt_name,
            array(
                'title'            => __( 'Page Options', 'redux-framework' ),
                'id'               => 'atec-page-options',
                'subsection'       => true,
                'customizer_width' => '450px',
                'desc'             => '',
                'fields' => array(
                    
                    array(
                        'id' => 'fb-link',
                        'type' => 'text',
                        'title' => __('Facebook link', 'redux-framework'),
                        'desc' => __('Add your fb link here including HTTPS', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'tw-link',
                        'type' => 'text',
                        'title' => __('Twitter link', 'redux-framework'),
                        'desc' => __('Add your tw link including HTTPS', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'ln-link',
                        'type' => 'text',
                        'title' => __('Linkedin link', 'redux-framework'),
                        'desc' => __('Add your linkedin link including HTTPS.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'in-link',
                        'type' => 'text',
                        'title' => __('Instagram link', 'redux-framework'),
                        'desc' => __('Add your Instagram link including HTTPS.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'yt-link',
                        'type' => 'text',
                        'title' => __('Youtube link', 'redux-framework'),
                        'desc' => __('Add your Youtube link including HTTPS.', 'redux-framework'),
                        'default' => ''
                    ),
                   
                )
            ) );

    //Contact options
        Redux::setSection( $opt_name,
            array(
                'title'            => __( 'Contact Informations', 'redux-framework' ),
                'id'               => 'atec-contact-options',
                'subsection'       => true,
                'customizer_width' => '450px',
                'desc'             => '',
                'fields' => array(

                    array(
                        'id' => 'atec-company-name',
                        'type' => 'text',
                        'title' => __('Company name', 'redux-framework'),
                        'desc' => __('Add your company name here.', 'redux-framework'),
                        'default' => ''
                    ),
                   
                    array(
                        'id' => 'atec-phone',
                        'type' => 'text',
                        'title' => __('Phone number', 'redux-framework'),
                        'desc' => __('Add your phone number here.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'atec-mobile',
                        'type' => 'text',
                        'title' => __('Mobile phone number', 'redux-framework'),
                        'desc' => __('Add your mobile phone number here.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'atec-fax',
                        'type' => 'text',
                        'title' => __('Fax number', 'redux-framework'),
                        'desc' => __('Add your fax number here.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'atec-email',
                        'type' => 'text',
                        'title' => __('Email address', 'redux-framework'),
                        'desc' => __('Add email address here.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'atec-address',
                        'type' => 'text',
                        'title' => __('Address', 'redux-framework'),
                        'desc' => __('Add your address here.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'atec-gmaps',
                        'type' => 'text',
                        'title' => __('Google maps link', 'redux-framework'),
                        'desc' => __('Add Google maps link here.', 'redux-framework'),
                        'default' => ''
                    ),
                )
            ) );

    //Footer options
        Redux::setSection( $opt_name,
            array(
                'title'            => __( 'Footer Options', 'redux-framework' ),
                'id'               => 'atec-footer-options',
                'subsection'       => true,
                'customizer_width' => '450px',
                'desc'             => '',
                'fields' => array(
                   
                    array(
                        'id' => 'privacy-link',
                        'type' => 'text',
                        'title' => __('Privacy Policy link', 'redux-framework'),
                        'desc' => __('Add your privacy policy page link without slash on beginning.', 'redux-framework'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'terms-link',
                        'type' => 'text',
                        'title' => __('Terms link', 'redux-framework'),
                        'desc' => __('Add your terms page link without slash on beginning.', 'redux-framework'),
                        'default' => ''
                    ),
                )
            ) );







    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );






// END General Settings
?>