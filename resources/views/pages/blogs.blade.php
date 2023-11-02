 <!Doctype html>
 @include('layouts.app')
<link href=" {{ asset('style.css')}}" rel="stylesheet">




<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

    <div class="w-full mt-10 px-4">
        <div >
            <div class="flex flex-wrap  text-left mb-12">
                <div class="w-full lg:w-6/12 px-4">
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">
                        Nos articles de blog
                    </h1>
                    <!-- Description -->
                    <p class="text-gray-700 text-lg font-light">
                        Nous vous permettons de rester informés de toutes les dernières nouveautés technologiques et de partager nos connaissances avec vous.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="pt-14 border-t border-gray-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5">

            <a href="author.html" class="group">
                <div class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all">
                    <div class="flex flex-wrap items-center gap-8">
                        <div class="w-25 h-25 rounded-full overflow-hidden">
                            <img src="{{ asset('/images/BlogTri/desktop computer-rafiki.png') }}" alt="user" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-custom-xl text-dark mb-1">
                                Programmation
                            </h3>
                            <span class="flex items-center gap-2 text-custom-sm mt-2.5">
                                <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                <path d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z" fill />
                                <path d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z" fill />
                                </svg>
                                03 Postes publiés
                                </span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="author.html" class="group ">
                <div class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all ">
                    <div class="flex flex-wrap items-center gap-8">
                        <div class="w-25 h-25 rounded-full overflow-hidden">
                            <img src="{{ asset('/images/BlogTri/Innovation-amico.png') }}" alt="user" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-custom-xl text-dark mb-1">
                                Design
                            </h3>
                            <span class="flex items-center gap-2 text-custom-sm mt-2.5">
                                <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                <path d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z" fill />
                                <path d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z" fill />
                                </svg>
                                05 Postes publiés
                                </span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="author.html" class="group">
                <div class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all">
                    <div class="flex flex-wrap items-center gap-8">
                        <div class="w-25 h-25 rounded-full overflow-hidden">
                            <img src="{{ asset('/images/BlogTri/Online connection-amico.png') }}" alt="user" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-custom-xl text-dark mb-1">
                                Reseau
                            </h3>
                            <span class="flex items-center gap-2 text-custom-sm mt-2.5">
                                <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                <path d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z" fill />
                                <path d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z" fill />
                                </svg>
                                10 Postes publiés
                                </span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="author.html" class="group">
                <div class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all">
                    <div class="flex flex-wrap items-center gap-8">
                        <div class="w-25 h-25 rounded-full overflow-hidden">
                            <img src="{{ asset('/images/BlogTri/Mother Earth Day-cuate.png') }}" alt="user" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-custom-xl text-dark mb-1">
                                Autres
                            </h3>
                            <span class="flex items-center gap-2 text-custom-sm mt-2.5">
                                <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                <path d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z" fill />
                                <path d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z" fill />
                                </svg>
                                10 Postes publiés
                                </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
<div class="grid mt-5 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5">

<div class="group">
<div class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105">
<img src="{{  asset('images/blog-01.png')}}" alt="image" class="w-full" />
</div>
<h4>
<a href="" class="block text-dark font-bold text-xl mb-3.5">
<span class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">
Stylish Kitchen And Dining Room With Functional Ideas
</span>
</a>
</h4>
<p>
Lorem Ipsum is simply dummy text of the print and typesetting
industry...
</p>
<div class="flex flex-wrap gap-3 items-center justify-between mt-4.5">
<div class="flex items-center gap-2.5">
<div class="flex items-center gap-3">
<div class="flex w-6 h-6 rounded-full overflow-hidden">
<img src=" {{( asset('images/user-01.png'))}}" alt="user" />
</div>
<p class="text-sm">Adrio Devid</p>
</div>
<span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
<p class="text-sm">Sep 10, 2025</p>
</div>
<span class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full">Technology</span
                >
</div>
</div>

<div class="group">
<div class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105">
    <img src="{{  asset('images/blog-03.png')}}" alt="image" class="w-full" />
