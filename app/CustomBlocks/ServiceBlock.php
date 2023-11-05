<?php 
add_action( 'lzb/init', function() {

    lazyblocks()->add_block( array(
        'id' => 72,
        'title' => 'Service Block',
        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    	<rect opacity="0.25" width="15" height="15" rx="4" transform="matrix(-1 0 0 1 22 7)" fill="currentColor" />
    	<rect width="15" height="15" rx="4" transform="matrix(-1 0 0 1 17 2)" fill="currentColor" />
    </svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/service-block',
        'description' => '',
        'category' => 'text',
        'category_label' => 'text',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'html' => false,
            'multiple' => true,
            'inserter' => true,
            'reusable' => true,
            'lock' => true,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
            'control_8509a84dd3' => array(
                'type' => 'repeater',
                'name' => 'services',
                'default' => '',
                'label' => 'Services',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'required' => 'false',
                'translate' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_b0182f4ba1' => array(
                'type' => 'text',
                'name' => 'label',
                'default' => '',
                'label' => 'Label',
                'help' => '',
                'child_of' => 'control_8509a84dd3',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'required' => 'false',
                'translate' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_7689794214' => array(
                'type' => 'text',
                'name' => 'title',
                'default' => '',
                'label' => 'Title',
                'help' => '',
                'child_of' => 'control_8509a84dd3',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'required' => 'false',
                'translate' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_0918c14c20' => array(
                'type' => 'textarea',
                'name' => 'description',
                'default' => '',
                'label' => 'Description',
                'help' => '',
                'child_of' => 'control_8509a84dd3',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'required' => 'false',
                'translate' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_8a99d34a7d' => array(
                'type' => 'image',
                'name' => 'image',
                'default' => '',
                'label' => 'Image',
                'help' => '',
                'child_of' => 'control_8509a84dd3',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'required' => 'false',
                'translate' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'insert_from_url' => 'false',
                'preview_size' => 'medium',
                'placeholder' => '',
                'characters_limit' => '',
            ),
        ),
        'code' => array(
            'output_method' => 'template',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
        ),
        'styles' => array(
        ),
        'condition' => array(
        ),
    ) );
    
} );