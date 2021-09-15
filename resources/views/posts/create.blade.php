@extends('layouts.app')

@section('content')
      <h1>create posts</h1> 
      
   {!! Form::open(['action'=>'postsController@store','method'=>'POST']) !!}

       {{-- <form action="{{route('posts.store')}}" method="POST"> --}}
        {{-- {{ csrf_field() }} --}}

    {{-- <label for="title">TITLE-NAME:</label><br>
    <input type="text" id="title" name="title" placeholder="title"><br><br>
    <label for="body">BODY:</label><br>

    <input type="textarea"  id="article-ckeditor" name="body" placeholder="body"><br><br>
    <input type="submit" class="btn btn-primary" value="Submit">
  </form> --}}


<div class="form-group">
  {{ Form::label('title','Title') }}
  {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>

<div class="form-group">
  {{ Form::label('body','Body') }} 
  {{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body']) }} {{-- //article-ckeditor inaenda kuweka excell option kwenye body na inatakiwa iwe included kwenye packages --}}
</div>

<input type="submit" class="btn btn-primary" value="Submit">
{!! Form::close()!!}

@endsection