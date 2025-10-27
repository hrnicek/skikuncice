<script setup lang="ts">
import { computed } from 'vue'
import HeroBento from './HeroBento.vue'
import { useSeason } from '@/composables/useSeason'

const { isWinter } = useSeason()

const backgroundImage = computed(() => {
  return isWinter.value ? '/img/hero-winter.jpg' : '/img/hero-summer.jpg'
})

const heroContent = computed(() => {
  if (isWinter.value) {
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

                <div class="text-left text-white mb-8 pl-4 md:pl-16 pt-32">
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