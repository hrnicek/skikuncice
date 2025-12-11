<script setup lang="ts">
import HeroWeather from './HeroWeather.vue'
import HeroWebcam from './HeroWebcam.vue'
import HeroNews from './HeroNews.vue'
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 container w-full items-stretch">
    <!-- News Section (Priority) -->
    <div class="md:col-span-1 h-full">
      <HeroNews />
    </div>

    <!-- Weather Section -->
    <div class="md:col-span-1 h-full">
      <HeroWeather />
    </div>

    <!-- Webcam Section -->
    <div class="md:col-span-1 h-full">
      <HeroWebcam />
    </div>
  </div>
</template>
