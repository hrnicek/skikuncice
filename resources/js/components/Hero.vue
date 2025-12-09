<script setup lang="ts">
import { computed } from 'vue'
import HeroBento from './HeroBento.vue'
import { useSeason } from '@/composables/useSeason'
import { trans } from 'laravel-vue-i18n'

const { isWinter } = useSeason()

const backgroundImage = computed(() => {
  return isWinter.value ? '/img/hero-winter.jpg' : '/img/hero-summer.jpg'
})

const heroContent = computed(() => {
  if (isWinter.value) {
    return {
      title: trans('hero.winter.title'),
      subtitle: trans('hero.winter.subtitle')
    }
  } else {
    return {
      title: trans('hero.summer.title'),
      subtitle: trans('hero.summer.subtitle')
    }
  }
})
</script>

<template>
    <div>
        <div class="relative h-screen md:h-[650px] overflow-hidden">
            <img v-if="!isWinter" :src="backgroundImage" :alt="trans('hero.alt.intro_photo')" class="absolute inset-0 w-full h-full object-cover">
            <video v-else src="/videos/kuncice-spot.mp4" autoplay loop muted class="absolute inset-0 w-full h-full object-cover"></video>
            <div class="absolute inset-0 bg-black/30"></div>

            <div class="relative container z-10 flex flex-col justify-between h-full p-4 sm:p-6 md:p-8">

                <div class="text-left text-white mb-4 sm:mb-6 md:mb-8 pl-2 pt-16 sm:pt-20 md:pt-32">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-2 sm:mb-3 md:mb-4">
                        {{ heroContent.title }}
                    </h1>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl opacity-90">
                        {{ heroContent.subtitle }}
                    </p>
                </div>

                <HeroBento />
            </div>
        </div>
    </div>
    </template>
