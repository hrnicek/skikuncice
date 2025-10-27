<script setup lang="ts">
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import HeroBento from './HeroBento.vue'

// Get season data from page props
const page = usePage()
const season = computed(() => page.props.season as {
  current: string
  label: string
  isWinter: boolean
  isSummer: boolean
  available: Record<string, string>
})

// Compute background image based on season
const backgroundImage = computed(() => {
  return season.value.isWinter ? '/img/hero-winter.jpg' : '/img/hero-summer.jpg'
})

// Compute season-specific content
const heroContent = computed(() => {
  if (season.value.isWinter) {
    return {
      title: 'Lyžovačka pro celou rodinu',
      subtitle: 'Za perfektní lyžovačkou nemusíte do Alp'
    }
  } else {
    return {
      title: 'Letní aktivity pro celou rodinu',
      subtitle: 'Objevte krásy Jeseníků i v létě'
    }
  }
})
</script>

<template>
    <div class="container mt-4">
        <div class="relative max-h-[700px] overflow-hidden rounded-4xl">
            <img :src="backgroundImage" alt="úvodní fotka" class="w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-black/30"></div>
            
            <div class="absolute inset-0 flex flex-col justify-between p-6 md:p-8">

                <div class="text-left text-white mb-8 pl-4 md:pl-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">
                       {{ heroContent.title }}
                    </h1>
                    <p class="text-lg md:text-xl opacity-90">
                        {{ heroContent.subtitle }}
                    </p>
                </div>

                <HeroBento />
            </div>
        </div>
    </div>
</template>