<?php
if (function_exists('lazyblocks')):

    
    lazyblocks()->add_block(
        array(
            'title' => 'Bootstrap Alert',
            'icon' => 'dashicons dashicons-warning',
            'keywords' => array(
                0 => 'bootstrap',
                1 => 'alert',
            ),
            'slug' => 'lazyblock/bootstrap-alert',
            'description' => 'Implementation of Bootstrap Alert using Gutenberg and Lazy Blocks plugin',
            'category' => 'widgets',
            'category_label' => 'widgets',
            'supports' => array(
                'customClassName' => true,
                'anchor' => false,
                'align' => array(
                    0 => 'wide',
                    1 => 'full',
                ),
                'html' => false,
                'multiple' => true,
                'inserter' => true,
            ),
            'controls' => array(
                'control_d5c81445c4' => array(
                    'sort' => '1',
                    'child_of' => '',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'textarea',
                    'default' => 'Aww yeah, you successfully read this important alert message.',
                    'checked' => 'false',
                    'placement' => 'inspector',
                    'save_in_meta' => 'false',
                    'save_in_meta_name' => '',
                ),
                'control_be08f4493c' => array(
                    'sort' => '2',
                    'child_of' => '',
                    'label' => 'Type',
                    'name' => 'type',
                    'type' => 'select',
                    'choices' => array(
                        array(
                            'value' => 'primary',
                            'label' => 'Primary',
                        ),
                        array(
                            'value' => 'secondary',
                            'label' => 'Secondary',
                        ),
                        array(
                            'value' => 'success',
                            'label' => 'Success',
                        ),
                        array(
                            'value' => 'danger',
                            'label' => 'Danger',
                        ),
                        array(
                            'value' => 'warning',
                            'label' => 'Warning',
                        ),
                        array(
                            'value' => 'info',
                            'label' => 'Info',
                        ),
                        array(
                            'value' => 'light',
                            'label' => 'Light',
                        ),
                        array(
                            'value' => 'dark',
                            'label' => 'Dark',
                        ),
                    ),
                    'default' => 'info',
                    'checked' => 'false',
                    'placement' => 'inspector',
                    'save_in_meta' => 'false',
                    'save_in_meta_name' => '',
                ),
                'control_24e87b4ce2' => array(
                    'sort' => '3',
                    'child_of' => '',
                    'label' => 'Dismissible',
                    'name' => 'dismissible',
                    'type' => 'checkbox',
                    'default' => '',
                    'checked' => 'false',
                    'placement' => 'inspector',
                    'save_in_meta' => 'false',
                    'save_in_meta_name' => '',
                ),
            ),
            'code' => array(
                'editor_html' => '{{{content}}}',
                'editor_css' => '',
                'frontend_html' => '
                    <div class="alert alert-{{type}} {{#if dismissible}}alert-dismissible fade show{{/if}}" role="alert">
                        {{{content}}}
                        {{#if dismissible}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        {{/if}}
                    </div>
                    ',
                'frontend_css' => '',
            ),
            'condition' => array(
            ),
        )
    );
endif;