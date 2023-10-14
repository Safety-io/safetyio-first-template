@php use Illuminate\Support\Facades\Vite; @endphp
<nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <a href="{{ route('home') }}">
        <div class="flex items-center">
            <img src="{{ Vite::asset("resources/assets/Logo_black.svg")}}" alt="Logo" class="h-4" />
        </div>
    </a>
        <ul class="font-montserrat items-center hidden md:flex">
        <li class="mx-3 ">
            <a class="growing-underline" href="../howitworks.html">
                How it works
            </a>
        </li>
        <li class="growing-underline mx-3">
            <a href="../features.html">Features</a>
        </li>
        <li class="growing-underline mx-3">
            <a href="#team">Team</a>
        </li>
        <li class="growing-underline mx-3">
            <a href="{{ route("contact") }}">Contact</a>
        </li>
    </ul>
    <div class="font-montserrat hidden md:block">
        <button class="mr-6">Login</button>
        <button class="py-2 px-4 text-white bg-black rounded-3xl">
            Signup
        </button>
    </div>
    <div id="showMenu" class="md:hidden">
        <img src="{{ Vite::asset("resources/assets/logos/Menu.svg")}}" alt="Menu icon" />
    </div>
</nav>
