<script setup lang="ts">
import HeroWeather from './HeroWeather.vue'
import HeroWebcam from './HeroWebcam.vue'
import HeroNews from './HeroNews.vue'
</script>

<template>
  <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 max-w-7xl mx-auto w-full items-start">
    <!-- Weather Section -->
    <div class="flex flex-col h-full">
      <h2 class="text-white text-lg sm:text-xl font-bold mb-2 sm:mb-4 drop-shadow-lg">Počasí</h2>
      <HeroWeather />
    </div>

    <!-- Webcam Section -->
    <div class="flex flex-col h-full">
      <h2 class="text-white text-lg sm:text-xl font-bold mb-2 sm:mb-4 drop-shadow-lg">Webkamery</h2>
      <HeroWebcam />
    </div>

    <!-- News Section -->
    <div class="flex flex-col h-full col-span-2 md:col-span-2 lg:col-span-1">
      <h2 class="text-white text-lg sm:text-xl font-bold mb-2 sm:mb-4 drop-shadow-lg">Aktuální informace</h2>
      <HeroNews />
    </div>
  </div>
</template>