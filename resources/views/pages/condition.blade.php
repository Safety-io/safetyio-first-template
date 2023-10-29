<script src="https://cdn.tailwindcss.com"></script>
<!-- component -->
<div class="font-sans bg-gray-100 flex items-center justify-center h-screen">
    <div x-data="{ showPrivacyPolicy: true }">
        <!-- Button to open the privacy policy modal -->
        <button @click="showPrivacyPolicy = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> View Privacy Policy </button>
        <!-- Privacy Policy Modal -->
        <div x-show="showPrivacyPolicy" class="fixed z-10 inset-0 flex items-center justify-center">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            <div class="relative bg-white rounded-lg overflow-hidden shadow-xl max-w-screen-md w-full m-4" x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform opacity-100 scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
                <!-- Modal panel -->
                <div class="px-6 py-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900"> Safety Io</h3>
                </div>
                <div class="prose max-w-screen-md p-6 overflow-y-auto" style="max-height: 70vh; background-color: #fff; border: 1px solid #e2e8f0; border-radius: 0.375rem; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);">
                    <h2 class="text-2xl font-bold mb-4">Nous</h2>
                    <p class="mb-4">Nous vous proposons des services de maintenance de site, de création d'affiches et de sécurisation de réseau.</p>
                    <h3 class="text-lg font-semibold mb-2">Information We Collect</h3>
                    <p>We may collect the following types of information:</p>
                    <ul class="list-disc ml-6 mb-4">
                        <li>Personal Information: We may collect your name, email address, and other personal information when you provide it to us.</li>
                        <li>Usage Information: We may collect information about your usage of our website and services, such as the pages you visit and your interactions with our content.</li>
                    </ul>
                    <h3 class="text-lg font-semibold mb-2">How We Use Your Information</h3>
                    <p>We may use your information for various purposes, including:</p>
                    <ul class="list-disc ml-6 mb-4">
                        <li>Providing our services to you</li>
                        <li>Sending you updates and information about our products and services</li>
                        <li>Improving our website and services</li>
                    </ul>
                    <h3 class="text-lg font-semibold mb-2">Nous vous offrons le service ci-après</h3>
                    <p>We may disclose your information to third parties in certain circumstances, including:</p>
                    <ul class="list-disc ml-6 mb-4">
                        <li>Design</li>
                        <li>Mantorat</li>
                        <li>Programmation</li>
                        <li>Sécurité</li>
                        <li>Réseau</li>
                    </ul>
                    <h3 class="text-lg font-semibold mb-2">Security</h3>
                    <p>We take reasonable measures to protect your information, but no method of transmission over the internet is 100% secure. We cannot guarantee the security of your information.</p>
                    <h3 class="text-lg font-semibold mb-2">Changes to this Privacy Policy</h3>
                    <p>We may update this Privacy Policy from time to time. Any changes will be posted on our website. By continuing to use our services, you agree to the updated Privacy Policy.</p>
                    <p class="mt-4">
                        <a href="/privacy-policy" class="text-blue-500 hover:underline">Read our full Privacy Policy</a>.
                    </p>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 flex align-items justify-end p-4 gap-4 flex-row">
                    <a href="{{ route("home") }}" type="button" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-black text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400  sm:w-auto sm:text-sm"> Accept </a>

                </div>
            </div>
        </div>
    </div>
</div>
