@twillBlockTitle('Fee')
@twillBlockTitleField('fee_title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('medias', [
'name' => 'image',
'label' => 'Icon',
'max' => 1,
'withVideoUrl' => false
])

@formField('input', [
'name' => 'fee_title',
'label' => 'Fee Title',
])
