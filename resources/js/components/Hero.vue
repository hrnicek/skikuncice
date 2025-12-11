<script setup lang="ts">
import { computed } from 'vue'
import HeroBento from './HeroBento.vue'
import HeroSideMenu from './HeroSideMenu.vue'
import { useSeason } from '@/composables/useSeason'
import { wTrans } from 'laravel-vue-i18n'

const { isWinter } = useSeason()

const backgroundImage = computed(() => {
  return isWinter.value ? '/img/hero-winter.jpg' : '/img/hero-summer.jpg'
})

const heroContent = computed(() => {
  if (isWinter.value) {
    return {
      title: wTrans('hero.winter.title'),
      subtitle: wTrans('hero.winter.subtitle')
    }
  } else {
    return {
      title: wTrans('hero.summer.title'),
      subtitle: wTrans('hero.summer.subtitle')
    }
  }
})
</script>

<template>
    <div>
        <div class="relative h-screen md:h-[650px] overflow-hidden">
            <video 
                autoplay 
                loop 
                muted 
                playsinline
                :poster="backgroundImage"
                class="absolute inset-0 w-full h-full object-cover"
            >
                <source src="/videos/kuncice-spot.webm" type="video/webm">
                <source src="/videos/kuncice-spot.mp4" type="video/mp4">
            </video>
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
                
                <!-- Side Menu -->
                <div class="absolute right-4 top-1/2 -translate-y-1/2 hidden md:block z-20">
                    <HeroSideMenu />
                </div>
            </div>
        </div>
    </div>
    </template>
