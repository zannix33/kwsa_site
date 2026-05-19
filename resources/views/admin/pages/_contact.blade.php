<!-- Edit Form Fields For contact here -->
@formField('input', [
    'name' => 'contact_nav_text',
    'label' => 'Navigation Text',
    'maxlength' => 100,
])

<br />


@section('fieldsets')
    @formFieldset(['id' => 'attributes', 'title' => 'Content'])        
        @formField('input', [
            'name' => 'contact_phone',
            'label' => 'Phone',
        ])

        @formField('input', [
            'name' => 'contact_email',
            'label' => 'Email',
        ])

        @formField('wysiwyg', [
            'name' => 'contact_address',
            'label' => 'Address',
            'toolbarOptions' => [
                'bold',
                'italic',
                ["align" => []],
            ],
            'maxlength' => 200,
            'editSource' => true,
        ])

        @formField('map', [
            'name' => 'contact_location',
            'label' => 'Map',
        ])
    @endformFieldset

@endsection


