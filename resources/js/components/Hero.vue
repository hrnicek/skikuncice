<script setup lang="ts">
import HeroWeather from './HeroWeather.vue'
</script>

<template>
    <div class="row mt-8">
        <div class="relative max-h-[700px] overflow-hidden rounded-4xl">
            <!-- Background Image -->
            <img src="/img/hero.jpg" alt="úvodní fotka" class="w-full h-full object-cover">
            
            <!-- Dark Overlay for better contrast -->
            <div class="absolute inset-0 bg-black/20"></div>
            
            <!-- Hero Content -->
            <div class="absolute inset-0 flex flex-col justify-between p-6 md:p-8">

                <!-- Main Title -->
                <div class="text-center text-white mb-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">
                       Lyžovačka pro celou rodinu
                    </h1>
                    <p class="text-lg md:text-xl opacity-90">
                        Za perfektní lyžovačkou nemusíte do Alp
                    </p>
                </div>

                <!-- Weather Widget -->
                <HeroWeather />
            </div>
        </div>
    </div>
</template>