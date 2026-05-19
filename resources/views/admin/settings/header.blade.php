@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Site Settings and Configuration',
])

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'header_text',
        'label' => 'Header Text',
        'toolbarOptions' => [
            'bold',
            'italic'
        ],
        'placeholder' => 'Header Text',
    ])

    @formField('input', [
        'name' => 'header_note',
        'label' => 'Header Note',
    ])
@endsection
