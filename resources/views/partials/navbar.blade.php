<header class="navbar__subpage">
    <div class="container">

        <a href="{!! url('/') !!}" class="navbar--logo subpage push-half--top"><img src="{{asset('images/logo-small.png')}}"></a>
        <a href="{!! url('/') !!}" class="navbar--toggle subpage home"><span></span><span></span><span></span></a>

        <nav class="navigation--home hard hidden-on-small">
            @if(Auth::check())
            <ul class="list__inline">
                <li class=""><a href="{!! url('logout') !!}" class="navigation--link black">Logout</a></li>
                <li class=""><a href="{!! url('profile') !!}" class="navigation--link black">Profilku</a></li>
                <li class="navigation--button"><a href="{!! url('submission') !!}" class="button button__primary button--small " data-target="login">Submit</a></li>
            </ul>
            @else
            <ul class="list__inline">
              <li class=""><a href="javascript:;" id="login-button" class="button button__primary  button--small toggle--modal" data-target="login">Pemenang</a></li>
                <li class=""><a href="javascript:;" id="login-button" class="button button__quertiary  button--small toggle--modal" data-target="login">Login</a></li>
<!--                 <li><img class="image--responsive" src="{!! asset('/images/logo-twb-small.png') !!}"></li>
 -->            </ul>
            @endif
        </nav>
    </div>

</header>
