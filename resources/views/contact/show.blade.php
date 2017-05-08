@extends('global')

@section('content')
<h1>{!! $contact->last_name !!} {!! $contact->first_name !!} : </h1>

<div class="person">
<p>First name: {!! $contact->first_name !!} </p>
<p>Last name: {!! $contact->last_name !!} </p>
<p>Email: {!! $contact->email !!} </p>
<p>Birthday: {!! $contact->birthday !!} </p>
<p>Phone: {!! $contact->phone_number !!} </p>
<p>Adress: {!! $contact->address !!}  {!! $contact->city !!} {!! $contact->state !!} {!! $contact->zip !!} </p>

    
    @include('contact.action')
    

@stop