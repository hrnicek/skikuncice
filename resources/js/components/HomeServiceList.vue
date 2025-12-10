<script setup lang="ts">
import { computed, h } from 'vue'
import { useSeason } from '@/composables/useSeason'
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
import { trans } from 'laravel-vue-i18n';

interface Service {
    title: string;
    description: string;
    image: string;
    link?: string
}

// Use season composable
const { isWinter, isSummer } = useSeason()

const services = computed<Service[]>(() => {
    if (isSummer.value) {
        return [
            {
                title: trans('home_service_list.summer.s1.title'),
                description: trans('home_service_list.summer.s1.description'),
                image: 'https://images.unsplash.com/photo-1551632811-561732d1e306?w=400&h=300&fit=crop&crop=center',
                link: '#'
            },
            {
                title: trans('home_service_list.summer.s2.title'),
                description: trans('home_service_list.summer.s2.description'),
                image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop&crop=center',
                link: '#'
            },
            {
                title: trans('home_service_list.summer.s3.title'),
                description: trans('home_service_list.summer.s3.description'),
                image: '/img/services/ubytovani.jpg',
                link: '#'
            },
            {
                title: trans('home_service_list.summer.s4.title'),
                description: trans('home_service_list.summer.s4.description'),
                image: 'https://images.unsplash.com/photo-1553284965-83fd3e82fa5a?w=400&h=300&fit=crop&crop=center',
                link: '#'
            },
            {
                title: trans('home_service_list.summer.s5.title'),
                description: trans('home_service_list.summer.s5.description'),
                image: '/img/services/restaurace.jpg',
                link: '#'
            }
        ];
    } else {
        return [
            {
                title: trans('home_service_list.winter.s1.title'),
                description: trans('home_service_list.winter.s1.description'),
                image: '/img/services/skiskola.jpg',
                link: route('ski-school')
            },
            {
                title: trans('home_service_list.winter.s2.title'),
                description: trans('home_service_list.winter.s2.description'),
                image: '/img/services/ubytovani.jpg',
                link: route('accommodation')
            },
            {
                title: trans('home_service_list.winter.s3.title'),
                description: trans('home_service_list.winter.s3.description'),
                image: '/img/services/restaurace.jpg',
                link: route('restaurant')
            },
            {
                title: trans('home_service_list.winter.s4.title'),
                description: trans('home_service_list.winter.s4.description'),
                image: 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=400&h=300&fit=crop&crop=center',
                link: '#'
            },
            {
                title: trans('home_service_list.winter.s5.title'),
                description: trans('home_service_list.winter.s5.description'),
                image: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop&crop=center',
                link: '#'
            }
        ];
    }
});

const sectionTitle = computed(() => {
    return isSummer.value ? trans('home_service_list.summer_title') : trans('home_service_list.winter_title')
})
</script>

<template>
    <section class="mt-16">
        <div class="container">
            <h2 class="text-3xl font-bold text-left mb-6">{{ sectionTitle }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 auto-rows-[200px]">
                <!-- Large featured card -->
                <div class="md:col-span-2 lg:col-span-3 lg:row-span-2">
                    <Link :href="services[0]?.link">
                        <div class="bg-white rounded-md overflow-hidden h-full relative group">
                            <img :src="services[0]?.image" :alt="services[0]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white bg-overlay">
                                <h3 class="text-2xl font-bold mb-2">{{ services[0]?.title }}</h3>
                                <p class="text-sm opacity-90">{{ services[0]?.description }}</p>
                            </div>
                        </div>
                    </Link>
                </div>


                <!-- Medium cards -->
                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <Link :href="services[1]?.link">
                        <div class="bg-white rounded-md overflow-hidden h-full relative group">
                            <img :src="services[1]?.image" :alt="services[1]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105">
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                                <h3 class="text-lg font-semibold mb-1">{{ services[1]?.title }}</h3>
                                <p class="text-xs opacity-90 line-clamp-2">{{ services[1]?.description }}</p>
                            </div>
                        </div>
                    </Link>
                </div>

                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-md overflow-hidden h-full relative group">
                        <img :src="services[2]?.image" :alt="services[2]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                            <h3 class="text-lg font-semibold mb-1">{{ services[2]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[2]?.description }}</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom row cards -->
                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-md overflow-hidden h-full relative group">
                        <img :src="services[3]?.image" :alt="services[3]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                            <h3 class="text-base font-semibold mb-1">{{ services[3]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[3]?.description }}</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-md overflow-hidden h-full relative group">
                        <img :src="services[4]?.image" :alt="services[4]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                            <h3 class="text-base font-semibold mb-1">{{ services[4]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[4]?.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
