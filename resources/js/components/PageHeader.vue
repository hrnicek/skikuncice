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
  <div class="mt-0">
    <div class="relative overflow-hidden shadow-xl">
      <img :src="backgroundImage" :alt="title" class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-b from-[var(--primary)]/70 via-[var(--primary)]/40 to-black/60"></div>
      <div class="relative z-10 flex items-center justify-center px-6 py-16 md:px-10 md:py-24">
        <div class="mx-auto max-w-3xl text-center text-white">
          <div class="mx-auto mb-3 h-0.5 w-16 bg-[var(--brand-secondary)]"></div>
          <h1 class="text-3xl md:text-5xl font-semibold tracking-tight leading-tight">
            {{ title }}
          </h1>
          <p v-if="subtitle" class="mt-4 text-base md:text-lg text-white/80">
            {{ subtitle }}
          </p>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black/30 to-transparent"></div>
    </div>
  </div>
</template>