</div>
<h4>
<a href="../clarity-tailwind.preview.uideck.com/blog-single.html" class="block text-dark font-bold text-xl mb-3.5">
<span class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">
Stylish Kitchen And Dining Room With Functional Ideas
</span>
</a>
</h4>
<p>
Lorem Ipsum is simply dummy text of the print and typesetting
industry...
</p>
<div class="flex flex-wrap gap-3 items-center justify-between mt-4.5">
<div class="flex items-center gap-2.5">
<div class="flex items-center gap-3">
<div class="flex w-6 h-6 rounded-full overflow-hidden">
<img src="{{( asset('images/user-01.png'))}}" alt="user" />
</div>
<p class="text-sm">Adrio Devid</p>
</div>
<span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
<p class="text-sm">Sep 10, 2025</p>
</div>
<span class="inline-flex text-cyan-dark bg-cyan/[0.08] font-medium text-sm py-1 px-3 rounded-full">Culture</span
                >
</div>
</div>

<div class="group">
<div class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105">
    <img src="{{  asset('images/blog-02.png')}}" alt="image" class="w-full" />
</div>
<h4>
<a href="../clarity-tailwind.preview.uideck.com/blog-single.html" class="block text-dark font-bold text-xl mb-3.5">
<span class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">
Stylish Kitchen And Dining Room With Functional Ideas
</span>
</a>
</h4>
<p>
Lorem Ipsum is simply dummy text of the print and typesetting
industry...
</p>
<div class="flex flex-wrap gap-3 items-center justify-between mt-4.5">
<div class="flex items-center gap-2.5">
<div class="flex items-center gap-3">
<div class="flex w-6 h-6 rounded-full overflow-hidden">
    <img src="{{  asset('images/blog-01.png')}}" alt="image" class="w-full" />
</div>
<p class="text-sm">Adrio Devid</p>
</div>
<span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
<p class="text-sm">Sep 10, 2025</p>
</div>
<span class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full">Travel</span
                >
</div>
</div>




</div>
<div class="flex justify-center">
<div class="inline-flex items-center justify-center rounded-md border-[0.8px] border-gray-3 shadow-1 mt-17.5">
<button class="rounded-l-md text-[#5A6A85] py-1 lsm:py-2.5 px-3 lsm:px-4.5 [&:not(:last-child)]:border-r-[0.8px] border-gray-3 ease-in duration-300 hover:text-dark hover:bg-gray">
Previous
</button>
<button class="text-[#5A6A85] py-1 lsm:py-2.5 px-3 lsm:px-4.5 [&:not(:last-child)]:border-r-[0.8px] border-gray-3 ease-in duration-300 hover:text-dark hover:bg-gray">
1
</button>
<button class="text-[#5A6A85] py-1 lsm:py-2.5 px-3 lsm:px-4.5 [&:not(:last-child)]:border-r-[0.8px] border-gray-3 ease-in duration-300 hover:text-dark hover:bg-gray">
2
</button>
<button class="text-[#5A6A85] py-1 lsm:py-2.5 px-3 lsm:px-4.5 [&:not(:last-child)]:border-r-[0.8px] border-gray-3 ease-in duration-300 hover:text-dark hover:bg-gray">
3
</button>
<button class="text-[#5A6A85] py-1 lsm:py-2.5 px-3 lsm:px-4.5 [&:not(:last-child)]:border-r-[0.8px] border-gray-3 ease-in duration-300 hover:text-dark hover:bg-gray">
4
</button>
<button class="rounded-r-md text-[#5A6A85] py-1 lsm:py-2.5 px-3 lsm:px-4.5 [&:not(:last-child)]:border-r-[0.8px] border-gray-3 ease-in duration-300 hover:text-dark hover:bg-gray">
Next
</button>
</div>
</div>
</section>



<button class="hidden items-center justify-center w-10 h-10 rounded-[4px] shadow-solid-5 bg-dark hover:opacity-95 fixed bottom-8 right-8 z-999" @click="window.scrollTo({top: 0, behavior: 'smooth'})" @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ '!flex' : scrollTop }">
<svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
<path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
</svg>
</button>

<script defer src=" {{asset ('bundle.js')}}"></script>
@include('layouts.footer')

