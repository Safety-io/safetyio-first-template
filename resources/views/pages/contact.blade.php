{{--@extends("layouts.app")--}}
{{--@section('title', 'Contact')--}}
{{--@section('content')--}}
<h1>in progress go to  <a href="{{ route('home') }}">home</a> </h1>
{{--<section class="overflow-hidden py-[120px]">--}}
{{--    <div class="container mx-auto">--}}
{{--        <div class="flex flex-wrap justify-center">--}}

{{--            <div class="w-full px-4">--}}
{{--                <div class="mx-auto mb-[60px] max-w-[510px] text-center">--}}
{{--                    <h2--}}
{{--                        class="text-dark mb-4 pt-12 text-3xl font-bold sm:text-4xl md:text-[40px]"--}}
{{--                    >--}}
{{--                        Nous contacter--}}
{{--                    </h2>--}}
{{--                    <p class="text-body-color text-base">--}}
{{--                        L'équipe de développement de SafetyIO est toujours heureuse de recevoir des commentaires et des suggestions des utilisateurs--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-full px-4 xl:w-10/12">--}}
{{--                <div--}}
{{--                    class="-mx-4 mb-16 flex flex-wrap bg-black py-14 px-5 sm:p-14"--}}
{{--                >--}}
{{--                    <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">--}}
{{--                        <div class="mb-5 flex lg:mb-0">--}}
{{--                            <div class="mr-4">--}}
{{--                                <svg--}}
{{--                                    width="32"--}}
{{--                                    height="32"--}}
{{--                                    viewBox="0 0 32 32"--}}
{{--                                    fill="none"--}}
{{--                                    xmlns="../../../../www.w3.org/2000/svg.html"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M28.4996 5.4502H3.49961C1.89961 5.4502 0.599609 6.7502 0.599609 8.3502V23.7002C0.599609 25.3002 1.89961 26.6002 3.49961 26.6002H28.4996C30.0996 26.6002 31.3996 25.3002 31.3996 23.7002V8.3502C31.3996 6.7502 30.0996 5.4502 28.4996 5.4502ZM28.4996 7.2002C28.7496 7.2002 28.9496 7.2502 29.1496 7.4002L16.6996 14.9502C16.2496 15.2002 15.7496 15.2002 15.2996 14.9502L2.84961 7.4002C3.04961 7.3002 3.24961 7.2002 3.49961 7.2002H28.4996ZM28.4996 24.8002H3.49961C2.89961 24.8002 2.34961 24.3002 2.34961 23.6502V9.1502L14.3496 16.4502C14.8496 16.7502 15.3996 16.9002 15.9496 16.9002C16.4996 16.9002 17.0496 16.7502 17.5496 16.4502L29.5496 9.1502V23.6502C29.6496 24.3002 29.0996 24.8002 28.4996 24.8002Z"--}}
{{--                                        fill="white"--}}
{{--                                    />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h5 class="text-lg font-semibold text-white">Email</h5>--}}
{{--                                <p class="text-base font-medium text-[#C1CCF2]">--}}
{{--                                    mailo info@safetyio.net--}}
{{--                                    <a href="mailto:info@safetyio.net">info@safetyio.net</a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">--}}
{{--                        <div class="mb-5 flex lg:mb-0">--}}
{{--                            <div class="mr-4">--}}
{{--                                <svg--}}
{{--                                    width="32"--}}
{{--                                    height="32"--}}
{{--                                    viewBox="0 0 32 32"--}}
{{--                                    fill="none"--}}
{{--                                    xmlns="../../../../www.w3.org/2000/svg.html"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M28.8493 18.45C28.7493 17.3 27.7993 16.5 26.6493 16.5H5.34935C4.19935 16.5 3.29935 17.35 3.14935 18.45L2.09935 28.95C2.04935 29.55 2.24935 30.2 2.64935 30.65C3.04935 31.1 3.64935 31.35 4.29935 31.35H27.7493C28.3493 31.35 28.9493 31.1 29.3993 30.65C29.7993 30.2 29.9993 29.6 29.9493 28.95L28.8493 18.45ZM28.0493 29.5C27.9993 29.55 27.8993 29.65 27.6993 29.65H4.29935C4.14935 29.65 3.99935 29.55 3.94935 29.5C3.89935 29.45 3.79935 29.35 3.84935 29.15L4.89935 18.6C4.89935 18.35 5.09935 18.2 5.34935 18.2H26.6993C26.9493 18.2 27.0993 18.35 27.1493 18.6L28.1993 29.15C28.1493 29.3 28.0993 29.45 28.0493 29.5Z"--}}
{{--                                        fill="white"--}}
{{--                                    />--}}
{{--                                    <path--}}
{{--                                        d="M16 20.4004C14.05 20.4004 12.5 21.9504 12.5 23.9004C12.5 25.8504 14.05 27.4004 16 27.4004C17.95 27.4004 19.5 25.8504 19.5 23.9004C19.5 21.9504 17.95 20.4004 16 20.4004ZM16 25.6504C15.05 25.6504 14.25 24.8504 14.25 23.9004C14.25 22.9504 15.05 22.1504 16 22.1504C16.95 22.1504 17.75 22.9504 17.75 23.9004C17.75 24.8504 16.95 25.6504 16 25.6504Z"--}}
{{--                                        fill="white"--}}
{{--                                    />--}}
{{--                                    <path--}}
{{--                                        d="M3.3 9.80019C3.4 12.0002 5.35 12.9002 6.35 12.9002H9.85C9.9 12.9002 9.9 12.9002 9.9 12.9002C11.4 12.8002 12.9 11.8002 12.9 9.80019V8.6002C14.55 8.6002 18.35 8.6002 20 8.6002V9.80019C20 11.8002 21.5 12.8002 23 12.9002H23.05H26.5C27.5 12.9002 29.45 12.0002 29.55 9.80019C29.55 9.6502 29.55 9.10019 29.55 8.6002C29.55 8.2002 29.55 7.8502 29.55 7.8002C29.55 7.7502 29.55 7.70019 29.55 7.70019C29.4 6.3002 28.9 5.1502 28.05 4.2502L28 4.20019C26.75 3.05019 25.25 2.4002 24.1 2.0002C20.75 0.700195 16.55 0.700195 16.35 0.700195C13.4 0.750195 11.5 1.0002 8.65 2.0002C7.55 2.3502 6.05 3.0002 4.8 4.1502L4.75 4.20019C3.9 5.10019 3.4 6.2502 3.25 7.6502C3.25 7.7002 3.25 7.7502 3.25 7.7502C3.25 7.85019 3.25 8.1502 3.25 8.5502C3.3 9.0002 3.3 9.60019 3.3 9.80019ZM6 5.4002C7 4.5002 8.25 3.9502 9.3 3.55019C11.9 2.6002 13.6 2.4002 16.45 2.3502C16.65 2.3502 20.55 2.4002 23.55 3.55019C24.6 3.9502 25.85 4.4502 26.85 5.4002C27.4 6.0002 27.75 6.8002 27.85 7.7502C27.85 7.9002 27.85 8.1502 27.85 8.5502C27.85 9.05019 27.85 9.60019 27.85 9.75019C27.8 10.9002 26.7 11.1502 26.55 11.1502H23.1C22.6 11.1002 21.8 10.9002 21.8 9.80019V7.7502C21.8 7.35019 21.55 7.0502 21.2 6.9002C20.9 6.8002 12.15 6.8002 11.85 6.9002C11.5 7.0002 11.25 7.35019 11.25 7.7502V9.80019C11.25 10.9002 10.45 11.1002 9.95 11.1502H6.5C6.35 11.1502 5.25 10.9002 5.2 9.75019C5.2 9.60019 5.2 9.05019 5.2 8.5502C5.2 8.1502 5.2 7.9502 5.2 7.8002C5.1 6.8002 5.45 6.0002 6 5.4002Z"--}}
{{--                                        fill="white"--}}
{{--                                    />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h5 class="text-lg font-semibold text-white">--}}
{{--                                    Phone--}}
{{--                                </h5>--}}
{{--                                <p class="text-base font-medium text-[#C1CCF2]">--}}
{{--                                    +243 974 453 545--}}
{{--                                </p>--}}
{{--                                <p class="text-base font-medium text-[#C1CCF2]">--}}
{{--                                    +243 90 634 0486--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">--}}
{{--                        <div class="mb-5 flex lg:mb-0">--}}
{{--                            <div class="mr-4">--}}
{{--                                <svg--}}
{{--                                    width="32"--}}
{{--                                    height="32"--}}
{{--                                    viewBox="0 0 32 32"--}}
{{--                                    fill="none"--}}
{{--                                    xmlns="../../../../www.w3.org/2000/svg.html"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M16.3496 7.44922C16.9019 7.44922 17.3496 7.0015 17.3496 6.44922C17.3496 5.89693 16.9019 5.44922 16.3496 5.44922C15.7973 5.44922 15.3496 5.89693 15.3496 6.44922C15.3496 7.0015 15.7973 7.44922 16.3496 7.44922Z"--}}
{{--                                        fill="white"--}}
{{--                                    />--}}
{{--                                    <path--}}
{{--                                        d="M29.0996 8.94961L20.6496 6.99961C20.6996 6.79961 20.6996 6.64961 20.6996 6.49961C20.6996 4.04961 18.7996 2.09961 16.3496 2.09961C13.9496 2.09961 11.9996 4.04961 11.9996 6.49961C11.9996 7.09961 12.2496 7.89961 12.5996 8.74961L11.1996 9.04961L4.34961 7.09961C3.44961 6.84961 2.49961 6.99961 1.74961 7.59961C0.999609 8.14961 0.599609 8.99961 0.599609 9.94961V24.7496C0.599609 26.0496 1.49961 27.2496 2.74961 27.5996L11.1496 29.9496L20.8496 27.9496L27.7496 29.4996C27.9496 29.5496 28.1996 29.5996 28.3996 29.5996C29.0496 29.5996 29.6996 29.3996 30.2496 28.9496C30.9496 28.3996 31.3496 27.5496 31.3496 26.6496V11.7996C31.3996 10.3996 30.4496 9.24961 29.0996 8.94961ZM16.3996 3.84961C17.8496 3.84961 18.9996 4.99961 18.9996 6.49961C18.9996 7.29961 17.9996 9.34961 16.3996 11.7996C14.7996 9.39961 13.7996 7.34961 13.7996 6.49961C13.7496 5.04961 14.9496 3.84961 16.3996 3.84961ZM13.4496 10.3496C14.0496 11.3996 14.6996 12.4496 15.3496 13.3996C15.5996 13.7496 15.9496 13.9496 16.3496 13.9496C16.7496 13.9496 17.1496 13.7496 17.3496 13.3996C18.2496 12.0496 19.2996 10.4496 19.9496 8.99961V26.3496L12.0496 27.9996V10.6496L13.4496 10.3496ZM2.39961 24.6996V9.94961C2.39961 9.54961 2.54961 9.19961 2.84961 8.99961C3.14961 8.74961 3.54961 8.69961 3.89961 8.79961L10.2996 10.5996V27.8996L3.24961 25.8996C2.74961 25.7496 2.39961 25.2496 2.39961 24.6996ZM29.6496 26.6496C29.6496 26.9996 29.4996 27.3496 29.1996 27.5996C28.8996 27.8496 28.5496 27.8996 28.1996 27.8496L21.7496 26.3496V8.99961L28.6996 10.5996C29.2496 10.7496 29.6496 11.1996 29.6496 11.7496V26.6496Z"--}}
{{--                                        fill="white"--}}
{{--                                    />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h5 class="text-lg font-semibold text-white">--}}
{{--                                    Office Address--}}
{{--                                </h5>--}}
{{--                                <p class="text-base font-medium text-[#C1CCF2]">--}}
{{--                                    4571 Sugar Camp Road, Owatonna, Minnesota, 55060--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class=" -mx-4 flex flex-wrap justify-center">--}}
{{--            <div class="w-full px-4 lg:w-7/12 xl:w-6/12">--}}
{{--                @if(session('success'))--}}
{{--                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">--}}
{{--                        <strong class="font-bold">Success!</strong>--}}
{{--                        <span class="block sm:inline">{{ session('success') }}</span>--}}
{{--                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">--}}
{{--                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="../../../../www.w3.org/2000/svg.html" viewBox="0 0 20 20">--}}
{{--                                <title>Close</title>--}}
{{--                                <path d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0 11-.707.707L9 10.707l-4.641 4.64a.5.5 0 11-.707-.707L8.293 10 3.652 5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.64a.5.5 0 01.707 0z"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        @elseif(session('error'))--}}
{{--                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">--}}
{{--                                <strong class="font-bold">Error!</strong>--}}
{{--                                <span class="block sm:inline">{{ session('error') }}</span>--}}
{{--                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">--}}
{{--                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="../../../../www.w3.org/2000/svg.html" viewBox="0 0 20 20">--}}
{{--                                <title>Close</title>--}}
{{--                                <path--}}
{{--                                    d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0 11-.707.707L9--}}
{{--                                    10.707l-4.641 4.64a.5.5 0 11-.707-.707L8.293 10 3.652--}}
{{--                                    5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.64a.5.5--}}
{{--                                    0 01.707 0z"--}}
{{--                                />--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        @if($errors->any())--}}
{{--                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">--}}
{{--                                <strong class="font-bold">Error!</strong>--}}
{{--                                <span class="block sm:inline">{{ $errors->first() }}</span>--}}
{{--                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">--}}
{{--                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="../../../../www.w3.org/2000/svg.html" viewBox="0 0 20 20">--}}
{{--                                <title>Close</title>--}}
{{--                                <path--}}
{{--                                    d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0--}}
{{--                                    11-.707.707L9 10.707l-4.641 4.64a.5.5 0--}}
{{--                                    11-.707-.707L8.293 10 3.652--}}
{{--                                    5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.64a.5.5--}}
{{--                                    0 01.707 0z" />--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                <div class="mb-12 lg:mb-0 lg:mr-4">--}}
{{--                    <form class="p-5" action="{{ url('contact') }}" method="post">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        <div class="-mx-4 flex flex-wrap">--}}
{{--                            <div class="w-full px-4 md:w-1/2">--}}
{{--                                <div class="mb-7">--}}
{{--                                    <input--}}
{{--                                        id="firstName"--}}
{{--                                        type="text"--}}
{{--                                        name="firstName"--}}
{{--                                        placeholder="Jean Luc"--}}
{{--                                        class="w-full border border-form-stroke bg-white py-4 px-6 placeholder-[#9699A6] shadow-input outline-none focus:border-primary"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full px-4 md:w-1/2">--}}
{{--                                <div class="mb-7">--}}
{{--                                    <input--}}
{{--                                        id="lastName"--}}
{{--                                        type="text"--}}
{{--                                        name="lastName"--}}
{{--                                        placeholder="Kawel"--}}
{{--                                        class="w-full border border-form-stroke bg-white py-4 px-6 placeholder-[#9699A6] shadow-input outline-none focus:border-primary"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full px-4 md:w-1/2">--}}
{{--                                <div class="mb-7">--}}
{{--                                    <input--}}
{{--                                        id="email"--}}
{{--                                        type="email"--}}
{{--                                        name="email"--}}
{{--                                        placeholder="jeanluckawel45@exemple.com"--}}
{{--                                        class="w-full border border-form-stroke bg-white py-4 px-6 placeholder-[#9699A6] shadow-input outline-none focus:border-primary"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full px-4 md:w-1/2">--}}
{{--                                <div class="mb-7">--}}
{{--                                    <input--}}
{{--                                        id="number"--}}
{{--                                        type="text"--}}
{{--                                        name="number"--}}
{{--                                        placeholder="+243 974 453 545"--}}
{{--                                        class="w-full border border-form-stroke bg-white py-4 px-6 placeholder-[#9699A6] shadow-input outline-none focus:border-primary"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full px-4">--}}
{{--                                <div class="mb-7">--}}
{{--                      <textarea--}}
{{--                          id="message"--}}
{{--                          name="message"--}}
{{--                          placeholder="Votre message"--}}
{{--                          rows="6"--}}
{{--                          class="w-full resize-none border bg-white py-4 px-6 placeholder-[#9699A6] shadow-input outline-none focus:border-primary"--}}
{{--                      ></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="w-full px-4">--}}
{{--                                <div>--}}
{{--                                    <button--}}
{{--                                        id="button"--}}
{{--                                        type="submit"--}}
{{--                                        class="inline-flex items-center justify-center border-2 border-transparent bg-black py-3 px-10 text-base font-semibold text-white hover:bg-opacity-90"--}}
{{--                                    >--}}
{{--                                        Envoyer le message--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--    @include('layouts.footer')--}}
{{--@endsection--}}

