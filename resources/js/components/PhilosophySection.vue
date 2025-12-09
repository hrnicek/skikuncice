<script setup lang="ts">
import { trans } from 'laravel-vue-i18n'
</script>

<template>
    <section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container">
            <div class="max-w-4xl mx-auto px-4 space-y-8 sm:space-y-10">
                <!-- Odstavec 1 – Co jsou Kunčice -->
                <div class="text-center">
                    <p class="text-base sm:text-lg leading-relaxed text-gray-700 font-light" v-html="trans('philosophy_section.p1')"></p>
                </div>

                <!-- Decorative separator -->
                <div class="flex justify-center gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-primary-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary-400"></div>
                </div>

                <!-- Odstavec 2 – Pro koho a proč -->
                <div class="text-center">
                    <p class="text-base sm:text-lg leading-relaxed text-gray-700 font-light" v-html="trans('philosophy_section.p2')"></p>
                </div>

                <!-- Decorative separator -->
                <div class="flex justify-center gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-primary-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary-400"></div>
                </div>

                <!-- Odstavec 3 – Služby a lokalita -->
                <div class="text-center">
                    <p class="text-base sm:text-lg leading-relaxed text-gray-700 font-light" v-html="trans('philosophy_section.p3')"></p>
                </div>

                <!-- Final message -->
                <div class="text-center pt-4">
                    <p class="text-lg sm:text-xl font-medium text-gray-800 italic" v-html="trans('philosophy_section.p4')"></p>
                </div>
            </div>
        </div>
    </section>
</template>
