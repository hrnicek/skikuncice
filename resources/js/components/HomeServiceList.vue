<script setup lang="ts">
import { computed, h } from 'vue'
import { useSeason } from '@/composables/useSeason'
import { Link } from '@inertiajs/vue3';

interface Service {
    title: string;
    description: string;
    image: string;
    link?: string
}

// Use season composable
const { isWinter, isSummer } = useSeason()

// Winter services (ski-related)
const winterServices: Service[] = [
    {
        title: 'Lyžařská škola',
        description: 'Vyškolení instruktoři naučí lyžovat i ty největší sportovní antitalenty. Máme moderní dětský vlek a bezpečnou sjezdovku',
        image: '/img/services/skiskola.jpg',
        link: route('ski-school')

    },
    {
        title: 'Ubytování',
        description: 'Spolupracujeme s majiteli hotelů a penzionů v Kunčicích. Kontaktujte nás a my vám zařídíme to nejlepší ubytování.',
        image: '/img/services/ubytovani.jpg',
        link: route('accommodation')
    },
    {
        title: 'Restaurace',
        description: 'Posilněte se při celodenním lyžování v hospůdce U Rumařů nebo využijte skibar Kulaťák pod výstupní stanicí lanovky.',
        image: '/img/services/restaurace.jpg',
        link: route('restaurant')
    },
    {
        title: 'Půjčovna lyží',
        description: 'Půjčte si komplet nebo jeho část na lyžování i freestyle. Pokud si chcete lyže rovnou koupit, vybereme s vámi ty nejlepší.',
        image: 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=400&h=300&fit=crop&crop=center',
        link: '#'
    },
    {
        title: 'Centrum služeb, karavany',
        description: 'V Centru služeb najdete toalety, sprchy, teplé posezení, dětský koutek, převlékárny a zázemí pro karavanisty. Jen pár kroků od Centra jsou vyhrazena stání pro karavany s přípojkami elektrické energie.',
        image: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop&crop=center',
        link: '#'
    }
];

// Summer services (outdoor activities)
const summerServices: Service[] = [
    {
        title: 'TIPY PRO VÝLETY',
        description: 'Vybrali jsme pro vás pár tipů na výlety v blízkém i trochu vzdálenějším okolí. Poznejte krásné památky, nespoutanou přírodu, horské potůčky a studánky...',
        image: 'https://images.unsplash.com/photo-1551632811-561732d1e306?w=400&h=300&fit=crop&crop=center',
        link: '#'
    },
    {
        title: 'CYKLOVÝLETY',
        description: 'Poznejte krásu Kunčic a Staroměstska z trochu jiného pohledu - ze sedla horského kola. Příroda Králického Sněžníku každoročně láká svojí upravenými cyklostezkami.',
        image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop&crop=center',
        link: '#'

    },
    {
        title: 'Ubytování',
        description: 'Spolupracujeme s majiteli hotelů a penzionů v Kunčicích. Kontaktujte nás a my vám zařídíme to nejlepší ubytování.',
        image: '/img/services/ubytovani.jpg',
        link: '#'
    },
    {
        title: 'AGROTURISTIKA - KONĚ',
        description: 'Díky agroturistice můžete zažít to, co byste běžně nezažili - dostanete se blíž přírodě i ke zvířatům. Vyjížďka na koních je příjemným zpestřením rodinné dovolené.',
        image: 'https://images.unsplash.com/photo-1553284965-83fd3e82fa5a?w=400&h=300&fit=crop&crop=center',
        link: '#'
    },
    {
        title: 'Restaurace a občerstvení',
        description: 'Posilněte se při celodenních výletech v hospůdce U Rumařů nebo si vychutnejte občerstvení s výhledem na krásnou krajinu Králického Sněžníku.',
        image: '/img/services/restaurace.jpg',
        link: '#'
    }
];

const services = computed(() => {
    return isSummer.value ? summerServices : winterServices
})

const sectionTitle = computed(() => {
    return isSummer.value ? 'Letní aktivity' : 'Naše služby'
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