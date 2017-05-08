<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@extends('global')


@section('content')
<div class="container">

    {!! Form::open(array('url' => 'contact','class' =>'well form-horizontal', 'id' => 'contact_form')) !!}
     @include('contact.form', ['option' => 'Add'])
{{!! Form::close() }}

</div>
    </div><!-- /.container -->
@stop
