@extends('layouts.app')

@section('content')


<h1>edit post</h1>
{!! Form::open(['action'=>['postsController@update',$post->id],'method'=>'POST'])!!}

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title',$post->title,['class'=>'form-control','placeholders'=>'title']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'body') }}
    {{ Form::text('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholders'=>'title']) }}
</div>
 
{{ Form::hidden('_method','PUT') }}
{{ Form::submit('submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
