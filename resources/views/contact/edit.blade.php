<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@extends('global')


@section('content')
<div class="container">

    {!! Form::model($contact , array('method' => 'PATCH', 'route' => ['contact.update', $contact->id], 'class' =>'well form-horizontal', 'id' => 'contact_form')) !!}

   	 @include('contact.form', ['option' => 'Edit'])

{{!! Form::close() }}

</div>
    </div><!-- /.container -->
@stop
