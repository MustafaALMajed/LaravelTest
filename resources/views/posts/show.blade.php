@extends('layouts.app')

@section('content')
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small> Written on {{$post->created_at}}</small>
        <p><a href='/posts' class='btn btn-defualt'>Go back</a></p>
        <hr>
        <a href='/posts/{{$post->id}}/edit' class='btn btn-defualt'>Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class'=> "float-right"])!!}
        {{Form::hidden('_method', 'DELETE')}} 
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   
        {!!Form::close()!!}
@endsection