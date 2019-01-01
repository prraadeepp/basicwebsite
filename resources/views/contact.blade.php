<!doctype html>
@extends('layout.app')

@section('content')
<h1>contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">

      	{{Form::label('name', 'Name')}}
      	{{Form::text('name', '',['class'=>'form-control','placeholder' => 'enter name'])}}
      	
      </div>
      <div class="form-group">
      	{{ Form::label('email', 'E-Mail Address')}}
      	{{Form::text('email', '',['class'=>'form-control','placeholder' => 'enter Email'])}}
      </div>
      <div class="form-group">
      	{{ Form::label('message', 'message')}}
      	{{Form::textarea('message', '',['class'=>'form-control','placeholder' => 'entermessage'])}}
      </div>
      <div>
      	{{ Form::submit('submit', ['class'=>'btn-btn-primary'])}}
      
      </div>
     
{!! Form::close() !!}
 @endsection