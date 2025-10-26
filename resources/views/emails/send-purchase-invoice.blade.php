@extends('layouts.emails.emails')
@section('content')

    <h3>{{ __('emails.dear_user', ['name' => $purchaseInvoice->supplier->commercial_name]) }}</h3>

    <h4>{{ __('emails.greetings') }}</h4>

    <p>{!! __('emails.find_an_invoice') !!}</p>

@endsection
