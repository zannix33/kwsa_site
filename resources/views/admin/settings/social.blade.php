@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Social Media',
])

@section('contentFields')

    @foreach(\Modulatte\Core\Concepts\Globals\GlobalSettings::$socials as $socialItem)
        @formField('input', [
            'label' => ucfirst($socialItem),
            'name' => $socialItem,
            'placeholder' => 'https://..'
        ])
    @endforeach

@endsection
