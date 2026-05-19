@twillBlockTitle('Benefits')
@twillBlockTitleField('benefits_title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('medias', [
'name' => 'image',
'label' => 'Icon',
'max' => 1,
'withVideoUrl' => false
])

@formField('input', [
'name' => 'benefits_title',
'label' => 'Benefits Title',
])
