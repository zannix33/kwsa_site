@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'SEO Settings',
])


@section('contentFields')
    @formField('input', [
        'name' => 'seo_prefix',
        'label' => 'Global Title Prefix',
    ])
    @formField('input', [
        'name' => 'seo_suffix',
        'label' => 'Global Title Suffix',
    ])
@endsection
