@extends('layouts.app')

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">

@section('content')
    @foreach($questions as $question)
    <article class="media content-section">
        <form method="post" action="{{url('/user-profile')}}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $question->user_id }}">
        <a class="mr-2" href=""><button type="submit" class="buttontext"><img class="rounded-circle article-img" src="{{ $question->profpic }}"></button></a>
        </form>
            <div class="media-body">
            <div class="article-metadata">

                <form method="post" action="{{url('/user-profile')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $question->user_id }}">
                <a class="mr-2" href=""><button type="submit" class="buttontext">{{ $question->name }}</button></a>
                    </form>
                <small class="text-muted">Created: {{ $question->created_at }}</small>
            </div>
            <form method="post" action="{{url('/view-question')}}">
                @csrf
                <input type="hidden" name="quiz_id" value="{{ $question->id }}">
                <h2><a class="article-title" href=""><button type="submit" class="buttontext">{{ $question->title }}</button></a></h2>
            </form>
            <p class="article-content">{{ $question->question }}</p>

            <div class="quiz-icons">
                <i class="fa fa-envelope-o"></i>
                <i class="fa fa-thumbs-up"></i>
            </div>
        </div>

    </article>
    @endforeach

    <div style="padding-left: 40%">
        {!! $questions->render() !!}
    </div>
@endsection
