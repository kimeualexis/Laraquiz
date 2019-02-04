@extends('layouts.app')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

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
    <!-- code end -->
</div>
@endsection
