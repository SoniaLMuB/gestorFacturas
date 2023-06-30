@extends('layouts.app')

@section('titulo')
    Inicia sesión administrador
@endsection
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <!--Insertar imagen utilizando "assert" (acceder a carpeta public)-->
            <img src="{{asset('imgs/facturas.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <!-- Formulario de registros -->
            <form action="{{route('login')}}" method="POST" novalidate>
                @csrf
                <!--Genera un token que genera el registro -->
                <!--Verificar la sesión-->
                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{session('mensaje')}}
                    </p>
                @endif 

                <div  class="mb-5">
                    <!--Usuario-->
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="text" placeholder="tu email" class="border p-3 w-full rounded-lg
                    @error('email') border-red-500  @enderror"
                    value="{{old('email')}}">
                </div>

                <div  class="mb-5">
                    <!--Contraseña-->
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input id="password" name="password" type="password" placeholder="tu contraseña" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Login" class="bg-pink-300 hover:bg-pink-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                
            </form>

        </div>

    </div>
@endsection