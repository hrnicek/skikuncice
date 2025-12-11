<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
import { Link } from '@inertiajs/vue3';

interface AccommodationDetail {
  id: number;
  name: string;
  address: string | null;
  phone: string | null;
  phone2: string | null;
  email: string | null;
  website: string | null;
  content: string | null;
  images: string[];
}

defineProps<{
  accommodation: AccommodationDetail
}>();
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="accommodation.name"
      :subtitle="trans('accommodation.show.page_header.subtitle') || 'Detail ubytování'"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Main Content (Left, 2 cols) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Gallery Section -->
            <div v-if="accommodation.images && accommodation.images.length > 0" class="space-y-4">
                <!-- Main big image -->
                <div class="rounded-xl overflow-hidden shadow-lg h-96 lg:h-[450px]">
                    <img :src="accommodation.images[0]" :alt="accommodation.name" class="w-full h-full object-cover">
                </div>
                <!-- Thumbnails -->
                <div v-if="accommodation.images.length > 1" class="grid grid-cols-4 gap-4">
                    <div 
                        v-for="(img, idx) in accommodation.images.slice(1, 5)" 
                        :key="idx"
                        class="aspect-w-4 aspect-h-3 rounded-md overflow-hidden cursor-pointer hover:opacity-90 transition-opacity"
                    >
                        <img :src="img" :alt="accommodation.name" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
             <div v-else class="h-64 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400">
                <span class="text-sm">Bez fotografie</span>
            </div>

            <!-- Description -->
            <div class="prose max-w-none text-gray-700 leading-relaxed bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">O ubytování</h2>
                <div v-html="accommodation.content" />
            </div>
        </div>

        <!-- Sidebar (Right, 1 col) -->
        <div class="lg:col-span-1">
             <div class="bg-white rounded-xl shadow-lg p-6 lg:p-8 sticky top-24 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-900 mb-6 border-b pb-4">Kontakt</h3>
                
                <ul class="space-y-4 mb-8">
                     <li v-if="accommodation.address" class="flex items-start">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-brand-secondary flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-700">{{ accommodation.address }}</span>
                     </li>
                      <li v-if="accommodation.phone" class="flex items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-brand-secondary flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                         <a :href="`tel:${accommodation.phone}`" class="text-brand-secondary font-medium hover:underline">{{ accommodation.phone }}</a>
                     </li>
                       <li v-if="accommodation.phone2" class="flex items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-brand-secondary flex-shrink-0 opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                         <a :href="`tel:${accommodation.phone2}`" class="text-brand-secondary font-medium hover:underline">{{ accommodation.phone2 }}</a>
                     </li>
                      <li v-if="accommodation.email" class="flex items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-brand-secondary flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                         <a :href="`mailto:${accommodation.email}`" class="text-gray-700 hover:text-brand-secondary transition-colors truncate">{{ accommodation.email }}</a>
                     </li>
                </ul>

                 <div v-if="accommodation.website" class="mt-8">
                    <a 
                        :href="accommodation.website" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="block w-full text-center bg-brand-secondary text-white font-bold py-3 px-6 rounded-lg shadow hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1"
                    >
                        Navštívit web
                    </a>
                 </div>
                 <div v-else class="text-sm text-gray-500 text-center mt-6 italic">
                    Pro rezervaci prosím využijte uvedené kontakty.
                 </div>
             </div>
        </div>
      </div>

       <div class="mt-16 text-center">
        <Link 
            :href="route('accommodation.index')" 
            class="inline-flex items-center text-gray-600 hover:text-brand-secondary font-medium transition-colors"
        >
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Zpět na přehled ubytování
        </Link>
      </div>
    </div>
  </AppLayout>
</template>
