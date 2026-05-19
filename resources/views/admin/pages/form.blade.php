@extends('twill::layouts.form', [
    'contentFieldsetLabel' => 'Basic Info'
])

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'required' => true,
        'readonly' => true,
    ])

    @includeWhen(isset($item->form), $item->form)
    
@endsection

@section('sideFieldset')
    @if(seoEnabled())
        @include('admin._seo')
    @endif
@endsection
