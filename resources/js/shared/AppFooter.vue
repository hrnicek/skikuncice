<script setup lang="ts">

</script>

<template>
    <div class="row mt-8 mb-8">
        <div class="rounded-4xl border bg-muted px-12 py-12">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Navigation Menu -->
                    <div>
                        <h3 class="text-gray-900 font-bold text-lg mb-4">Navigation</h3>
                        <nav>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200">Home</a></li>
                                <li><a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200">About</a></li>
                                <li><a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200">Services</a></li>
                                <li><a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Social Media Links -->
                    <div>
                        <h3 class="text-gray-900 font-bold text-lg mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200 text-2xl" aria-label="Facebook">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200 text-2xl" aria-label="Twitter">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200 text-2xl" aria-label="Instagram">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C8.396 0 7.966.021 6.677.072 5.393.124 4.434.245 3.642.446c-.802.2-1.482.47-2.144.832C.894 1.64.625 2.32.425 3.122.224 3.914.103 4.873.051 6.157.021 7.446 0 7.876 0 11.497c0 3.621.021 4.051.072 5.34.052 1.284.173 2.243.374 3.035.2.802.47 1.482.832 2.144.362.662.632 1.332.832 2.134.201.802.322 1.761.374 3.045.051 1.284.072 1.714.072 5.335 0 3.621-.021 4.051-.072 5.34-.052 1.284-.173 2.243-.374 3.035-.2.802-.47 1.482-.832 2.144-.362.662-.632 1.332-.832 2.134-.201.802-.322 1.761-.374 3.045-.051 1.284-.072 1.714-.072 5.335 0 3.621.021 4.051.072 5.34.052 1.284.173 2.243.374 3.035.2.802.47 1.482.832 2.144.362.662.632 1.332.832 2.134.201.802.322 1.761.374 3.045.051 1.284.072 1.714.072 5.335 0 3.621-.021 4.051-.072 5.34-.052 1.284-.173 2.243-.374 3.035-.2.802-.47 1.482-.832 2.144-.362.662-.632 1.332-.832 2.134-.201.802-.322 1.761-.374 3.045-.051 1.284-.072 1.714-.072 5.335zM9.536 2.25c.286 0 .572.021.858.064.274.041.547.1.81.174.262.074.512.174.74.3.228.126.434.278.612.454.178.176.33.382.456.61.126.228.226.478.3.74.074.263.133.536.174.81.043.286.064.572.064.858 0 3.621-.021 4.051-.072 5.34-.052 1.284-.173 2.243-.374 3.035-.2.802-.47 1.482-.832 2.144-.362.662-.632 1.332-.832 2.134-.201.802-.322 1.761-.374 3.045-.051 1.284-.072 1.714-.072 5.335 0 3.621.021 4.051.072 5.34.052 1.284.173 2.243.374 3.035.2.802.47 1.482.832 2.144.362.662.632 1.332.832 2.134.201.802.322 1.761.374 3.045.051 1.284.072 1.714.072 5.335 0 3.621-.021 4.051-.072 5.34-.052 1.284-.173 2.243-.374 3.035-.2.802-.47 1.482-.832 2.144-.362.662-.632 1.332-.832 2.134-.201.802-.322 1.761-.374 3.045-.051 1.284-.072 1.714-.072 5.335zM12.017 6.866c-3.868 0-7.017 3.149-7.017 7.017 0 3.868 3.149 7.017 7.017 7.017s7.017-3.149 7.017-7.017c0-3.868-3.149-7.017-7.017-7.017zm0 11.584c-2.506 0-4.551-2.045-4.551-4.551 0-2.506 2.045-4.551 4.551-4.551s4.551 2.045 4.551 4.551c0 2.506-2.045 4.551-4.551 4.551zm8.466-12.024c0-.904-.732-1.636-1.636-1.636-.904 0-1.636.732-1.636 1.636 0 .904.732 1.636 1.636 1.636.904 0 1.636-.732 1.636-1.636z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div>
                        <h3 class="text-gray-900 font-bold text-lg mb-4">Contact</h3>
                        <div class="space-y-2">
                            <p class="text-gray-700">
                                <span class="block font-medium">Email:</span>
                                <a href="mailto:info@example.com" class="hover:text-gray-900 transition-colors duration-200">info@example.com</a>
                            </p>
                            <p class="text-gray-700">
                                <span class="block font-medium">Phone:</span>
                                <a href="tel:+1234567890" class="hover:text-gray-900 transition-colors duration-200">+1 (234) 567-8900</a>
                            </p>
                            <p class="text-gray-700">
                                <span class="block font-medium">Address:</span>
                                123 Mountain View Road<br>
                                Alpine, CO 80401
                            </p>
                        </div>
                    </div>

                    <!-- Copyright Notice -->
                    <div>
                        <h3 class="text-gray-900 font-bold text-lg mb-4">Legal</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            &copy; {{ new Date().getFullYear() }} Your Company Name. All rights reserved.
                        </p>
                        <div class="mt-4 space-y-1">
                            <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200 text-sm block">Privacy Policy</a>
                            <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200 text-sm block">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

