@extends('global')

@section('content')
<h1>Contacts:</h1>
<nav><button type="submit" class="btn-primary" onClick="location.href = '{{ action('ContactController@create')}}'"> Add Contact </button></nav>

<div class="person">

@if($contacts->isEmpty())
<h3>Please  enter your first contact!</h3>
@else
<table style="width:100%; margin: 25px">
  <tr>
    <th>Name</th>
    <th>Email</th> 
    <th>Actions</th>
  </tr>

  @foreach ($contacts as $contact)
  <tr>
  <td> {{ $contact->last_name }} , {{ $contact->first_name }}</td>
    <td> {{ $contact->email }} </td> 
    @include('contact.action')
    

  </tr>
  @endforeach
  
</table>
@endif
		
@stop