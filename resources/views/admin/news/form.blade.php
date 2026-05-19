@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 100,
    ])

    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'Article Content',
        'toolbarOptions' => [
        ['header' => [2, 3, 4, 5, 6, false]],
        'bold',
        'italic',
        'underline',
        "blockquote",
        ['list' => 'ordered'],
        ['list' => 'bullet'],
        ["align" => []],
        'link',
        ],
        'placeholder' => 'Content',
    ])

    @if (config('modulatte.news.categories.enabled'))
        @if(config('modulatte.news.categories.multiple'))
            @formField('multi_select', [
                'name' => 'categories',
                'label' => 'Categories',
                'options' => $categories,
                'unpack' => false,
            ])
        @else
            @formField('select', [
                'name' => 'categories',
                'label' => 'Categories',
                'options' => $categories,
            ])
        @endif
    @endif
    @if (config('modulatte.news.tags'))
        @formField('tags')
    @endif
@stop

@section('sideFieldset')
    @if(seoEnabled())
        @include('admin._seo')
    @endif
@endsection
