<?php 
add_action( 'lzb/init', function() {

    lazyblocks()->add_block( array(
        'id' => 69,
        'title' => 'Intro Text',
        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    	<rect opacity="0.25" width="15" height="15" rx="4" transform="matrix(-1 0 0 1 22 7)" fill="currentColor" />
    	<rect width="15" height="15" rx="4" transform="matrix(-1 0 0 1 17 2)" fill="currentColor" />
    </svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/intro-text',
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
            'control_daca7940b8' => array(
                'type' => 'textarea',
                'name' => 'intro-text',
                'default' => '',
                'label' => 'Intro Text',
                'help' => '',
                'child_of' => '',
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
            'control_a589df4acc' => array(
                'type' => 'select',
                'name' => 'background',
                'default' => '',
                'label' => 'Background',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'required' => 'false',
                'translate' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'choices' => array(
                    array(
                        'label' => 'Sage Green',
                        'value' => 'bg-sage-green',
                    ),
                    array(
                        'label' => 'Dark Grey',
                        'value' => 'bg-dark-grey',
                    ),
                    array(
                        'label' => 'Terracotta',
                        'value' => 'bg-terracotta',
                    ),
                ),
                'allow_null' => 'false',
                'multiple' => 'false',
                'output_format' => '',
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