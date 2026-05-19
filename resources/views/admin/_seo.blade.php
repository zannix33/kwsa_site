@formField('input', [
    'name' => 'seo_title',
    'label' => 'SEO Title',
    'maxlength' => 65,
    'required' => true,
    'note' => 'What is this page about',
    'placeholder' => 'SEO Title',
])

@formField('input', [
    'name' => 'seo_description',
    'label' => 'SEO Description',
    'maxlength' => 170,
    'required' => true,
    'note' => 'Detailed description of the page',
    'placeholder' => 'SEO Description',
    'type' => 'textarea',
    'rows' => 3
])

@formField('input', [
    'name' => 'seo_canonical_url',
    'label' => 'SEO Canonical URL',
    'maxlength' => 100,
    'required' => true,
    'placeholder' => 'SEO Canonical URL',
])

@formField('input', [
    'name' => 'seo_keywords',
    'label' => 'SEO keywords',
    'maxlength' => 200,
    'required' => true,
    'note' => 'Detailed keywords of the page',
    'placeholder' => 'SEO keywords',
    'type' => 'textarea',
    'rows' => 3
])
