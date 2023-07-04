<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> --}}
    <!--link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> 
     --}}
    @stack('styles')
    @vite ('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #9147B2; }
        .cta-btn { color: #924DB0; }
        .upgrade-btn { background: #924DB0; }
        .upgrade-btn:hover { background: #924DB0; }
        .active-nav-link { background: #924DB0; }
        .nav-item:hover { background: #872DAF; }
        .account-link:hover { background: #924DB0; }

    </style>

</head>
<body class="bg-gray-100 antialiased">

    <!--ENCABEZADO DE LA PAGINA -->
    <header class="p-3 border-b  bg-pink-300 shadow">
        <div class="container mx-auto flex justify-between items-center">
            
            {{-- <a  class="text-3xl font-black">
                Devstagram
            </a> --}}
            <!--Aplicar Helper para verificar si esta autenticado-->
            @auth
                <a href="{{route('post.index')}}" class="text-xl text-gray-600 font-bold">Gestor de Facturas</a> 
                <!--Vinculo botón de publicar Post-->
                
                <!--p>Autenticado</p-->
                <nav class="flex items-center justify-center font-bold ">
                    <a href="{{route('post.index')}}" class="w-25 flex items-center gap-2  p-2 text-gray-600 rounded text-lg  font-font-bold cursor-pointer  hover:text-pink-500  hover:bg-pink-300 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{route('emisora.show')}}" class="w-25 flex items-center gap-2  p-2 text-gray-600 rounded text-lg  font-font-bold cursor-pointer  hover:text-pink-500  hover:bg-pink-300  transition-colors" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M4 16.5v-13h-.25a.75.75 0 010-1.5h12.5a.75.75 0 010 1.5H16v13h.25a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H4zm3-11a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM7.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM11 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />
                        </svg> 
                        Empresa Emisora
                    </a>
                    <a href="{{route('receptora.show')}}" class="w-25 flex items-center gap-2  p-2 text-gray-600 rounded text-lg  font-font-bold cursor-pointer  hover:text-pink-500  hover:bg-pink-300 transition-colors" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />
                        </svg>
                        Empresa Receptora
                    </a>
                    <!--Agregar seguridad logut---------------------------------------------------------------->
                    <form method="POST"action="#">
                        @csrf
                        <button type="submit" class="link-style flex items-center gap-2 p-2 text-gray-600 text-lg  font-font-bold cursor-pointer hover:text-pink-500  hover:bg-pink-300 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />
                            </svg> Cerrar Sesión
                        </button>
                    </form>
                </nav>
            @endauth 
            <!--Determinar que -->
            @guest
                <a href="#" class="text-3xl font-black">Gestor de Facturas</a>
                <!--Navegacion -->
                <nav class="flex gap-2 item-ceter">
                    <a class="font-bold uppercase text-gray-900 text-sm" href="#">Generar factura</a> 
                    <a class="font-bold uppercase text-gray-900 text-sm" href="{{route('login')}}">Login</a>
                    {{--<a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Crear cuenta</a> --}}
                </nav>
            @endguest

        </div>
    </header>
    <!--Contenido para cada una de las vistas-->
    <main class="container mx-auto ">
        <h2 class="font-black text-center text-3xl  bg-pink-100">
            @yield('titulo')
        </h2>
        <div class="bg-pink-100">
            @yield('contenido')
        </div>
       
    </main>
    <!--Pie de pagina -->
    <footer class="text-center bg-pink-300 p-3 text-gray-500 font-bold ">
        Sonia Lizbeth Muñoz Barrientos Gestor de facturas - Todos los derechos reservados {{now()->year}}
    </footer>       
</body>
</html>