@php @endphp
@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Hero -->
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 ">
        <div class="flex flex-col items-center justify-between lg:flex-row mt-5">
            <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                <div class="max-w-xl mb-6">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Nous sécurisons vos logiciels<br class="hidden md:block "/>
                        et vos données informatiques.
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Nous vous proposons des services de maintenance de site, de création d'affiches et de
                        sécurisation de réseau.
                    </p>
                </div>
                <div class="font-montserrat mb-5">
                    <button
                        class="bg-black px-6 py-4 rounded-lg border-2 border-[#af7dec] border-solid text-white mr-2 mb-2"
                        id="button">
                        <a href="{{ route('team') }}">Equipe</a>
                    </button>
                    <button class="px-6 py-4 border-2 border-[#0c0f20] border-solid rounded-lg">
                        <a href="{{ route('contact') }}">Contact</a>
                    </button>
                </div>
            </div>
            <div class="  lg:w-1/2">
                {{--                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />--}}
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="{{ asset('header.jpg') }}" alt=""/>
            </div>
        </div>
    </div>
    <!-- How it works 200 -->
    <div class="bg-[#0c0f20]">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div>
                <h1 class="font-sans  text-white text-center font-bold  text-2xl mb-5">
                    Guide de Safety Io
                </h1>
            </div>
            <div class="grid gap-8 row-gap-5 md:row-gap-8 lg:grid-cols-3">

                <div
                    class="p-5 duration-300 transform  border-2 border-dashed rounded shadow-sm border-deep-purple-accent-100 hover:-translate-y-2">
                    <div class="flex items-center mb-2">
                        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-black rounded-full bg-white">
                            1
                        </p>
                        <p class="text-lg text-white font-bold leading-5">Confidentialité</p>
                    </div>
                    <p class="text-sm text-white">
                        les données et les systèmes doivent être protégés contre l'accès non autorisé
                    </p>
                </div>
                <div
                    class="p-5 duration-300 transform  border-2 border-dashed rounded shadow-sm border-deep-purple-accent-100 hover:-translate-y-2">
                    <div class="flex items-center mb-2">
                        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-black rounded-full bg-white">
                            2
                        </p>
                        <p class="text-lg text-white font-bold leading-5">Évolutivité</p>
                    </div>
                    <p class="text-sm text-white">
                        la capacité d'un système à être mis à jour et étendu pour répondre aux besoins changeants
                    </p>
                </div>
                <div
                    class="p-5 duration-300 transform  border-2 border-dashed rounded shadow-sm border-deep-purple-accent-100 hover:-translate-y-2">
                    <div class="flex items-center mb-2">
                        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-black rounded-full bg-white">
                            3
                        </p>
                        <p class="text-lg text-white font-bold leading-5">Sécurité</p>
                    </div>
                    <p class="text-sm text-white">
                        La protection d'un système contre les menaces et les vulnérabilités connues et inconnues
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- ====== Blog Section Start -->
    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 "
             id="services">
        <div class="container mx-auto">
            <div class="-mx-2 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div>
                        <h1 class="font-sans font-bold  text-2xl mb-5 ">
                            Nos services
                        </h1>

                        <div class="flex mx-auto mt-2">
                            <span class="inline-block w-12 h-1 bg-blue-500 rounded-full "></span>
                            <span class="inline-block w-4 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mx-4 mt-5 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img
                                {{--                                src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-01.jpg"--}}
                                src="{{ asset('webdev.jpg') }}"

                                alt="image"
                                class="w-full"
                            />
                        </div>
                        <div>
                            <h3>
                                <a
                                    href="#"
                                    class="font-sans    font-bold  text-1xl mb-5 "
                                >
                                    Programmation
                                </a>
                            </h3>
                            <p class="text-body-color text-base">
                                Nous proposons un service de création de site web, de maintenance et de création de
                                boîte mail professionnelle, grâce à notre équipe de développeurs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img
                                {{--                                src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-02.jpg"--}}
                                src="{{ asset('wendsn.jpg') }}"
                                alt="image"
                                class="w-full"
                            />
                        </div>
                        <div>
                            <h3>
                                <a
                                    href="#"
                                    class="font-sans   font-bold  text-1xl mb-5 "
                                >
                                    Design
                                </a>
                            </h3>
                            <p class="text-body-color text-base">
                                Pour que votre entreprise conserve son image, notre équipe de designers vous propose des
                                conceptions de qualité.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img
                                {{--                                src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-03.jpg"--}}
                                src="{{ asset('webrx.jpg') }}"


                                alt="image"
                                class="w-full"
                            />
                        </div>
                        <div>
                            <h3>
                                <a
                                    href="#"
                                    class="font-sans   font-bold  text-1xl mb-5 "

                                >
                                    Réseau
                                </a>
                            </h3>
                            <p class="text-body-color text-base">

                                Nous installons et assurons la maintenance du réseau de votre entreprise, avec notre
                                équipe d'experts IT.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

    <!-- FAQ  -->
    <section class="bg-[#0c0f20] text-white">
        <div class="sectionSize px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 items-start">
            <div>
                <h2 class="secondaryTitle bg-highlight3 p-5 mb-0 bg-center bg-100%">
                    FAQ
                </h2>
            </div>

            <div toggleElement class="w-full py-4">
                <div class="flex justify-between items-center">
                    <div question class="font-montserrat font-medium mr-auto">
                        Pourquoi travailler avec SafetyIo ?
                    </div>
                    <img src="{{ asset("assets/logos/CaretRight.svg")}}" alt="" class="transform transition-transform"/>
                </div>
                <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                    SafetyIo est une entreprise leader dans le domaine de la sécurité informatique. Elle propose une
                    gamme de produits et de services qui aident les entreprises à protéger leurs données et leurs
                    systèmes contre les cyberattaques
                </div>
            </div>
            <hr class="w-full bg-white"/>

            <div toggleElement class="w-full py-4">
                <div class="flex justify-between items-center">
                    <div question class="font-montserrat font-medium mr-auto">
                        Nos produits et services
                    </div>
                    <img src="{{ asset("assets/logos/CaretRight.svg")}}" alt="" class="transform transition-transform"/>
                </div>
                <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                    Nous proposons une gamme de solutions qui peuvent être adaptées à vos besoins spécifiques voir nos
                    <strong><a href="#services">services</a></strong> .
                </div>
            </div>
            <hr class="w-full bg-white"/>

            <div toggleElement class="w-full py-4">
                <div class="flex justify-between items-center">
                    <div question class="font-montserrat font-medium mr-auto">
                        Service client
                    </div>
                    <img src="{{ asset("assets/logos/CaretRight.svg")}}" alt="" class="transform transition-transform"/>
                </div>
                <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                    Notre équipe d'experts est disponible pour vous aider à choisir la solution qui vous convient le
                    mieux.
                </div>
            </div>
            <hr class="w-full bg-white"/>
        </div>
    </section>
    @include('layouts.footer')
@endsection

<script>
    window.addEventListener("load", function () {

        document.querySelectorAll('[toggleElement]').forEach((toggle) => {
            toggle.addEventListener("click", function () {
                console.log(toggle);
                const answerElement = toggle.querySelector("[answer]");
                const caretElement = toggle.querySelector("img");
                console.log(answerElement);
                if (answerElement.classList.contains("hidden")) {
                    answerElement.classList.remove("hidden");
                    caretElement.classList.add("rotate-90");
                } else {
                    answerElement.classList.add("hidden");
                    caretElement.classList.remove("rotate-90");
                }
            });
        });
    });
</script>

