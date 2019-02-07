@extends('layouts.app')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
@section('content')

    <div class="row1">

        <!-- code start -->

        <div class="twPc-div">
            <a class="twPc-bg twPc-block"></a>

            <div>

                @foreach($users as $user)
                    <a title="Mert S. Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
                        @if(!empty($user->profpic))
                            <img alt="Mert S. Kaplan" src="{{ $user->profpic }}" class="twPc-avatarImg">
                        @else
                            <img alt="Mert S. Kaplan" src="http://127.0.0.1:8000/uploads/default.jpg" class="twPc-avatarImg">
                        @endif
                    </a>

                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <a href="https://twitter.com/mertskaplan">{{ $user->name }}</a>
                        </div>
                        <span>
				<a href="https://twitter.com/mertskaplan"><span>{{ $user->email }}</span></a>
			</span>
                    </div>


                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-primary" style="padding-left: 21px;">Message</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <form class="form-horizontal" action="{{ url('/send-message') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="recepient_id" value="{{ $user->id }}">
                                        <div class="form-group">
                                            <textarea rows="7" class="form-control" name="message" required ></textarea>
                                        </div>

                                        <div class="form-group" style="padding: 8px;">
                                            <button type="submit" class="btn btn-success">Send</button>
                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>

                @endforeach

                <div class="twPc-divStats">
                    <ul class="twPc-Arrange">
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                                <span class="twPc-StatLabel twPc-block">Quiz</span>
                                <span class="twPc-StatValue">9.840</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                                <span class="twPc-StatLabel twPc-block">Following</span>
                                <span class="twPc-StatValue">885</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                                <span class="twPc-StatLabel twPc-block">Followers</span>
                                <span class="twPc-StatValue">1.810</span>
                            </a>
                        </li>


                    </ul>
                </div>

            </div>

        </div>
    </div>
    <!-- code end -->
    <div class="row">

        <div class="col-sm-2">
            <br>
            <p class="">{{ $user->name }}</p>
            <p class="">Status</p>
            <p class="">Website</p>
            @if(Auth::user()->id==$user->id)
                <p class=""><a href="{{ url('/profile-update') }}">Update profile</a> </p>
                <p class=""><a href="{{ url('/view-messages') }}">Messages</a> </p>
            @else
                <p class=""><a href="" data-toggle="modal" data-target="#myModal">Message {{ $user->name }}</a> </p>
            @endif
        </div>

        <div class="col-sm-10">
            <br>
            @foreach($questions as $question)
                <article class="media content-section">
                    <a class="mr-2" href=""><img class="rounded-circle article-img" src="{{ $question->profpic }}"></a>
                    <div class="media-body">
                        <div class="article-metadata">
                            <small class="text-muted">Created: {{ $question->created_at }}</small>
                        </div>
                        <h2><a class="article-title" href=""><button type="submit" class="buttontext">{{ $question->title }}</button></a></h2>
                        <p class="article-content">{{ $question->question }}</p>


                        <div class="quiz-icons">
                            <i class="fa fa-envelope-o"></i>
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                    </div>

                </article>
        @endforeach



        </div>
    </div>

@endsection
