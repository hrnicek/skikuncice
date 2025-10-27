<script setup lang="ts">
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'
import { route } from 'ziggy-js'
import PartnersSection from '@/components/PartnersSection.vue'
import { 
    Building2, 
    Briefcase, 
    Phone, 
    Facebook, 
    Instagram, 
    Youtube,
    MapPin,
    Clock,
    Mail,
    Globe,
    Mountain,
    TrendingUp,
    Snowflake
} from 'lucide-vue-next'

const arealItems = [
  { title: "Provozní doba", route: "operating-hours" },
  { title: "Aktuální počasí", route: "current-weather" },
  { title: "Mapa areálu", route: "area-map" },
  { title: "Webkamery", route: "webcams" },
  { title: "Fotogalerie", route: "photo-gallery" },
  { title: "Kalendář akcí", route: "calendar" }
]

const services = [
  { title: "Lyžařská škola", route: "ski-school" },
  { title: "Půjčovna lyží", route: "ski-rental" },
  { title: "Restaurace", route: "restaurant" },
  { title: "Dětský ráj", route: "kids-paradise" },
  { title: "Běžky", route: "cross-country-skiing" },
  { title: "Snowpark", route: "snowpark" }
]

import { useSeason } from '@/composables/useSeason'

const { isWinter } = useSeason()

const backgroundImage = computed(() => {
  return isWinter.value ? '/img/bg-footer-winter.jpg' : '/img/bg-footer-summer.jpg'
})
</script>

