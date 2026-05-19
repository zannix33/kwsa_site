<!-- Edit Form Fields For terms here -->
@formField('input', [
    'name' => 'terms_nav_text',
    'label' => 'Navigation Text',
    'maxlength' => 100,
])

<br />

@formFieldset(['id' => 'content', 'title' => 'Content'])

    @formField('wysiwyg', [
        'name' => 'terms_content',
        'label' => 'Content',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Content',
    ])
@endformFieldset