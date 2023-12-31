<div class="bg-secondary w-full    bg-secondary  fixed z-50">
{{--    py-6  px-4 lg:pb-20--}}
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="relative flex items-center justify-between">
            <a href=" {{ route('home') }}" aria-label="Company" title="Company" class="inline-flex items-center">
                <span class="ml-2 text-xl font-bold tracking-wide text-black uppercase">Safety IO</span>
            </a>
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li><a href=" {{ route('home') }}" aria-label=" Accueil" title=" Accueil" class="font-sans  font-bold  tracking-wide text-black  transition-colors duration-200 hover:text-teal-accent-400">Accueil</a></li>
                <li><a href="{{ route('about') }}" aria-label="Our product" title="Our product" class="font-sans  font-bold  tracking-wide text-black  transition-colors duration-200 hover:text-teal-accent-400">  À propos</a></li>
                <li><a href="{{ route('team') }}" aria-label="Product pricing" title="Product pricing" class="font-sans  font-bold tracking-wide ttext-black transition-colors duration-200 hover:text-teal-accent-400">    Equipe</a></li>
                <li><a href="{{ route('pages.blog') }}" aria-label="About us" title="About us" class="font-sans font-bold   tracking-wide text-black  transition-colors duration-200 hover:text-teal-accent-400"> Blog</a></li>
            </ul>
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center h-12 px-6 font-semibold tracking-wide text-white transition duration-200 rounded shadow-md bg-[#af7dec] hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                        aria-label="Contact"
                    >
                       Contact
                    </a>
                </li>
            </ul>
            <!-- Mobile menu -->
            <div class="lg:hidden">
                <button   aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                        <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg>
                </button>

                <div class="absolute top-0 left-0 w-full hidden">
                  <div class="p-5 bg-white border rounded shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                      <div>
                        <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                          <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">SAFETY IO</span>
                        </a>
                      </div>
                      <div>
                        <button  aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                          <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path
                              fill="currentColor"
                              d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                            ></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <nav>
                      <ul class="space-y-4">
                        <li><a href="{{ route('home') }}" aria-label="mobile home" title="Home" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Acceuil</a></li>
                        <li><a href="{{ route('team') }}" aria-label="mobile team" title="Team" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Equipe</a></li>
                        <li><a href="{{ route('pages.blog') }}" aria-label="mobile blog" title="Blog" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Blog</a></li>
                        <li><a href="{{ route('about') }}" aria-label="mobile about" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">A propos</a></li>
                        <li>
                          <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center w-full h-12 text-white bg-[#af7dec] px-6 font-medium tracking-wide transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            aria-label="Contact"
                            title="Contact Us"
                          >
                            Contact
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- script button mobile--}}
<script>
    let expanded = false;
    const btn = document.querySelector("button[aria-label='Open Menu']");
    const closeBtn = document.querySelector("button[aria-label='Close Menu']");
    const menu = document.querySelector(".absolute.top-0.left-0.w-full");

    btn.addEventListener("click", () => {
        if(expanded){
            menu.classList.add("hidden");
            expanded = false;
        } else {
            menu.classList.remove("hidden");
            expanded = true;
        }
    });

    closeBtn.addEventListener("click", () => {
        if(expanded){
            menu.classList.add("hidden");
            expanded = false;
        } else {
            menu.classList.remove("hidden");
            expanded = true;
        }
    });
</script>
