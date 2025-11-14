<script setup lang="ts">
import { trans } from 'laravel-vue-i18n';

interface Props {
  title?: string
  description?: string
  link?: string
}

const props = withDefaults(defineProps<Props>(), {
  title: trans('hero_webcam.title'),
  description: trans('hero_webcam.description'),
  link: route('webcams')
})
</script>

<template>
  <a :href="link" class="block rounded-2xl p-4 bg-glass hover:bg-white/5 transition-all duration-200 group h-full">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-orange-500/20 flex items-center justify-center group-hover:bg-orange-500/30 transition-colors">
          <svg class="w-4 h-4 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
          </svg>
        </div>
        <span class="text-white text-xs font-semibold">{{ title }}</span>
      </div>
    </div>
    <div class="mt-2">
      <div class="text-lg font-bold text-white">{{ trans('hero_webcam.live') }}</div>
      <div class="text-white text-xs font-medium">{{ description }}</div>
    </div>
    <div class="mt-2 flex items-center text-orange-300 group-hover:text-orange-200 text-xs font-medium transition-colors">
      {{ trans('hero_webcam.show_live') }}
      <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
    </div>
  </a>
</template>
