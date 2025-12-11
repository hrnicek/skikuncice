<script setup lang="ts">
import { trans } from 'laravel-vue-i18n';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="flex flex-col gap-4 items-end">
    <!-- Ski Map Link -->
    <Link 
      :href="route('area-map')" 
      target="_blank"
      class="flex items-center gap-3 group text-right"
    >
      <span class="text-white text-[10px] font-bold uppercase tracking-widest opacity-80 group-hover:opacity-100 transition-opacity">
        {{ trans('hero.ski_map') }}
      </span>
      <div class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center bg-white/10 backdrop-blur-sm group-hover:bg-white/20 group-hover:scale-110 transition-all duration-300">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
        </svg>
      </div>
    </Link>

    <!-- Instagram Link -->
    <a 
      href="https://www.instagram.com/skiareal_kuncice/" 
      target="_blank"
      class="flex items-center gap-3 group text-right"
    >
      <span class="text-white text-[10px] font-bold uppercase tracking-widest opacity-80 group-hover:opacity-100 transition-opacity">
        Instagram
      </span>
      <div class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center bg-white/10 backdrop-blur-sm group-hover:bg-white/20 group-hover:scale-110 transition-all duration-300">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
        </svg>
      </div>
    </a>

    <!-- Facebook Link -->
    <a 
      href="https://www.facebook.com/profile.php?id=100038684273638" 
      target="_blank"
      class="flex items-center gap-3 group text-right"
    >
      <span class="text-white text-[10px] font-bold uppercase tracking-widest opacity-80 group-hover:opacity-100 transition-opacity">
        Facebook
      </span>
      <div class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center bg-white/10 backdrop-blur-sm group-hover:bg-white/20 group-hover:scale-110 transition-all duration-300">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
      </div>
    </a>
  </div>
</template>
