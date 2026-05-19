@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 100,
    ])
    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'Product Description Content',
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
    @formField('medias', [
        'name' => 'images',
        'label' => 'Images',
        'max' => 5,
    ])
@stop

@section('fieldsets')
    @formFieldset(['id' => 'attributes', 'title' => 'Categories'])
        @formField('multi_select', [
            'name' => 'categories',
            'label' => 'Categories',
            'options' => $categories,
            'unpack' => false,
        ])
    @endformFieldset
    @formFieldset(['id' => 'attributes', 'title' => 'Pricing'])
        @formField('input', [
            'name' => 'price',
            'label' => 'Price',
            'type' => 'number',
            'prefix' => '$'
        ])
    @endformFieldset
    @formFieldset(['id' => 'attributes', 'title' => 'Shipping'])
        @formField('input', [
            'name' => 'shipping_cost',
            'label' => 'Shipping Cost',
            'type' => 'number',
            'prefix' => '$'
        ])
    @endformFieldset
@stop

@section('sideFieldset')
    @if(seoEnabled())
        @include('admin._seo')
    @endif
@endsection
