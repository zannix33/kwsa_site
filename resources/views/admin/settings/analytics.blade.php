@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Analytics Settings',
])

@section('contentFields')
    @formField('input', [
        'name' => 'google_analytics_code',
        'label' => 'Google Analytics Code',
        'type' => 'textarea',
        'rows' => 5
    ])
    @formField('input', [
        'name' => 'google_tag_manager_head_script',
        'label' => 'Google Tag Manager Head Script',
        'type' => 'textarea',
    'rows' => 5
    ])
    @formField('input', [
        'name' => 'google_tag_manager_body_script',
        'label' => 'Google Tag Manager Body Script',
        'type' => 'textarea',
        'rows' => 5
    ])
@endsection
