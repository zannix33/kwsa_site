@twillBlockTitle('Services')
@twillBlockTitleField('service_title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('medias', [
'name' => 'image',
'label' => 'Image',
'max' => 1,
'withVideoUrl' => false
])

@formField('input', [
'name' => 'service_title',
'label' => 'Service Title',
])

@formField('input', [
    'name' => 'service_content',
    'type' => 'textarea',
    'label' => 'Service Content',
    'rows' => 4
])
