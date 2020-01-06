<?php if (!defined('FW')) die('forbidden');

$options = array(

    'faq_image' => array(
        'label' => __('Upload Faq Image', 'unyson'),
        'type' => 'upload'
    ),

     'faq_header' => array(
                'label' => __('Faq header goes here', 'unyson'),
                'type'  => 'text',
            ),

    'faqs'             => array(
        'label'         => __('Add your faqs here', 'unyson'),
        'type'          => 'addable-popup',
        'template'      => '{{- faq_question }}',
        'popup-options' => array(

            'faq_question' => array(
                'label' => __('Faq Question', 'unyson'),
                'type'  => 'text',
            ),

             'faq_answer' => array(
                'label' => __('Faq Answer', 'unyson'),
                'type'  => 'text',
            ),


        ),
    ),

    'custom_class' => array(

        'label' => __('Custom Class', 'unyson'),
        'type' => 'text'

    ),
);
