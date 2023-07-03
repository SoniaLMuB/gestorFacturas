<!--Crear una directiva para incluir la navegacio -->
@extends('layouts.app')


<!--Directiva para crear el contenido que se envia al contenedor (@ield) -->
<!--section es toda la infromacion que va tener el contenedor-->
@section('titulo')
    <div>
        Rapido y confiable
    </div>
    
@endsection

<!--crear el contenido que se envia al contenedor de contenedido en el app -->
@section('contenido')

<style>
    .bg-background { background-image: url('imgs/fondo2.jpg');}
    .filter-blur {filter: blur(10px);}
    .brightness {
    filter: brightness(70%);
    }
</style>
<!--Contenido de la página principal -->

<div class="bg-pink-100 flex items-center justify-center flex-col min-h-screen "">
    <!-- main card -->
    <div class="bg-[#F4F5FA] p-10 rounded-xl">
        <!-- Frase de bienvenida-->
        <div class="flex flex-col justify-center items-center text-center">
            <div class="font-bold text-gray-700 text-center text-3xl ">
                ¡Bienvenido a tu espacio digital, donde <br>podras gestionar tus facturas!
            </div>
        </div>

        <!-- Frase del primer card -->
        <div class="flex flex-col md:flex-row space-x-0 md:space-x-8 space-y-12  md:space-y-0 justify-center items-center mt-10">
            <div class="bg-[#FFFBEC] rounded-xl">
                <div class="flex flex-col p-8 rounded-xl bg-white shadow-xl translate-x-4 translate-y-4 w-96 md:w-auto">
                    <!--img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Ice_logo.svg/138px-Ice_logo.svg.png?20191213230535" class="w-8"-->
                    <div class="mt-3 font-semibold text-lg text-center">Rapido, Seguro </div>
                </div>
            </div>
            <!--Frase del segundo Card-->
            <div class="bg-[#ECEEFF] rounded-xl">
                <div class="flex flex-col p-8 rounded-xl bg-white shadow-xl translate-x-4 translate-y-4 w-96 md:w-auto">
                    <div class="mt-3 font-semibold text-lg text-center">Sin olvidar su facil uso </div>
                </div>
            </div>
        </div>
        <br>
        <!-- imagen -->
        <div class="flex flex-col justify-center items-center text-center">
            <div id="whoobe-3fery" class="w-full md:w-64 justify-center items-center bg-white shadow-lg rounded-lg flex flex-col">
                <img src="{{asset('imgs/facturas.jpg')}}" alt="Imagen registro de usuarios" class="w-full h-auto object-cover rounded-t-lg" id="whoobe-ixxe5"> 
            </div>
        </div>

        <!--Botón que manda a la pagina de login -->
        {{-- <div class="flex justify-center">
            <a href="/crear-cuenta" class="bg-blue-500 hover:bg-sky-500 transition-colors px-4 py-3 rounded-full border border-[#F0F0F6] shadow-xl mt-4 font-bold text-center text-white">Registrate</a>
        </div> --}}
    </div>
</div>
  
    
@endsection