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
        section {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <!-- Gogole Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
        rel="stylesheet" />

    <!-- AlpineJS -->
    <script
        defer
        src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind -->
    <script src="https://cdn-tailwindcss.vercel.app/"></script>

@endpush

@section('contenido')
    {{-- <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w8/12 lg:w-6/12 px-5">
                <img src="{{asset('imgs/facturas.jpg')}}" alt="Imagen de usuario">
            </div>
            
        </div>
    </div> --}}
    <!-- component -->
    <br>
    <!-- Card List Section -->
    <section x-data="xData()" class="bg-pinkS-100 py-10 px-12">
        <!-- Card Grid -->
        <div
            class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <template x-for="post in posts">
                <!-- Card Item -->
                <div
                    class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-pink-200 bg-white dark:bg-pink-100 duration-300 hover:-translate-y-1"
                    x-for="(post, index) in posts">
                    <!-- Clickable Area -->
                    <a :href="post.link" class="cursor-pointer">
                        <figure>
                            <!-- Image -->
                            <img
                                :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                                class="rounded-t h-72 w-full object-cover" />

                            <figcaption class="p-4">
                                <!-- Title -->
                                <p
                                    class="text-lg mb-4 font-bold leading-relaxed text-gray-900 dark:text-gray-900"
                                    x-text="post.title">
                                    <!-- Post Title -->
                                </p>

                                {{-- <!-- Description -->
                                <small
                                    class="leading-5 text-gray-500 dark:text-gray-400"
                                    x-text="post.description">
                                    <!-- Post Description -->
                                </small> --}}
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </template>
        </div>
        <br>
        <br>
    </section>

    <script>
        function xData() {
            /**
             * Shuffle an array
             * @param {Array} array
             * @source https://stackoverflow.com/a/2450976/6940144
             */
            function shuffle(array) {
                let currentIndex = array.length,
                    randomIndex;

                // While there remain elements to shuffle.
                while (currentIndex != 0) {
                    // Pick a remaining element.
                    randomIndex = Math.floor(Math.random() * currentIndex);
                    currentIndex--;

                    // And swap it with the current element.
                    [array[currentIndex], array[randomIndex]] = [
                        array[randomIndex],
                        array[currentIndex],
                    ];
                }

                return array;
            }

            const posts = [
                {
                    image:
                        "https://static.vecteezy.com/system/resources/previews/006/584/834/non_2x/illustration-graphic-cartoon-character-of-online-shopping-vector.jpg",
                    title: "Registrar Empresa emisora",
                    link:"{{ route('emisora.index')}}"
                    
                },
                {
                    image:
                        "https://images.unsplash.com/photo-1445077100181-a33e9ac94db0",
                    title: "Ver Empresa Emisoras ",
                    link:"{{ route('emisora.show')}}"
                    
                },
                {
                    image:
                        "https://static.vecteezy.com/system/resources/previews/006/511/808/non_2x/illustration-graphic-cartoon-character-of-small-business-free-vector.jpg",
                    title: "Registrar Empresa Receptora",
                    link:"{{ route('receptora.index')}}"
                    
                },
                {
                    image:
                        "https://images.unsplash.com/photo-1445077100181-a33e9ac94db0",
                    title: "Ver Empresa Receptoras",
                    link:"{{ route('receptora.show')}}"
                    
                }
            ];

            return {
                posts: posts
            };
        }
    </script>
        
    

@endsection