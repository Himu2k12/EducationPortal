<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><i class="flaticon-university"></i> Dream <br><small>Study</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="course.html" class="nav-link">Courses</a></li>
                <li class="nav-item"><a href="teacher.html" class="nav-link">Teacher</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>

                @can('isSuper')
                    <li class="nav-item"><a href="{{url('/dashboard')}}" class="nav-link">Dashboard</a></li>
                @endcan
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

                @if(isset(Auth::user()->name))
                    <li class="nav-item cta">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{Auth::user()->name}}-Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                @else
                    <li class="nav-item cta"><a href="{{url('/login')}}" class="nav-link"><span>Login</span></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
