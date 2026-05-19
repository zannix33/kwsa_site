@extends('twill::layouts.form')

@section('contentFields')

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
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
@stop
