@twillBlockTitle('Client Logo')
@twillBlockTitleField('logo_title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('medias', [
'name' => 'image',
'label' => 'Image',
'max' => 1,
'withVideoUrl' => false
])

@formField('input', [
'name' => 'logo_title',
'label' => 'Logo Title',
])
