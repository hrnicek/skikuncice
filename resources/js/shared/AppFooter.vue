<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Facebook, Instagram, Youtube, MapPin, TrendingUp, Clock, Phone, Mail, Map } from 'lucide-vue-next';
</script>

<template>
    <footer class="bg-muted/50 border-t py-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <div class="md:col-span-1 lg:col-span-1">
                    <img src="/img/logo.png" alt="Ski Kunčice Logo" class="h-12 mb-6" />
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Moderní lyžařský areál v srdci Moravskoslezských Beskyd.
                        Nabízíme kvalitní sjezdovky, profesionální služby a nezapomenutelné zážitky.
                    </p>
                    <div class="flex space-x-6 mb-8">
                        <a href="#" class="text-[#081f54] hover:text-[#0a2a6a] transition-colors" aria-label="Facebook">
                            <Facebook class="w-6 h-6" />
                        </a>
                        <a href="#" class="text-[#081f54] hover:text-[#0a2a6a] transition-colors" aria-label="Instagram">
                            <Instagram class="w-6 h-6" />
                        </a>
                        <a href="#" class="text-[#081f54] hover:text-[#0a2a6a] transition-colors" aria-label="YouTube">
                            <Youtube class="w-6 h-6" />
                        </a>
                    </div>

                </div>

                <div>
                    <h4 class="font-semibold mb-6 text-gray-900 text-lg">Služby</h4>
                    <div class="grid grid-cols-1 gap-3">
                        <Link :href="route('ski-rental')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Půjčovna lyží</Link>
                        <Link :href="route('ski-school')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Lyžařská škola</Link>
                        <Link :href="route('restaurant')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Restaurace</Link>
                        <Link :href="route('kids-paradise')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Dětský ráj</Link>
                        <Link :href="route('cross-country-skiing')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Běžky</Link>
                        <Link :href="route('snowpark')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Snowpark</Link>
                        <Link :href="route('accommodation')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Ubytování</Link>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold mb-6 text-gray-900 text-lg">O areálu</h4>
                    <div class="grid grid-cols-1 gap-3">
                        <Link :href="route('home')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Úvod</Link>
                        <Link :href="route('area-map')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Mapa areálu</Link>
                        <Link :href="route('webcams')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Webkamery</Link>
                        <Link :href="route('current-weather')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Aktuální počasí</Link>
                        <Link :href="route('operating-hours')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Provozní doba</Link>
                        <Link :href="route('photo-gallery')" class="text-gray-600 hover:text-gray-900 transition-colors text-base">Fotogalerie</Link>

                        <!-- GPS Info -->
                        <div class="bg-gray-50 rounded-lg p-4 mt-4">
                            <h5 class="font-semibold text-gray-900 mb-2 flex items-center text-base">
                                <MapPin class="w-4 h-4 mr-2 text-gray-600" />
                                GPS souřadnice
                            </h5>
                            <p class="text-gray-700 font-medium text-base">49.6089°N, 18.1847°E</p>
                            <p class="text-gray-600 text-sm mt-1">Moravskoslezské Beskydy</p>
                        </div>

                        <!-- Altitude Info -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h5 class="font-semibold text-gray-900 mb-2 flex items-center text-base">
                                <TrendingUp class="w-4 h-4 mr-2 text-gray-600" />
                                Nadmořská výška
                            </h5>
                            <p class="text-gray-700 font-medium text-base">580 - 750 m n. m.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold mb-6 text-gray-900 text-lg">Kontakt</h4>
                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-600 mb-2 font-medium flex items-center">
                                <Phone class="w-4 h-4 mr-2 text-[#081f54]" />
                                Půjčovna, lyž. škola
                            </p>
                            <a href="tel:+420777719579" class="text-gray-900 hover:text-primary transition-colors font-semibold">
                                +420 777 719 579
                            </a>
                            <p class="text-gray-500 text-sm mt-1">8:00 - 16:00 hod</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-600 mb-2 font-medium flex items-center">
                                <Mail class="w-4 h-4 mr-2 text-[#081f54]" />
                                Email
                            </p>
                            <a href="mailto:info@skikuncice.cz" class="text-gray-900 hover:text-primary transition-colors font-semibold">
                                info@skikuncice.cz
                            </a>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-600 mb-2 font-medium flex items-center">
                                <Map class="w-4 h-4 mr-2 text-[#081f54]" />
                                Adresa
                            </p>
                            <p class="text-gray-900 font-medium">
                                Staré Město pod Sněžníkem,<br></br> 78832 Kunčice<br />
                            </p>
                        </div>

                        <!-- Operating Hours -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-600 mb-2 font-medium flex items-center">
                                <Clock class="w-4 h-4 mr-2 text-gray-600" />
                                Provozní doba
                            </p>
                            <p class="text-gray-900 font-medium">Denně: 8:00 - 16:00</p>
                            <p class="text-gray-500 text-sm">Podle sněhových podmínek</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm mb-4 md:mb-0">
                        © 2025 Ski Kunčice. Všechna práva vyhrazena.
                    </p>
                    <div class="flex space-x-8 text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors">
                            Ochrana osobních údajů
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors">
                            Obchodní podmínky
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

