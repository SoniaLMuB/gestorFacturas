@extends('layouts.app')

@section('titulo')
    Bienvenido a tu sitio oficial de gestor de facturas
@endsection
@push('styles')
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
@endpush

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w8/12 lg:w-6/12 px-5">
                <img src="{{asset('imgs/facturas.jpg')}}" alt="Imagen de usuario"> --}}
            </div>
            
        </div>
    </div>

    
    

@endsection