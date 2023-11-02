@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="px-4 py-16 mx-auto  sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="w-full mt-10 px-4">
            <div >
                <div class="flex flex-wrap  text-left mb-12">
                    <div class="w-full lg:w-6/12 px-4">
                        <!-- Header -->
                        <h1 class="text-gray-900 text-4xl font-bold mb-4">
                            À propos
                        </h1>
                        <!-- Description -->
                        <p class="text-gray-700 text-lg font-light">
                            L'équipe de développement de SafetyIO est toujours heureuse de recevoir des commentaires et des suggestions des utilisateurs

                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid gap-6 row-gap-10 lg:grid-cols-2 mt-5">
            <div class="lg:py-6 lg:pr-16">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Programmation</p>
                        <p class="text-gray-700">
                            Nous proposons un service de création de site web, de maintenance et de création de boîte mail professionnelle, grâce à notre équipe de développeurs.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Design</p>
                        <p class="text-gray-700">
                            Pour que votre entreprise conserve son image, notre équipe de designers vous propose des conceptions de qualité.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Réseau</p>
                        <p class="text-gray-700">
                            Nous installons et assurons la maintenance du réseau de votre entreprise, avec notre équipe d'experts IT
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Mantorat</p>
                        <p class="text-gray-700">
                            ous proposons également des services de conception UI/UX web, d'installation de réseaux et de conception d'affiches.                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                                    <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <a href="{{ route('contact') }}" class="mb-2 text-lg font-bold">Contact</a>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img
                    class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
                    src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt=""
                />
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

