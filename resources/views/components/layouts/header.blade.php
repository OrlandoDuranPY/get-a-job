<!-- ========================================
   = Desktop y tablet =
======================================== -->
<header class="border-b h-20 flex items-center shadow-sm text-gray-600">
    <div class="container mx-auto flex justify-between items-center relative">
        <a href="{{route('home')}}"><img src="{{ asset('img/logo.svg') }}" class="h-16" alt="Logo"></a>
        {{-- Menu --}}
        <nav class="absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex space-x-6">
                <li>
                    <a href="{{route('home')}}"
                        class="font-semibold @if (Route::is('home')) text-blue-500 @else hover:text-blue-500 @endif">Inicio</a>
                </li>
                <li>
                    <a href="{{route('vacancies.index')}}" class="font-semibold hover:text-blue-500">Vacantes</a>
                </li>
                <li>
                    <a href="{{route('curricula.index')}}" class="font-semibold hover:text-blue-500">Curriculums</a>
                </li>
            </ul>
        </nav>
        {{-- Sesion --}}
        @guest
        <nav>
            <ul class="flex space-x-6">
                <li>
                    <a href="{{route('login')}}" class="font-semibold hover:text-blue-500">Login</a>
                </li>
                <li>
                    <a href="#" class="font-semibold hover:text-blue-500">Register</a>
                </li>
            </ul>
        </nav>
        @endguest

        @auth
            <span class="font-semibold">{{Auth::user()->email}}</span>
        @endauth
    </div>
</header>

<!-- ========================================
   = Version Movil =
======================================== -->
<header>
    <h1>Movil</h1>
</header>
