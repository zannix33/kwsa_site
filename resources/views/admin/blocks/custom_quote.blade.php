@twillBlockTitle('Quote')
@twillBlockTitleField('custom_quote', ['hidePrefix' => false])
@twillBlockIcon('text')

@formField('input', [
    'name' => 'custom_quote',
    'type' => 'textarea',
    'label' => 'Quote text',
    'maxlength' => 250,
    'rows' => 4
])
