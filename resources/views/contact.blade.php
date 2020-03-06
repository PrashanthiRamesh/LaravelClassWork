@extends('nav')

@section('content')
<h1>Contact Us</h1>
{{ Form::open(array('url' => 'contact')) }}
{{ Form::label('Subject') }}
{{ Form::text('subject','Enter your subject') }}
<br />
{{ Form::label('Message') }}
 {{ Form::textarea('message','Enter your message') }}
<br />
{{ Form::submit() }}
{{ Form::close() }}
@stop