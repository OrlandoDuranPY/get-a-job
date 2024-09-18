<!-- ========================================
   = Desktop y tablet =
======================================== -->
<header class="border-b h-16 flex items-center">
    <div class="container mx-auto flex justify-between items-center relative">
        <img src="{{ asset('img/logo.svg') }}" class="h-14" alt="Logo">
        {{-- Menu --}}
        <nav class="absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex space-x-6">
                <li>
                    <a href="#" class="hover:text-blue-500">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:text-blue-500">Vacantes</a>
                </li>
                <li>
                    <a href="#" class="hover:text-blue-500">Curriculums</a>
                </li>
            </ul>
        </nav>
        {{-- Sesion --}}
        <nav>
            <ul class="flex space-x-6">
                <li>
                    <a href="#" class="hover:text-blue-500">Login</a>
                </li>
                <li>
                    <a href="#" class="hover:text-blue-500">Register</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- ========================================
   = Version Movil =
======================================== -->
<header>
    <h1>Movil</h1>
</header>
