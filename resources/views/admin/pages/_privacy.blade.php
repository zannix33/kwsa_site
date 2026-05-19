<!-- Edit Form Fields For privacy here -->
@formField('input', [
    'name' => 'privacy_nav_text',
    'label' => 'Navigation Text',
    'maxlength' => 100,
])

<br />

@formFieldset(['id' => 'content', 'title' => 'Content'])

    @formField('wysiwyg', [
        'name' => 'privacy_content',
        'label' => 'Content',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Content',
    ])
@endformFieldset