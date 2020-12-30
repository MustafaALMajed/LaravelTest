@extends('layouts.app')

@section('content')
        <h1>{{$post->title}}</h1>
        <img src='/storage/cover_images/{{$post->cover_image}}' style='width:100%'>
        <br><br>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small> Written on {{$post->created_at}} by  {{$post->user->name}}</small>
        <p><a href='/posts' class='btn btn-outline-secondary'>Go back</a></p>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)

        <hr>
        <a href='/posts/{{$post->id}}/edit' class='btn  btn-outline-secondary'>Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class'=> "float-right"])!!}
            {{Form::hidden('_method', 'DELETE')}} 
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}   
        {!!Form::close()!!}
            @endif
        @endif

@endsection