@twillBlockTitle('Process')
@twillBlockTitleField('process_title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('medias', [
'name' => 'image',
'label' => 'Icon',
'max' => 1,
'withVideoUrl' => false
])

@formField('input', [
'name' => 'process_title',
'label' => 'Process Title',
])
