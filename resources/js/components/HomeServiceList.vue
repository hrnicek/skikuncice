<script setup lang="ts">
import { computed } from 'vue'
import { useSeason } from '@/composables/useSeason'
import { Link } from '@inertiajs/vue3';
import LazyBackgroundVideo from '@/components/LazyBackgroundVideo.vue';

import { trans } from 'laravel-vue-i18n';

interface Service {
    title: string;
    description: string;
    image: string | null;
    video?: string;
    videoSources?: { src: string; type: string }[];
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
                image: '/img/services/ubytovani.webp',
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
                image: '/img/services/restaurace.webp',
                link: '#'
            }
        ];
    } else {
        return [
            {
                title: trans('home_service_list.winter.s1.title'),
                description: trans('home_service_list.winter.s1.description'),
                image: '/img/services/skiskola.webp',
                link: route('ski-school')
            },
            {
                title: trans('home_service_list.winter.s2.title'),
                description: trans('home_service_list.winter.s2.description'),
                image: '/img/services/ubytovani.webp',
                link: route('accommodation.index')
            },
            {
                title: trans('home_service_list.winter.s3.title'),
                description: trans('home_service_list.winter.s3.description'),
                image: '/img/services/restaurace.webp',
                link: route('restaurant')
            },
            {
                title: trans('home_service_list.winter.s4.title'),
                description: trans('home_service_list.winter.s4.description'),
                image: '/img/skirental-box.webp',
                video: '/videos/video1.mp4',
                videoSources: [
                    { src: '/videos/video1.webm', type: 'video/webm' },
                    { src: '/videos/video1.mp4', type: 'video/mp4' }
                ],
                link: route('ski-rental')
            },
            {
                title: trans('home_service_list.winter.s5.title'),
                description: trans('home_service_list.winter.s5.description'),
                image: '/img/services/centrum.webp',
                link: route('tourist-services-center')
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
                            <LazyBackgroundVideo v-if="services[0]?.video || services[0]?.videoSources" :src="services[0]?.video" :sources="services[0]?.videoSources" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" />
                            <img v-else :src="services[0]?.image ?? undefined" :alt="services[0]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" loading="lazy">
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
                            <LazyBackgroundVideo v-if="services[1]?.video || services[1]?.videoSources" :src="services[1]?.video" :sources="services[1]?.videoSources" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" />
                            <img v-else :src="services[1]?.image ?? undefined" :alt="services[1]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" loading="lazy">
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                                <h3 class="text-lg font-semibold mb-1">{{ services[1]?.title }}</h3>
                                <p class="text-xs opacity-90 line-clamp-2">{{ services[1]?.description }}</p>
                            </div>
                        </div>
                    </Link>
                </div>

                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <Link :href="services[2]?.link">
                    <div class="bg-white rounded-md overflow-hidden h-full relative group">
                        <LazyBackgroundVideo v-if="services[2]?.video || services[2]?.videoSources" :src="services[2]?.video" :sources="services[2]?.videoSources" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" />
                        <img v-else :src="services[2]?.image ?? undefined" :alt="services[2]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" loading="lazy">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                            <h3 class="text-lg font-semibold mb-1">{{ services[2]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[2]?.description }}</p>
                        </div>
                    </div>
                </Link>
                </div>

                <!-- Bottom row cards -->
                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <Link :href="services[3]?.link">
                    <div class="bg-white rounded-md overflow-hidden h-full relative group">
                        <LazyBackgroundVideo v-if="services[3]?.video || services[3]?.videoSources" :src="services[3]?.video" :sources="services[3]?.videoSources" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" />
                        <img v-else :src="services[3]?.image ?? undefined" :alt="services[3]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" loading="lazy">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                            <h3 class="text-base font-semibold mb-1">{{ services[3]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[3]?.description }}</p>
                        </div>
                    </div>
                </Link>
                </div>

                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <Link :href="services[4]?.link">
                    <div class="bg-white rounded-md overflow-hidden h-full relative group">
                        <LazyBackgroundVideo v-if="services[4]?.video || services[4]?.videoSources" :src="services[4]?.video" :sources="services[4]?.videoSources" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" />
                        <img v-else :src="services[4]?.image ?? undefined" :alt="services[4]?.title" class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-105" loading="lazy">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-overlay">
                            <h3 class="text-base font-semibold mb-1">{{ services[4]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[4]?.description }}</p>
                        </div>
                    </div>
                </Link>
                </div>
            </div>
        </div>
    </section>
</template>
