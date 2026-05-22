@twillBlockTitle('Reason to Join')
@twillBlockTitleField('join_reason', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
])

@formField('input', [
    'name' => 'lead',
    'label' => 'Lead',
    'type'  => 'textarea',
])

@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Content',
    'toolbarOptions' => [
        'bold',
        'italic',
        ['list' => 'bullet'],
    ],
    'placeholder' => 'Content',
])
