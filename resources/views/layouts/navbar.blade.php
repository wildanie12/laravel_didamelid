 <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">
     <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">
             {{ config('app.name', 'Laravel') }}
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <!-- Left Side Of Navbar -->
             <ul class="navbar-nav me-auto">
                 <li>
                     <a href="/" class="nav-link {{ Request::is('/') ? 'active' : false }}">Beranda</a>
                 </li>
                 <li>
                     <a href="/job" class="nav-link {{ Request::is('job*') ? 'active' : false }}">Lowongan Pekerjaan</a>
                 </li>

                 <li>
                     <a href="/company" class="nav-link {{ Request::is('company*') ? 'active' : false }}">Perusahaan</a>
                 </li>
             </ul>

             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ms-auto">
                 <!-- Authentication Links -->
                 @guest
                 <a href="https://wa.me/+6282118418130" target="_blank" class="btn btn-primary">Kirim Pekerjaan</a>
                 @if (Route::has('login'))
                 {{-- <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li> --}}
                 @endif

                 @if (Route::has('register'))
                 {{-- <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li> --}}
                 @endif
                 @else
                 <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>

                         <a href="/dashboard" class="dropdown-item">My Dashboard</a>
                     </div>
                 </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>
