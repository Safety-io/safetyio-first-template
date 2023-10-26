@php use Illuminate\Support\Facades\Vite; @endphp
<nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <a href="{{ route('home') }}">
        <div class="p-5 flex items-center">
            <img src="{{ asset("assets/Logo_black.svg")}}" alt="Logo" class="h-4" />
        </div>
    </a>
        <ul class="font-montserrat items-center hidden md:flex">
        <li class="mx-3 ">
            <a class="growing-underline" href="{{ route('home') }}">Accueil</a>
        </li>
        <li class="growing-underline mx-3">
            <a href="{{ route('about') }}">À propos</a>
        </li>
        <li class="growing-underline mx-3">
            <a href="{{ route('team') }}">Equipe</a>
        </li>
        <li class="growing-underline mx-3">
            <a href="{{ route('pages.blog') }}">Blog</a>
        </li>
    </ul>
    <div class="font-montserrat hidden md:block">
        <button class="py-2 px-4 text-white bg-black rounded">
            <a href="{{ route("contact") }}">Contact</a>
        </button>
    </div>
    <div id="showMenu" class="md:hidden mr-10 mt-3">
        <img src="{{ asset("assets/logos/Menu.svg")}}" alt="Menu icon" />
    </div>
</nav>


