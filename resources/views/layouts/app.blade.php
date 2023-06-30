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
                <a href="#" class="text-3xl font-black">Gestor de Facturas</a>
                <!--Vinculo botón de publicar Post-->
                
                <!--p>Autenticado</p-->
                <nav class="flex gap-2 items-center font-bold">
                    Hola: 
                    <span class="font-normal">
                        {{-- {{auth()->user()->username}} --}}
                    </span>
                    <!--Agregar seguridad logut---------------------------------------------------------------->
                    <form method="POST"action="#">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                            Cerrar Sesión
                        </button>
                    </form>
                </nav>
            @endauth 
            <!--Determinar que -->
            @guest
                <a href="#" class="text-3xl font-black">Gestor de Facturas</a>
                <!--Navegacion -->
                <nav class="flex gap-2 item-ceter">
                     <a class="font-bold uppercase text-gray-900 text-sm" href="{{route('login')}}">Login</a>
                    {{--<a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Crear cuenta</a> --}}
                </nav>
            @endguest

        </div>
    </header>
    <!--Contenido para cada una de las vistas-->
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl  bg-pink-100">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <!--Pie de pagina -->
    <footer class="text-center bg-pink-300 p-3 text-gray-500 font-bold uppercase">
        Gestor de facturas - Todos los derechos reservados {{now()->year}}
    </footer>       
</body>
</html>