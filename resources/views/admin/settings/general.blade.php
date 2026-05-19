@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Site Settings and Configuration',
])

@section('contentFields')
    @formField('input', [
        'name' => 'site_name',
        'label' => 'Site Name',
    ])
    @formField('input', [
        'name' => 'email_from',
        'label' => 'Email From',
    ])
    @formField('input', [
        'name' => 'email_to',
        'label' => 'Email To',
    ])
    @formField('input', [
        'name' => 'email_cc',
        'label' => 'Email CC',
    ])
    @formField('input', [
        'name' => 'phone',
        'label' => 'Phone',
    ])
    @formField('input', [
        'name' => 'header_btn_title',
        'label' => 'Header Button Title',
    ])
    @formField('input', [
        'name' => 'header_btn_link',
        'label' => 'Header Button Link',
    ])
    @formField('input', [
        'name' => 'footer_btn_title',
        'label' => 'Footer Button Title',
    ])
    @formField('input', [
        'name' => 'footer_btn_link',
        'label' => 'Footer Button Link',
    ])
@endsection
