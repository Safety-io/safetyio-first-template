@php use Illuminate\Support\Facades\Vite; @endphp
@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Hero -->
    <section
        class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
        <div class="md:flex-1 md:mr-10">
            <h1 class="font-roboto text-5xl font-bold mb-7">
                Nous sécurisons vos
                <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
              logiciels
            </span>
            </h1>
            <p class="font-montserrat font-normal text-lg text-gray-900 mb-7">
                Nous proposons des services de sécurisation des systèmes d'information assortis d'audits de sécurité pour garantir une protection optimale de vos données de travail.
            </p>
            <div class="font-montserrat">
                <button class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2">
                    <a href="{{ route("team") }}">Team</a>
                </button>
                <button class="px-6 py-4 border-2 border-black border-solid rounded-lg">
                    <a href="{{ route("contact") }}">Contact</a>
                </button>
            </div>
        </div>
        <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
            <div class="relative">
                <img src="{{ Vite::asset("resources/assets/Highlight1.svg") }}" alt="" class="absolute -top-16 -left-10"/>
            </div>
            <img src="{{ Vite::asset("resources/assets/MacBook%20Pro.png")}}" alt="Macbook"/>
            <div class="relative">
                <img src="{{ Vite::asset("resources/assets/Highlight2.svg")}}" alt="" class="absolute -bottom-10 -right-6"/>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="bg-black text-white sectionSize">
        <div>
            <h1 class="font-roboto text-5xl font-bold mb-7">
                Guide de SafetyIo
            </h1>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    1
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Confidentialité</h3>
                <p class="text-center font-montserrat">
                    les données et les systèmes doivent être protégés contre l'accès non autorisé
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    2
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Évolutivité</h3>
                <p class="text-center font-montserrat">
                    la capacité d'un système à être mis à jour et étendu pour répondre aux besoins changeants
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    3
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">sécurité</h3>
                <p class="text-center font-montserrat">
                   La protection d'un système contre les menaces et les vulnérabilités connues et inconnues
                </p>
            </div>
        </div>
    </section>

    <!-- ====== Cards Section Start -->
    <section class="bg-[#F3F4F6] pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                >
                                    50+ Best creative website themes & templates
                                </a>
                            </h3>
                            <p class="text-body-color mb-7 text-base leading-relaxed">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                                Lorem consectetur adipiscing elit.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
                            >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                >
                                    The ultimate UX and UI guide to card design
                                </a>
                            </h3>
                            <p class="text-body-color mb-7 text-base leading-relaxed">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                                Lorem consectetur adipiscing elit.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
                            >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                >
                                    Creative Card Component designs graphic elements
                                </a>
                            </h3>
                            <p class="text-body-color mb-7 text-base leading-relaxed">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                                Lorem consectetur adipiscing elit.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
                            >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Cards Section End -->


    <!-- FAQ  -->
    <section class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
        <div>
            <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
                FAQ
            </h2>
        </div>

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Where can I get this HTML template?
                </div>
                <img src="{{ Vite::asset("resources/assets/logos/CaretRight.svg")}}" alt="" class="transform transition-transform"/>
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                You can download it on Gumroad.com
            </div>
        </div>
        <hr class="w-full bg-white"/>

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Is this HTML template free?
                </div>
                <img src="{{ Vite::asset("resources/assets/logos/CaretRight.svg")}}" alt="" class="transform transition-transform"/>
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! For you it is free.
            </div>
        </div>
        <hr class="w-full bg-white"/>

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Am I awesome?
                </div>
                <img src="{{ Vite::asset("resources/assets/logos/CaretRight.svg")}}" alt="" class="transform transition-transform"/>
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! No doubt about it.
            </div>
        </div>
        <hr class="w-full bg-white"/>

    </section>
    @include('layouts.footer')
@endsection
{{--</body>--}}
