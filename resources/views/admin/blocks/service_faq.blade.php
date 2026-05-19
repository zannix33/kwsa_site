@twillBlockTitle('FAQ')
@twillBlockTitleField('title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'required' => true
])

@formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'type' => 'textarea',
    'rows' => 2,
    'required' => true
])
