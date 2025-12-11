<script setup lang="ts">
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <a :href="route('webcams')" class="block rounded-2xl p-4 bg-glass hover:bg-white/5 transition-all duration-200 group h-full flex flex-col justify-between relative overflow-hidden">
    <!-- Header -->
    <div class="flex items-center gap-3 relative z-10 w-full">
      <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-white/20 transition-colors shrink-0">
        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
        </svg>
      </div>
      <span class="text-white text-xs font-bold uppercase tracking-wide">{{ trans('hero_webcam.title') }}</span>
    </div>
    
    <!-- Content Row -->
    <div class="mt-4 flex items-end justify-between gap-4 relative z-10">
      <div class="flex-1 min-w-0">
        <div class="flex items-center gap-2 mb-1">
          <span class="relative flex h-2 w-2 shrink-0">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
          </span>
          <div class="text-lg font-bold text-white whitespace-nowrap">{{ trans('hero_webcam.live') }}</div>
        </div>
        <div class="text-white text-xs font-medium line-clamp-2 group-hover:text-white transition-colors opacity-80">
          {{ trans('hero_webcam.description') }}
        </div>
      </div>
      
      <!-- Right Image -->
      <div class="w-1/2 rounded-lg overflow-hidden border border-white/20 shadow-sm shrink-0 group-hover:border-white/40 transition-colors h-20 relative">
        <img 
          src="/img/webcam-preview.webp" 
          alt="Webcam Preview" 
          class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
        />
        
        <!-- Play Button Overlay -->
        <!-- Play Button Overlay -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none group-hover:scale-110 transition-transform duration-500">
          <div class="relative flex items-center justify-center w-8 h-8">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white/30 opacity-50 duration-1000"></span>
            <div class="relative w-8 h-8 rounded-full bg-black/20 backdrop-blur-[1px] border border-white/40 flex items-center justify-center transition-colors">
              <svg class="w-3 h-3 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</template>
