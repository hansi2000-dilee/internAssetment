{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
        <a class="navbar-brand" href="{{ route('home') }}">School</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('student') }}">Student
                        Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('studentView') }}">View</a>
                </li>


            </ul>

        </div>
    </div>
</nav> --}}
{{--
/////////////////// --}}

<div class="top1nav col-12">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="page-title text-body">
                    <i class="uil uil-clock"></i> &nbsp;Opening Hours: 7.00 am - 10.00 pm
                </div>
            </div>
            <div class="col-7 offset-4 offset-lg-0 col-lg-4 text-body">

                <span class="login-site"><a href="#" class="toplinks ms-5 me-4"><i
                            class="uil uil-facebook"></i></a></span>
                |
                <span class="login-site"><a href="#" class="toplinks ms-5 me-4"><i
                            class="uil uil-instagram-alt"></i></a></span>
                |
                <span class="login-site"><a href="#" class="toplinks ms-5 me-4"><i
                            class="uil uil-twitter"></i></a></span>
            </div>
        </div>
    </div>
</div>

<!-- ============= COMPONENT ============== -->
<nav id="navbar_top" class="navbar shadow bottom navbar-expand-lg navbar-dark  border-dark">
    <div class="container">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo1.png') }}" class="logo" alt=""></a>
        <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">


            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-dark fw-bold fs-6 " href="{{ route('home') }}"> Home</a></li>
                <li class="nav-item"><a class="nav-link text-dark fw-bold fs-6 ms-5" href="{{ route('student') }}"> Registration</a></li>

                <li class="nav-item"><a class="nav-link text-dark fw-bold fs-6 ms-5" href="{{ route('studentView') }}"> View Students </a>
                </li>


                @if (Auth::user())
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}" class="nav-link text-dark fw-bold fs-6 ms-5"
                             @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                @else
                <li class="nav-item"><a class="nav-link text-dark fw-bold fs-6 ms-5" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link text-dark fw-bold fs-6 ms-5" href="{{ route('register') }}">Sign Up</a></li>

                @endif
            </ul>

        </div>
        <!-- navbar-collapse.// -->
    </div>
    <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->




<!-- container //  -->

