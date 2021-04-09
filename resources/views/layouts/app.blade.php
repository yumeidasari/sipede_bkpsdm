<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js "></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                          @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('aset') }}">{{ __('Aset') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ url('aset/charts') }}">{{ __('Dashboard') }}</a>
                            </li>
                            @if(\Gate::allows('kelola-kategori'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('kategori') }}">{{ __('Kategori') }}</a>
                                </li>
                            @endif

                            @if(\Gate::allows('kelola-lokasi'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('lokasi') }}">{{ __('Lokasi') }}</a>
                                </li>
                            @endif

                            @if(\Gate::allows('kelola-satker'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('satker') }}">{{ __('Satker') }}</a>
                                </li>
                            @endif
                            @endauth
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Master <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('opd') }}">
                                        {{ __('Opd') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('pegawai') }}">
                                        {{ __('Pegawai') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('jabatan') }}">
                                        {{ __('Jabatan') }}
                                    </a>
									<a class="dropdown-item" href="{{ url('golongan') }}">
                                        {{ __('Golongan') }}
                                    </a>

                                </div>
                                
							</li>
							
							
							<li class="nav-item">
                                <a class="nav-link" href="{{ url('surattugas') }}">{{ __('Surat Tugas') }}</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="{{ url('notadinas') }}">{{ __('Nota Dinas') }}</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="{{ url('spd') }}">{{ __('SPD') }}</a>
                            </li>
					</ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                            <?php /*<!--
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                -->
                                */?>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        @stack('scripts')
    </div>
</body>
</html>
