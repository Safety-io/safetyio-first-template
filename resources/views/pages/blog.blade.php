@include('layouts.app')

<div class="px-4  py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid mt-5 gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach($blogs as $blog)
        @php
            $blog->content = substr($blog->content, 0, 100);
        $blog->created_at = date('Y-m-d', strtotime($blog->created_at));
         @endphp
            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
{{--                {{ asset('storage/'.$blog->image) }}--}}
                <img src="{{  $blog->image }}" class="object-cover w-full h-64" alt="" />
                <div class="p-5 border border-t-0">
                    <p class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">
                        #{{ $blog->id }}
                    </p>
                    <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                        <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">{{ $blog->created_at = date('Y-m-d', strtotime($blog->created_at)) }}</a>

                        <span class="text-gray-600 ml-12">{{ $blog->read_time }} min de lecture</span>

                    </p>
                    <a href="/" aria-label="Category" title="Film It!" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">{{ $blog->title }}</a>
                    <p class="mb-2 text-gray-700">
                        {{ $blog->content }}
                    </p>
                    <div class="flex items-center mt-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full" src="{{ $blog->picture }}" alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-gray-500 ">   {{ $blog->auteur }}</h1>
                            <p class="text-sm text-gray-500  ">{{ $blog->grade }}</p>
                        </div>
                    </div>

                    <a href="{{   $blog = route('readBlog', ['id' => $blog->id]) }}" aria-label="" class="mt-3 inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Lire plus</a>
{{--                    <a href="{{   route("readBlog", ['blog' => $blog->id])}}" aria-label="" class="mt-3 inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Lire plus</a>--}}
{{--                    <a href="{{ route('readBlog' , ['blog' => $blog->id]) }}" aria-label="" class="mt-3 inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Lire plus</a>--}}

                </div>
            </div>
        @endforeach
    </div>
</div>
