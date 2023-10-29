@include('layouts.app')

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">

        <div class="lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover object-center lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[36rem]"
                 src="{{ $blog->image }}"
                 alt="">
{{--            {{ dd($blog) }}--}}

            <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">
                <p class="text-5xl font-semibold text-blue-500 ">“</p>

                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl lg:w-96">
                    {{ $blog->title }}
                </h1>

                <p class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 ">
                    “ {{ $blog->content }} ”
                </p>

                <h3 class="mt-6 text-lg font-medium text-blue-500">{{ $blog->auteur }}</h3>
                <p class="text-gray-600 dark:text-gray-300">{{ $blog->read_time . " minutes" }}</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="mt-6 md:flex md:items-center md:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Plus d'articles
                </h1>

                <div class="flex mx-auto mt-6">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full "></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            {{--            <div class="flex justify-between mt-8 md:mt-0">--}}
            {{--                <button id="left" title="left arrow" class="p-2 mx-3 text-gray-800 transition-colors duration-300 border rounded-full rtl:-scale-x-100 dark:text-gray-200 dark:hover:bg-gray-800 dark:border-gray-700 hover:bg-gray-100">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />--}}
            {{--                    </svg>--}}
            {{--                </button>--}}

            {{--                <button id="right" title="right arrow" class="p-2 text-gray-800 transition-colors duration-300 border rounded-full rtl:-scale-x-100 dark:text-gray-200 dark:hover:bg-gray-800 dark:border-gray-700 hover:bg-gray-100">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />--}}
            {{--                    </svg>--}}
            {{--                </button>--}}
            {{--            </div>--}}

        </div>

        <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
            @foreach($latest as $blog)
                <div class="p-8 border rounded-lg dark:border-gray-700">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl lg:w-96">
                        {{ substr($blog->title, 0, 20) . " ..." }}
                    </h1>

                    <p class="leading-loose text-gray-500 dark:text-gray-400">
                        “{{ substr($blog->content, 0, 70)." ..." }}”.
                    </p>

                    <div class="flex items-center mt-8 -mx-2">
                        <img
                            class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                            src="{{ $blog->image }}"
                            alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-gray-800 dark:text-white">{{ $blog->auteur }}</h1>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $blog->read_time . " minutes" }}</span>
                        </div>
                    </div>
                    <a href="{{ route('readBlog', ['id' => $blog->id]) }}" aria-label=""
                       class="mt-3 inline-flex items-center font-semibold transition-colors duration-200 text-white hover:text-deep-purple-800">Lire
                        plus</a>

                </div>
            @endforeach
        </section>
    </div>
</section>

