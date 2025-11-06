<script setup lang="ts">
interface Props {
  title: string
  subtitle?: string
  backgroundImage?: string
}

const props = withDefaults(defineProps<Props>(), {
  backgroundImage: '/img/hero-winter.jpg'
})
</script>

<template>
  <div class="container mt-4">
    <div class="relative h-48 md:h-56 overflow-hidden rounded-md">
      <img :src="backgroundImage" :alt="title" class="w-full h-full object-cover">

      <div class="absolute inset-0 bg-black/40"></div>

      <div class="absolute inset-0 flex items-center justify-center p-6 md:p-8">
        <div class="text-center text-white">
          <h1 class="text-2xl md:text-4xl font-bold mb-2">
            {{ title }}
          </h1>
          <p v-if="subtitle" class="text-base md:text-base max-w-3xl mx-auto">
            {{ subtitle }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>