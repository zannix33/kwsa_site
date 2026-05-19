@formFieldset(['id' => 'attributes', 'title' => 'Header Area'])
    @formField('wysiwyg', [
        'name' => 'header_lead_copy',
        'label' => 'Header Lead Copy',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Header Lead Copy',
    ])

    @formField('input', [
        'name' => 'header_contact',
        'label' => 'Header Contact',
    ])
@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Features Section'])

    @formField('input', [
        'name' => 'home_features_content',
        'label' => 'Features Content',
        'type' => 'textarea',
    ])

    @formField('block_editor', [
        'name' => 'home_features',
        'label' => 'Add Features',
        'blocks' => ['home_features'],
    ])

@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'About Section'])

    @formField('input', [
        'name' => 'about_header',
        'label' => 'About Header',
        'type'  => 'textarea',
    ])

    @formField('wysiwyg', [
        'name' => 'about_text',
        'label' => 'About Text',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Header Lead Copy',
    ])

    @formField('input', [
        'name' => 'about_contact_text',
        'label' => 'Contact Text',
    ])

@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Benefits Section'])

    @formField('input', [
        'name' => 'benefits_text',
        'label' => 'Benefits Text',
    ])

    @formField('block_editor', [
        'name' => 'benefits_provide',
        'label' => 'Add Benefits',
        'blocks' => ['benefits_provide'],
    ])

    @formField('medias', [
        'name' => 'benefits_image_1',
        'label' => 'Icon 1',
        'max' => 1,
        'withVideoUrl' => false
    ])

    @formField('input', [
        'name' => 'benefits_caption_1',
        'label' => 'Benefits Caption 1',
    ])

    @formField('medias', [
        'name' => 'benefits_image_2',
        'label' => 'Icon 2',
        'max' => 1,
        'withVideoUrl' => false
    ])

    @formField('input', [
        'name' => 'benefits_caption_2',
        'label' => 'Benefits Caption 2',
    ])

    @formField('medias', [
        'name' => 'benefits_image_3',
        'label' => 'Icon 3',
        'max' => 1,
        'withVideoUrl' => false
    ])

    @formField('input', [
        'name' => 'benefits_caption_3',
        'label' => 'Benefits Caption 3',
    ])

    @formField('medias', [
        'name' => 'benefits_image_4',
        'label' => 'Icon 4',
        'max' => 1,
        'withVideoUrl' => false
    ])

    @formField('input', [
        'name' => 'benefits_caption_4',
        'label' => 'Benefits Caption 4',
    ])

    @formField('medias', [
        'name' => 'benefits_image_5',
        'label' => 'Icon 5',
        'max' => 1,
        'withVideoUrl' => false
    ])

    @formField('input', [
        'name' => 'benefits_caption_5',
        'label' => 'Benefits Caption 5',
    ])

    {{--@formField('block_editor', [
        'name' => 'benefits_fee',
        'label' => 'Add Fee',
        'blocks' => ['benefits_fee'],
    ])--}}

@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Process Section'])

    @formField('input', [
        'name' => 'process_text',
        'label' => 'Process Text',
    ])

    @formField('block_editor', [
        'name' => 'process_block',
        'label' => 'Add Process',
        'blocks' => ['process_block'],
    ])
@endformFieldset


@formFieldset(['id' => 'attributes', 'title' => 'Contact Section'])

    @formField('input', [
        'name' => 'contact_title',
        'label' => 'Contact Title',
    ])

    @formField('input', [
        'name' => 'contact_text',
        'label' => 'Contact Text',
    ])

@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Footer Section'])

    @formField('input', [
        'name' => 'footer_title',
        'label' => 'Footer Title',
    ])

    @formField('wysiwyg', [
        'name' => 'footer_text',
        'label' => 'Footer Text',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Footer Text',
    ])

    @formField('wysiwyg', [
        'name' => 'footer_right_text',
        'label' => 'Footer Right Text',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Footer Right Text',
    ])

    @formField('input', [
        'name' => 'footer_right_note',
        'label' => 'Footer Right Note',
    ])

@endformFieldset

