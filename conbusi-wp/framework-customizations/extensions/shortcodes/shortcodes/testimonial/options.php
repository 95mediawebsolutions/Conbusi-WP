<?php if (!defined('FW')) die('forbidden');

$options = array(


    'testimonal'             => array(
        'label'         => __('Add your testimonal here', 'unyson'),
        'type'          => 'addable-popup',
        'template'      => '{{- testimonal_image }}',
        'popup-options' => array(


             'testimonal_image' => array(
             'label' => __('Upload testimonal Image', 'unyson'),
             'type' => 'upload'
          ),

            'testimonal_details' => array(
                'label' => __('Testimonal Goes Here', 'unyson'),
                'type'  => 'textarea',
            ),


             'testimonial_author_image' => array(
                'label' => __('Upload Testimonal Author Image', 'unyson'),
                'type'  => 'upload',
            ),

             'testimonal_author_fullname' => array(
                'label' => __('Testimonal Author Name', 'unyson'),
                'type'  => 'text',
            ),

             'testimonal_author_postion' => array(
                'label' => __('Testimonal Author Position', 'unyson'),
                'type'  => 'text',
            ),

        ),
    ),

    'custom_class' => array(

        'label' => __('Custom Class', 'unyson'),
        'type' => 'text'

    ),
);
