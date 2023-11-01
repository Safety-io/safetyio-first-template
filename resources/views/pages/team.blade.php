@extends("layouts.app")
@section('title', 'Team')
@section('content')

<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

<!-- Page Container -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col mt-10">
        <div class="flex flex-col  ">
            <!-- Meet the Team -->
            <div class="container max-w-7xl px-4">
                <!-- Section Header -->
                <div class="flex flex-wrap justify-center text-center mb-12">
                    <div class="w-full lg:w-6/12 px-4">
                        <!-- Header -->
                        <h1 class="text-gray-900 text-4xl font-bold mb-4">
                            Notre formidable équipe
                        </h1>
                        <!-- Description -->
                        <p class="text-gray-700 text-lg font-light">
                            Nous aimons travailler avec vous dans les domaines suivants : design, programmation et réseaux.

                        </p>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="flex flex-wrap">
                    <!-- Member #1 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl  drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                     src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    {{ config('app.paul.name') }}
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2 hover:opacity-70">
                                     {{ config('app.paul.title') }}
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                        <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                    </a>
                                    <!-- github -->
                                    <a href="{{ config('app.paul.github') }}" class="flex rounded-full hover:bg-black-50  h-10 w-10">
                                        <i class="mdi mdi-github text-black-700 mx-auto mt-2"></i>
                                    </a>
                                    <!-- whatsapp -->
                                    <a href="{{ config('app.paul.whatsapp') }}" class="flex rounded-full hover:bg-green-50 h-10 w-10">
                                        <i class="mdi mdi-whatsapp text-green-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member #2 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                     src="https://images.unsplash.com/photo-1634896941598-b6b500a502a7?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    {{ config('app.jlk.name') }}
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    {{ config('app.jlk.title') }}
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                        <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                    </a>
                                    <!-- github -->
                                    <a href="{{ config('app.jlk.github') }}" class="flex rounded-full hover:bg-black-90 h-10 w-10">
                                        <i class="mdi mdi-github text-black-700 mx-auto mt-2"></i>
                                    </a>
                                    <!-- whatsapp -->
                                    <a href="{{ config('app.jlk.whatsapp') }}" class="flex rounded-full hover:bg-green-50 h-10 w-10">
                                        <i class="mdi mdi-whatsapp text-green-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member #3 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                     src="https://images.unsplash.com/photo-1634193295627-1cdddf751ebf?fit=clamp&w=400&h=400&q=80" alt="photo">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    {{ config('app.polly.name') }}
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    {{ config('app.polly.title') }}
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- whatsapp -->
                                    <a href="{{ config('app.polly.whatsapp') }}" class="flex rounded-full hover:bg-green-50 h-10 w-10">
                                    <i class="mdi mdi-whatsapp text-green-400 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                        <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member #4 -->
                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                     src="https://images.unsplash.com/photo-1635003913011-95971abba560?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    {{ config('app.rene.name') }}
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    {{ config('app.rene.title') }}
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- whatsapp -->
                                    <a href="{{ config('app.rene.whatsapp') }}" class="flex rounded-full hover:bg-green-50 h-10 w-10">
                                    <i class="mdi mdi-whatsapp text-green-400 mx-auto mt-2"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                        <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('layouts.footer')
@endsection

