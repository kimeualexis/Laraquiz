@extends('layouts.app')
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">

@section('content')
    <article class="media content-section">
        <img class="rounded-circle article-img" src="">
        <div class="media-body">
            <div class="article-metadata">
                <a class="mr-2" href="">Author</a>
                <small class="text-muted">{{ $question->created_at }}</small>
                <div class="">
                    <a class="btn btn-secondary btn-sn mt-1 mb-1" href="">Update</a>
                    <a class="btn btn-danger btn-sn mt-1 mb-1" href="">Delete</a>
                </div>
            </div>
            <h2 class="article-title">{{ $question->title }}</h2>
            <p class="article-content">{{ $question->question }}</p>


            <div class="article-metadata">
                <h5 class="text-secondary text-outline-info">Comments:</h5>
            </div>
            <p>This is a comment. - <a class="mr-2" href="">Author</a></p>

            <div class="">
                <a class="btn btn-secondary btn-sn mt-1 mb-1" href="">Update</a>
                <a class="btn btn-danger btn-sn mt-1 mb-1" href="">Delete</a>
            </div>


        </div>


    </article>
@endsection
