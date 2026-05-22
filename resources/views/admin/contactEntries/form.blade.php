@extends('twill::layouts.contact')

@section('contentFields')
<a17-fieldset>
<br>
Name: {{$item->full_name}}<br>
Email: {{$item->email}}<br>
Company: {{$item->company}}<br>
Phone: {{$item->phone}}<br>
Date: {{$item->submitted_at}}<br>
Subject: {{$item->subject}}
@if (!empty($item->data['address']))
    <br/>Address:
    {!! nl2br($item->data['address']) !!}
@endif

@if (!empty($item->data['city']))
    <br/>Town\City:
    {!! nl2br($item->data['city']) !!}
@endif

@if (!empty($item->data['pet_name']))
    <br/>Pet Name:
    {!! nl2br($item->data['pet_name']) !!}
@endif

@if (!empty($item->data['product_name']))
    <br/>Drug or Prodcut Name:
    {!! nl2br($item->data['product_name']) !!}
@endif

@if (!empty($item->data['product_size']))
    <br/>Dosage / Size / Strength:
    {!! nl2br($item->data['product_size']) !!}
@endif

@if (!empty($item->data['quantity']))
    <br/>Quantity:
    {!! nl2br($item->data['quantity']) !!}
@endif

@if (!empty($item->data['pet_owner_address']))
    <br/>Pet Owner Address:
    {!! nl2br($item->data['pet_owner_address']) !!}
@endif

@if (!empty($item->data['home_phone']))
    <br/>Home Phone:
    {!! nl2br($item->data['home_phone']) !!}
@endif

@if (!empty($item->data['referred']))
    <br/>Referral:
    {!! nl2br($item->data['referred']) !!}
@endif

@if (!empty($item->data['previous_clinic']))
    <br/>Previous Clinic:
    {!! nl2br($item->data['previous_clinic']) !!}
@endif

@if (!empty($item->data['pet_detail']))
    <br/>Pet Details:
    {!! nl2br($item->data['pet_detail']) !!}
@endif
<br>
Message: {{$item->message}}
</a17-fieldset>


@stop
