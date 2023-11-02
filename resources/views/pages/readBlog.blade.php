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

<section class="bg-white dark:bg-900">
    <section class="flex items-center py-10 bg-gray-100 lg:py-24 font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-4xl px-4 py-4 mx-auto text-left lg:py-10 ">
            <div class="mb-10 text-center">
                <h1 class="text-3xl font-bold capitalize dark:text-white">Plus D'articles</h1>
            </div>
            @foreach($latest as $blog)

            <div class="grid grid-cols-1 bg-white dark:bg-gray-900  mb-6 lg:grid-cols-[1fr,70%]   gap-4">
                <div>
                    <img src="{{ $blog->image }} " alt=""
                         class="object-cover w-full rounded-md h-80 lg:h-44">
                </div>
                <div class="px-4 py-4 lg:px-0">
                    <a href="#"
                       class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                        {{ $blog->read_time }} min de lecture
                    </a>
                    <a href="#">
                        <h2
                            class="mt-3 mb-3 text-xl font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400">
                            {{ substr($blog->title, 0, 20) . " ..." }}
                        </h2>
                    </a>
                    <p class="mb-3 text-sm text-gray-500 dark:text-gray-400">
                        “{{ substr($blog->content, 0, 70)." ..." }}”.
                    </p>
                    <a class="flex items-center text-sm font-semibold" href="{{ route('readBlog', ['id' => $blog->id]) }}">
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
    </section>
</section>