<template>
    <!-- Footer -->
    <footer class="mt-12 container rounded-4xl">
        <div class="relative overflow-hidden rounded-4xl">
            <img :src="backgroundImage" alt="pozadí footer" class="absolute inset-0 w-full h-full object-cover">
            
            <!-- Dark Overlay with blur for better contrast -->
            <div class="absolute inset-0 bg-black/70 backdrop-blur-xs"></div>
            
            <!-- Footer Content -->
            <div class="relative px-8 py-12">
                <div class="container mx-auto">

                <!-- Hlavní grid layout -->
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-10">
                    
                    <!-- Logo a popis sekce -->
                    <div class="lg:col-span-1">
                        <div class="bg-glass rounded-xl p-6 h-full border border-white/10">
                            <h2 class="font-bold text-xl mb-4 text-brand-secondary">Ski Kunčice</h2>
                            <p class="text-white text-sm leading-relaxed mb-4">
                                Moderní lyžařský areál v srdci Moravskoslezských Beskyd. Nabízíme kvalitní sjezdovky, 
                                profesionální služby a nezapomenutelné zážitky pro celou rodinu.
                            </p>
                            <div class="flex space-x-3 mt-4">
                                <a href="#" class="text-white hover:text-brand-secondary transition-all duration-300 p-2 bg-white/15 rounded-lg hover:bg-brand-secondary/20 hover:scale-110" aria-label="Facebook">
                                    <Facebook class="w-5 h-5" />
                                </a>
                                <a href="#" class="text-white hover:text-brand-secondary transition-all duration-300 p-2 bg-white/15 rounded-lg hover:bg-brand-secondary/20 hover:scale-110" aria-label="Instagram">
                                    <Instagram class="w-5 h-5" />
                                </a>
                                <a href="#" class="text-white hover:text-brand-secondary transition-all duration-300 p-2 bg-white/15 rounded-lg hover:bg-brand-secondary/20 hover:scale-110" aria-label="YouTube">
                                    <Youtube class="w-5 h-5" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- O areálu -->
                    <div>
                        <div class="bg-glass rounded-xl p-6 h-full border border-white/10">
                            <h3 class="text-white font-semibold text-lg mb-4 flex items-center">
                                <Building2 class="w-5 h-5 mr-2 text-brand-secondary" />
                                O areálu
                            </h3>
                            <nav>
                                <ul class="space-y-2">
                                <li><Link :href="route('home')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Úvod</Link></li>
                                <li><Link :href="route('snowpark')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Snowpark</Link></li>
                                <li><Link :href="route('area-map')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Mapa areálu</Link></li>
                                <li><Link :href="route('webcams')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Webkamery</Link></li>
                                <li><Link :href="route('current-weather')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Aktuální počasí</Link></li>
                            </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Služby -->
                    <div>
                        <div class="bg-glass rounded-xl p-6 h-full border border-white/10">
                            <h3 class="text-white font-semibold text-lg mb-4 flex items-center">
                                <Briefcase class="w-5 h-5 mr-2 text-brand-secondary" />
                                Služby
                            </h3>
                            <nav>
                                <ul class="space-y-2">
                                <li><Link :href="route('ski-rental')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Půjčovna lyží</Link></li>
                                <li><Link :href="route('ski-school')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Lyžařská škola</Link></li>
                                <li><Link :href="route('restaurant')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Restaurace</Link></li>
                                <li><Link :href="route('kids-paradise')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Dětský ráj</Link></li>
                                <li><Link :href="route('cross-country-skiing')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Běžky</Link></li>
                                <li><Link :href="route('snowpark')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Snowpark</Link></li>
                                <li><Link :href="route('accommodation')" class="text-white hover:text-white transition-all duration-300 block text-sm py-2 px-3 rounded-lg hover:bg-white/15 hover:translate-x-1 font-medium">Ubytování</Link></li>
                            </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Kontakt -->
                    <div>
                        <div class="bg-glass rounded-xl p-6 h-full border border-white/10">
                            <h3 class="text-white font-semibold text-lg mb-4 flex items-center">
                                <Phone class="w-5 h-5 mr-2 text-brand-secondary" />
                                Kontakt
                            </h3>
                            <div class="space-y-3">
                                <!-- Hlavní kontakt -->
                                <div class="bg-white/10 rounded-lg p-4 hover:bg-white/15 transition-all duration-300 border border-white/20">
                                    <p class="text-white font-medium text-sm mb-2 flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        Půjčovna, lyž. škola
                                    </p>
                                    <p class="text-white text-sm mb-1">
                                        <a href="tel:+420777719579" class="hover:text-brand-secondary transition-colors duration-300 font-medium">
                                            +420 777 719 579
                                        </a>
                                    </p>
                                    <p class="text-xs text-white/70">8:00-16:00 hod</p>
                                </div>
                                
                                <!-- Email -->
                                <div class="bg-white/10 rounded-lg p-4 hover:bg-white/15 transition-all duration-300 border border-white/20">
                                    <p class="text-white font-medium text-sm mb-2 flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        Email
                                    </p>
                                    <p class="text-white text-sm">
                                        <a href="mailto:info@skikuncice.cz" class="hover:text-brand-secondary transition-colors duration-300 font-medium">
                                            info@skikuncice.cz
                                        </a>
                                    </p>
                                </div>

                                <!-- Adresa -->
                                <div class="bg-white/10 rounded-lg p-4 hover:bg-white/15 transition-all duration-300 border border-white/20">
                                    <p class="text-white font-medium text-sm mb-2 flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        Adresa
                                    </p>
                                    <p class="text-white text-sm">
                                        Kunčice pod Ondřejníkem 1<br>
                                        739 13 Kunčice pod Ondřejníkem
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Spodní sekce s dodatečnými informacemi -->
                <div class="bg-glass/60 rounded-xl p-6 border border-white/10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        
                        <!-- SKITECH kontakt -->
                        <div class="text-center md:text-left border border-white/10 bg-white/5 rounded-lg p-4">
                            <h4 class="text-white font-medium text-base mb-4 flex items-center justify-center md:justify-start">
                                <Phone class="w-4 h-4 mr-2 text-white" />
                                SKITECH s.r.o.
                            </h4>
                            <div class="space-y-3 text-sm">
                                <div class="bg-white/10 rounded-lg p-3 hover:bg-white/15 transition-all duration-300 border border-white/20">
                                    <a href="tel:+420558647111" class="text-white hover:text-white transition-colors duration-300 font-medium flex items-center">
                                        <Phone class="w-4 h-4 mr-2 text-white" />
                                        +420 558 647 111
                                    </a>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 hover:bg-white/15 transition-all duration-300 border border-white/20">
                                    <a href="mailto:info@skitech.cz" class="text-white hover:text-white transition-colors duration-300 font-medium flex items-center">
                                        <Mail class="w-4 h-4 mr-2 text-white" />
                                        info@skitech.cz
                                    </a>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 hover:bg-white/15 transition-all duration-300 border border-white/20">
                                    <a href="https://www.skitech.cz" target="_blank" rel="noopener noreferrer" class="text-white hover:text-white transition-colors duration-300 font-medium flex items-center">
                                        <Globe class="w-4 h-4 mr-2 text-white" />
                                        www.skitech.cz
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- GPS a lokace -->
                        <div class="text-center border border-white/10 bg-white/5 rounded-lg p-4">
                            <h4 class="text-white font-medium text-base mb-4 flex items-center justify-center">
                                <MapPin class="w-4 h-4 mr-2 text-white" />
                                Lokace
                            </h4>
                            <div class="text-sm space-y-3">
                                <div class="bg-white/10 rounded-lg p-3 border border-white/20">
                                    <p class="text-white font-medium flex items-center justify-center">
                                        <MapPin class="w-4 h-4 mr-2 text-white" />
                                        GPS: 49.6089°N, 18.1847°E
                                    </p>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 border border-white/20">
                                    <p class="text-white font-medium flex items-center justify-center">
                                        <Mountain class="w-4 h-4 mr-2 text-white" />
                                        Moravskoslezské Beskydy
                                    </p>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 border border-white/20">
                                    <p class="text-white font-medium flex items-center justify-center">
                                        <TrendingUp class="w-4 h-4 mr-2 text-white" />
                                        Nadmořská výška: 580-750 m
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Provozní doba -->
                        <div class="text-center md:text-right border border-white/10 bg-white/5 rounded-lg p-4">
                            <h4 class="text-white font-medium text-base mb-4 flex items-center justify-center md:justify-end">
                                <Clock class="w-4 h-4 mr-2 text-white" />
                                Provozní doba
                            </h4>
                            <div class="text-sm space-y-3">
                                <div class="bg-white/10 rounded-lg p-3 border border-white/20">
                                    <p class="text-white font-medium flex items-center justify-center md:justify-end">
                                        <Clock class="w-4 h-4 mr-2 text-white" />
                                        Denně: 8:00 - 16:00
                                    </p>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 border border-white/20">
                                    <p class="text-white font-medium flex items-center justify-center md:justify-end">
                                        <Snowflake class="w-4 h-4 mr-2 text-white" />
                                        Podle sněhových podmínek
                                    </p>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 border border-white/20">
                                    <p class="text-white font-medium flex items-center justify-center md:justify-end">
                                        <Phone class="w-4 h-4 mr-2 text-white" />
                                        Info linka: 8:00 - 16:00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright a odkazy -->
                    <div class="border-t border-white/20 pt-6 flex flex-col md:flex-row justify-between items-center">
                        <div class="text-center md:text-left mb-4 md:mb-0">
                            <p class="text-white text-sm font-medium">
                                © 2024 Ski Kunčice. Všechna práva vyhrazena.
                            </p>
                        </div>
                        <div class="flex space-x-6 text-sm">
                            <a href="#" class="text-white hover:text-brand-secondary transition-all duration-300 font-medium hover:underline">
                                Ochrana osobních údajů
                            </a>
                            <a href="#" class="text-white hover:text-brand-secondary transition-all duration-300 font-medium hover:underline">
                                Obchodní podmínky
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <PartnersSection />
</template>

