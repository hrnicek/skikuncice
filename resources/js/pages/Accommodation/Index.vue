<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
import { Link } from '@inertiajs/vue3';

interface Accommodation {
  id: number;
  name: string;
  slug: string;
  address: string | null;
  image: string | null;
}

defineProps<{
  accommodations: Accommodation[]
}>();
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('accommodation.index.page_header.title')"
      :subtitle="trans('accommodation.index.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <div v-if="accommodations.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div 
          v-for="accommodation in accommodations" 
          :key="accommodation.id" 
          class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden flex flex-col border border-gray-100"
        >
          <!-- Image Container -->
          <div class="relative overflow-hidden aspect-[4/3]">
            <img 
              v-if="accommodation.image" 
              :src="accommodation.image" 
              :alt="accommodation.name" 
              class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out"
            >
            <div v-else class="w-full h-full flex items-center justify-center bg-gray-50 text-gray-300">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>

          <!-- Content -->
          <div class="p-8 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[var(--primary)] transition-colors duration-300">
              {{ accommodation.name }}
            </h3>
            
            <div v-if="accommodation.address" class="flex items-start mb-6 text-gray-500 text-sm leading-relaxed">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2.5 flex-shrink-0 text-[var(--brand-secondary)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>{{ accommodation.address }}</span>
            </div>

            <div class="mt-auto pt-6 border-t border-gray-100 flex justify-between items-center">
              <span class="text-sm font-medium text-gray-400 group-hover:text-gray-600 transition-colors">
                 Detail ubytování
              </span>
               <Link 
                :href="route('accommodation.show', accommodation.slug)"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[var(--brand-secondary)]/10 text-[var(--brand-secondary)] group-hover:bg-[var(--brand-secondary)] group-hover:text-white transition-all duration-300"
               >
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                 </svg>
               </Link>
            </div>
          </div>
        </div>
      </div>

      <div v-else class="flex flex-col items-center justify-center py-20 text-center">
        <div class="bg-gray-50 rounded-full p-6 mb-4">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
        </div>
        <h3 class="text-xl font-medium text-gray-900 mb-2">Žádné ubytování</h3>
        <p class="text-gray-500 max-w-md">Momentálně nemáme v nabídce žádné ubytování. Zkuste to prosím později.</p>
      </div>
    </div>
  </AppLayout>
</template>
