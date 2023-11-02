@include('layouts.app')

<section class="bg-white  ">
    <section class="flex items-center py-10   lg:py-24 font-poppins   ">
        <div class="justify-center flex-1 max-w-4xl px-4 py-4 mx-auto text-left lg:py-10 ">
            <div class="mb-10 text-center">
                <h1 class="text-3xl font-bold capitalize text-black">Plus D'articles</h1>
            </div>
            @foreach($latest as $blog)

            <div class="grid grid-cols-1 bg-secondary  mb-6 lg:grid-cols-[1fr,70%]   gap-4">
                <div>
                    <img src="{{ $blog->image }} " alt=""
                         class="object-cover w-full rounded-md h-80 lg:h-44">
                </div>
                <div class="px-4 py-4 lg:px-0">
                    <span>{{ $blog->auteur }}</span>
                    <a href="#">
                        <h2
                            class="mt-3 mb-3 text-xl font-semibold text-black  hover:text-blue-600  ">
                            {{ substr($blog->title, 0, 20) . " ..." }}
                        </h2>
                    </a>
                    <p class="mb-3 text-sm text-black ">
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
@include('layouts.footer')
