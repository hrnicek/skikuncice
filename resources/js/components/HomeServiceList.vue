<script setup lang="ts">
interface Service {
    title: string;
    description: string;
    image: string;
}

const services: Service[] = [
    {
        title: 'SKI škola',
        description: 'Vyškolení instruktoři naučí lyžovat i ty největší sportovní antitalenty. Máme moderní dětský vlek a bezpečnou sjezdovku',
        image: '/img/services/skiskola.jpg'
    },
    {
        title: 'Ubytování',
        description: 'Spolupracujeme s majiteli hotelů a penzionů v Kunčicích. Kontaktujte nás a my vám zařídíme to nejlepší ubytování.',
        image: '/img/services/ubytovani.jpg'
    },
    {
        title: 'Restaurace',
        description: 'Posilněte se při celodenním lyžování v hospůdce U Rumařů nebo využijte skibar Kulaťák pod výstupní stanicí lanovky.',
        image: '/img/services/restaurace.jpg'
    },
    {
        title: 'Půjčovna lyží',
        description: 'Půjčte si komplet nebo jeho část na lyžování i freestyle. Pokud si chcete lyže rovnou koupit, vybereme s vámi ty nejlepší.',
        image: 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=400&h=300&fit=crop&crop=center'
    },
    {
        title: 'Centrum služeb, karavany',
        description: 'V Centru služeb najdete toalety, sprchy, teplé posezení, dětský koutek, převlékárny a zázemí pro karavanisty. Jen pár kroků od Centra jsou vyhrazena stání pro karavany s přípojkami elektrické energie.',
        image: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop&crop=center'
    }
];
</script>

<template>
    <section class="py-16">
        <div class="container">
            <h2 class="text-3xl font-bold text-center mb-12">Naše služby</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 auto-rows-[200px]">
                <!-- Large featured card -->
                <div class="md:col-span-2 lg:col-span-3 lg:row-span-2">
                    <div class="bg-white rounded-4xl overflow-hidden h-full relative group">
                        <img :src="services[0]?.image" :alt="services[0]?.title" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">{{ services[0]?.title }}</h3>
                            <p class="text-sm opacity-90">{{ services[0]?.description }}</p>
                        </div>
                    </div>
                </div>

                <!-- Medium cards -->
                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-4xl overflow-hidden h-full relative group">
                        <img :src="services[1]?.image" :alt="services[1]?.title" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="text-lg font-semibold mb-1">{{ services[1]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[1]?.description }}</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-4xl overflow-hidden h-full relative group">
                        <img :src="services[2]?.image" :alt="services[2]?.title" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="text-lg font-semibold mb-1">{{ services[2]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[2]?.description }}</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom row cards -->
                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-4xl overflow-hidden h-full relative group">
                        <img :src="services[3]?.image" :alt="services[3]?.title" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="text-base font-semibold mb-1">{{ services[3]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[3]?.description }}</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 lg:col-span-1 lg:row-span-1">
                    <div class="bg-white rounded-4xl overflow-hidden h-full relative group">
                        <img :src="services[4]?.image" :alt="services[4]?.title" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="text-base font-semibold mb-1">{{ services[4]?.title }}</h3>
                            <p class="text-xs opacity-90 line-clamp-2">{{ services[4]?.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>