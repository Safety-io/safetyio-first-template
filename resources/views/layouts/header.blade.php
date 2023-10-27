@php use Illuminate\Support\Facades\Vite; @endphp
<style>
    :root {
        --primary: #0c0f20;
        --secondary: #af7dec;
        --text: #ffffff;
    }
    #button{
        background-color: var(--secondary);
    }
</style>
<nav class="fixed flex justify-between py-2 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <a href="{{ route('home') }}">
        <img src="{{ asset("/logo.png")}}" alt="Logo"  class=" h-24 ml-5" />
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
        <button class="py-2 px-4 mt-7 text-white rounded" id="button">
            <a href="{{ route("contact") }}">Contact</a>
        </button>
    </div>
    <div id="showMenu" class="md:hidden mr-5 mt-8">
        <img src="{{ asset("assets/logos/Menu.svg")}}" alt="Menu icon" />
    </div>
</nav>
<script>
    const showMenu = document.getElementById('showMenu');
    const menu = document.querySelector('ul');
    showMenu.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>


