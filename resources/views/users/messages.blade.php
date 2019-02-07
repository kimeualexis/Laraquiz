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
                <p class=""><a href="{{ url('/view-messages') }}">Messages</a> </p>
            @else
                <p class=""><a href="" data-toggle="modal" data-target="#myModal">Message {{ $user->name }}</a> </p>
            @endif
        </div>

        <div class="col-sm-10">
            <br>

            <article class="media content-section">

                <div class="media-body">
                    <div class="article">

                        <form method="post" action="">
                            @csrf
                            <input type="hidden" name="user_id" value="">
                        </form>

                    </div>

                    <table class="table table-hover">
                        <h3 class="text-primary text-center">Messages</h3>

                        <tr><thead><th>Select</th><th>Sender</th><th>Message</th><th style="padding-left: 9%;">Date</th></thead></tr>
                    @foreach($messages as $message)
                        @if(empty($message->status))
                    <tr class="unread">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="view-message"><a href='user-profile/{{ $message->user_id }}'>{{ $message->name }}</a></td>

                        <td class="view-message "><a href='read-message/{{ $message->id }}'>{{ $message->message }}</a></td>
                        <td class="view-message  text-right">{{ $message->created_at }}</td>
                    </tr>
                        @else
                    <tr class="read">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="view-message "><a href="">{{ $message->name }}</a></td>
                        <td class="view-message "><a href='read-message/{{ $message->id }}'>{{ $message->message }}</a></td>
                        <td class="view-message  text-right">{{ $message->created_at }}</td>
                    </tr>
                        @endif
                     @endforeach
                    </table>

                </div>

            </article>



        </div>
    </div>

@endsection









