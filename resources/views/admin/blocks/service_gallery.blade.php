@twillBlockTitle('Gallery Item')
    @twillBlockTitleField('title', ['hidePrefix' => false])
    @twillBlockIcon('text')

    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'required' => true
    ])

    @formField('medias', [
        'name' => 'image',
        'label' => 'Cover Image',
        'required' => true,
    ])
