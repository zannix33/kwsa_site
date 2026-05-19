@twillBlockTitle('Members')
@twillBlockTitleField('title', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('input', [
    'name' => 'title',
    'label' => 'Name',
    'required' => true
])

@formField('input', [
    'name' => 'job_title',
    'label' => 'Job Title',
    'required' => true
])

@formField('medias', [
    'name' => 'image',
    'label' => 'Cover Image',
    'required' => true,
])

@formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'type' => 'textarea',
    'rows' => 2,
    'required' => true
])
