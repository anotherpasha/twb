<header class="navbar__subpage">
    <div class="container">

        <a href="{!! url('/') !!}" class="navbar--logo push-half--top"><img src="{{asset('images/logo-small.png')}}"></a>

        <nav class="navigation--home hard">
            @if(Auth::check())
            <ul class="list__inline">
                <li class="{!! url('logout') !!}"><a href="javascript:;" class="navigation--link black">Logout</a></li>
                <li class=""><a href="profile.html" class="navigation--link black">Profilku</a></li>
                <li class="navigation--button"><a href="submission.html" class="button button__primary button--small " data-target="login">Submit</a></li>
            </ul>
            @else
            <ul class="list__inline">
                <li class=""><a href="javascript:;" class="button button__quertiary  button--small toggle--modal" data-target="login">Login</a></li>
                <li><a href="javascript:;"><img class="image--responsive" src="{!! asset('/images/logo-twb-small.png') !!}"></a></li>
            </ul>
            @endif
        </nav>
    </div>

</header>