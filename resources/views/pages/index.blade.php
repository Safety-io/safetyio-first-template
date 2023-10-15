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
            <h2 class="secondaryTitle bg-underline2 bg-100%">Introduction</h2>
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
                <h3 class="font-montserrat font-medium text-xl mb-2">d'audits de sécurité</h3>
                <p class="text-center font-montserrat">
                    Des audits réguliers permettent de s'assurer que vos systèmes d'information sont parfaitement sécurisés. Nous offrons des audits fiables et efficaces, effectués par une équipe d'experts qualifiés.
                </p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="sectionSize bg-secondary">
        <div>
            <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
        </div>
        <div class="md:grid md:grid-cols-2 md:grid-rows-2">

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src="{{ Vite::asset("resources/assets/logos/Heart.svg")}}" alt='' class="h-7 mr-4"/>
                <div>
                    <h3 class="font-semibold text-2xl">Services de sécurisation des systèmes d'information</h3>
                    <p>
                        Nous offrons des solutions performantes de sécurité des systèmes d'information grâce à l'utilisation de techniques pointues.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src="{{ Vite::asset("resources/assets/logos/Heart.svg")}}" alt='' class="h-7 mr-4"/>
                <div>
                    <h3 class="font-semibold text-2xl">Réalisation d'audits de sécurité</h3>
                    <p>
                        Nous mettons en place des audits de sécurité réguliers pour assurer une sécurité totale de vos données.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src="{{ Vite::asset("resources/assets/logos/Heart.svg")}}" alt='' class="h-7 mr-4"/>
                <div>
                    <h3 class="font-semibold text-2xl">Mise en place de mesures de prévention et de protection</h3>
                    <p>
                        Nous garantissons la mise en place des meilleures solutions pour garantir une protection maximale contre les menaces existantes.
                    </p>
                </div>
            </div>

            {{--<div class="flex items-start font-montserrat my-6 mr-10">
                <img src="{{ Vite::asset("resources/assets/logos/Heart.svg")}}" alt='' class="h-7 mr-4"/>
                <div>
                    <h3 class="font-semibold text-2xl">Feature #4</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>--}}

        </div>
    </section>

    <!-- Pricing -->
    <section class="sectionSize bg-secondary py-0">
        <div>
            <h2 class="secondaryTitle bg-underline4 mb-0 bg-100%">Team</h2>
        </div>
        <div class="flex w-full flex-col md:flex-row">

            <div
                class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Good
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $25
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

            <div
                class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-12'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Bad
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $40
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

            <div
                class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Ugly
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $50
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src="{{ Vite::asset("resources/assets/logos/CheckedBox.svg")}}" alt="" class="mr-1"/>
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

        </div>
    </section>

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
