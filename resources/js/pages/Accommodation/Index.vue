<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
import { Link } from '@inertiajs/vue3';

interface Accommodation {
  id: number;
  name: string;
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
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div v-if="accommodations.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div 
          v-for="accommodation in accommodations" 
          :key="accommodation.id" 
          class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col hover:shadow-xl transition-shadow duration-300"
        >
          <!-- Image -->
          <div class="aspect-w-16 aspect-h-10 bg-gray-200">
             <img 
              v-if="accommodation.image" 
              :src="accommodation.image" 
              :alt="accommodation.name" 
              class="w-full h-full object-cover"
            >
            <div v-else class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
          </div>

          <!-- Content -->
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-xl font-bold text-gray-900 mb-2">
              {{ accommodation.name }}
            </h3>
            
            <div v-if="accommodation.address" class="flex items-start mb-4 text-gray-600 text-sm">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 flex-shrink-0 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>{{ accommodation.address }}</span>
            </div>

            <div class="mt-auto pt-4 border-t border-gray-100 flex justify-end">
               <Link 
                :href="route('accommodation.show', accommodation.id)"
                class="inline-flex items-center text-brand-secondary font-semibold hover:text-brand-primary transition-colors"
               >
                 {{ trans('global.more_info') || 'Více informací' }}
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                 </svg>
               </Link>
            </div>
          </div>
        </div>
      </div>

      <div v-else class="text-center py-12 text-gray-500">
        <p class="text-xl">Momentálně nemáme v nabídce žádné ubytování.</p>
      </div>
    </div>
  </AppLayout>
</template>
