@include('layouts.app')

<section class="flex items-center  ">
    <div class="p-4 mt-10 mx-auto max-w-7xl">
        <div class="flex flex-wrap justify-center text-center mt-12 mb-12">
            <div class="w-full lg:w-6/12 px-4">
                <!-- Header -->
                <h1 class="text-gray-900 text-4xl font-bold mb-4">
                    Nos blogs
                </h1>
                <!-- Description -->
                <p class="text-gray-700 text-lg font-light">
                    Nous vous permettons de rester informés de toutes les dernières nouveautés technologiques et de partager nos connaissances avec vous.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 lg:gap-8 sm:gap-4  sm:grid-cols-2 lg:grid-cols-3">

            @foreach($blogs as $blog)
                @php
                    $blog->content = substr($blog->content, 0, 100);
                $blog->created_at = date('Y-m-d', strtotime($blog->created_at));
                @endphp

            <div class="mb-0 overflow-hidden bg-white rounded  shadow dark:bg-gray-700">
                <div class="relative overflow-hidden h-72">
                        <span class="absolute px-3 py-1 text-xs text-white bg-blue-500 rounded bottom-3 right-3">
                            {{ $blog->read_time }} min de lecture
                        </span>
                    <img class="object-cover w-full h-full transition-all hover:scale-110"
                         src="{{ $blog->image }}" alt="">
                </div>
                <div class="relative z-20 p-8 -mt-16 ">
                    <div class="flex items-center">
                        <img class="object-cover w-20 h-20 mb-4 border-4 border-white rounded-full dark:border-gray-700"
                             src="{{ $blog->picture }}"
                             alt="">

                        <div class="flex flex-col items-center ml-2">
                                <span
                                    class="block mt-3 mb-2 text-xs font-semibold text-blue-700 uppercase dark:text-blue-300">
                                     {{ $blog->auteur }} <br> {{ $blog->grade }}
                                </span>
                        </div>
                    </div>
                    <h2 class="mb-3 text-2xl font-bold leading-9 text-blue-800 dark:text-white">
                        {{ $blog->title }}

                    </h2>
                    <p class="mb-4 text-base leading-7 text-gray-400">
                        {{ $blog->content }}
                    </p>
                    <a class="flex items-center text-sm font-semibold" href="{{   $blog = route('readBlog', ['id' => $blog->id]) }}">
                        <div class="flex items-center px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                            More Details
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                 class="ml-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

@include('layouts.footer')
