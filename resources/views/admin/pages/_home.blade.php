@formFieldset(['id' => 'attributes', 'title' => 'Header Area'])

@formField('input', [
'name' => 'header_title',
'label' => 'Header title',
])

    @formField('wysiwyg', [
        'name' => 'header_lead_copy',
        'label' => 'Header Lead Copy',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Header Lead Copy',
    ])


@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Features Section'])

    @formField('block_editor', [
        'name' => 'home_features',
        'label' => 'Add Features',
        'blocks' => ['home_features'],
    ])

@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Services Section'])


    @formField('input', [
        'name' => 'services_title',
        'label' => 'Services title',
    ])

    @formField('wysiwyg', [
        'name' => 'services_description',
        'label' => 'Services Description',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Header Lead Copy',
    ])

    @formField('block_editor', [
        'name' => 'home_services',
        'label' => 'Add Services',
        'blocks' => ['home_services'],
    ])
@endformFieldset


@formFieldset(['id' => 'attributes', 'title' => 'Client Logo Section'])

    @formField('block_editor', [
        'name' => 'client_logos',
        'label' => 'Add Client Logos',
        'blocks' => ['client_logos'],
    ])
@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'Who We Are Section'])

    @formField('input', [
        'name' => 'wwa_title',
        'label' => 'Who We Are Title',
    ])

    @formField('input', [
        'name' => 'wwa_quote',
        'label' => 'Who We Are quote',
    ])

    @formField('wysiwyg', [
        'name' => 'wwa_content',
        'label' => 'Content',
        'toolbarOptions' => [
        'bold',
        'italic'
        ],
        'placeholder' => 'Who We Are Content',
    ])

@endformFieldset

@formFieldset(['id' => 'attributes', 'title' => 'We Want You Section'])

    @formField('input', [
        'name' => 'wwy_title',
        'label' => 'We Want You Title',
    ])

    @formField('input', [
        'name' => 'wwy_description',
        'label' => 'We Want You Description',
        'type' => 'textarea'
    ])

    @formField('block_editor', [
        'name' => 'join_reason',
        'label' => 'Add Reasons',
        'blocks' => ['join_reason'],
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



