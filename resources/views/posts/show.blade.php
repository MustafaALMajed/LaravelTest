@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small> Written on {{$post->created_at}}</small>
    <p><a href='/posts' class='btn btn-defualt'>Go back</a></p>

@endsection