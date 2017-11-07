@extends( 'layouts.app' )
@section('header-content')
    <div id="navbarTransparent" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href=" {{ route( 'web.home' ) }}">
                Home
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ route( 'web.items' ) }}">
                    Products
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="{{ route( 'web.items', 'computers' ) }}">
                        Computers
                    </a>
                    <a class="navbar-item" href="{{ route( 'web.items', 'television' ) }}">
                        Television
                    </a>
                    <a class="navbar-item" href="{{ route( 'web.items', 'phones' ) }}">
                        Phones
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    @guest
                    <p class="control">
                        <a class="bd-tw-button button" target="_blank" href="{{ route('login') }}">
                            <span class="icon"><i class="fa fa-twitter"></i></span>
                            <span>LogIn</span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-primary" href="{{ route('register') }}">
                          <span>Register</span>
                        </a>
                    </p>
                    @else
                        <p class="control">
                            <a class="todo" target="_blank" href="#">
                                Welcome {{ Auth::user()->name  }} <span class="caret"></span>
                            </a>

                        </p>
                        <p class="control">
                            <a class="button is-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection