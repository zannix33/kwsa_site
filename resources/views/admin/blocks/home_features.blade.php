@twillBlockTitle('Features')
@twillBlockTitleField('feature_title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('medias', [
'name' => 'image',
'label' => 'Icon',
'max' => 1,
'withVideoUrl' => false
])

@formField('input', [
'name' => 'feature_title',
'label' => 'Feature Title',
])

@formField('input', [
    'name' => 'feature_content',
    'type' => 'textarea',
    'label' => 'Feature Content',
    'rows' => 4
])
