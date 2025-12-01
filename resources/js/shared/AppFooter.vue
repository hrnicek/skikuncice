<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { Facebook, Instagram, Youtube, MapPin, TrendingUp, Clock, Phone, Mail, Map } from 'lucide-vue-next'
</script>

<template>
  <footer class="bg-muted/50 border-t border-gray-200/60 py-24">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        
        <!-- Logo + Social -->
        <div>
          <img src="/img/logo.png" alt="Ski Kunčice Logo" class="h-8 mb-6" />
          <p class="text-gray-600 text-base leading-relaxed mb-8">
            Moderní lyžařský areál v srdci Moravskoslezských Beskyd. 
            Nabízíme kvalitní sjezdovky, profesionální služby a nezapomenutelné zážitky.
          </p>
          <div class="flex items-center space-x-5">
            <a href="#" aria-label="Facebook" class="text-gray-500 hover:text-[#081f54] transition-colors">
              <Facebook class="w-5 h-5" />
            </a>
            <a href="#" aria-label="Instagram" class="text-gray-500 hover:text-[#081f54] transition-colors">
              <Instagram class="w-5 h-5" />
            </a>
            <a href="#" aria-label="YouTube" class="text-gray-500 hover:text-[#081f54] transition-colors">
              <Youtube class="w-5 h-5" />
            </a>
          </div>
        </div>

        <!-- Služby -->
        <div>
          <h4 class="font-semibold mb-5 text-gray-900 text-lg">Služby</h4>
          <ul class="space-y-3">
            <li><Link :href="route('ski-rental')" class="footer-link">Půjčovna lyží</Link></li>
            <li><Link :href="route('ski-school')" class="footer-link">Lyžařská škola</Link></li>
            <li><Link :href="route('restaurant')" class="footer-link">Restaurace</Link></li>
            <li><Link :href="route('kids-paradise')" class="footer-link">Dětský snowpark</Link></li>
            <li><Link :href="route('cross-country-skiing')" class="footer-link">Běžky</Link></li>
            <li><Link :href="route('accommodation')" class="footer-link">Ubytování</Link></li>
          </ul>
        </div>

        <!-- O areálu -->
        <div>
          <h4 class="font-semibold mb-5 text-gray-900 text-lg">O areálu</h4>
          <ul class="space-y-3">
            <li><Link :href="route('area-map')" class="footer-link">Mapa areálu</Link></li>
            <li><Link :href="route('webcams')" class="footer-link">Webkamery</Link></li>
            <li><Link :href="route('operating-hours')" class="footer-link">Provozní doba</Link></li>
          </ul>

          <div class="mt-6 space-y-3">
            <div class="info-box">
              <MapPin class="w-4 h-4 text-gray-500 mr-2" />
              <div>
                <p class="font-medium text-gray-900 text-sm">49.6089°N, 18.1847°E</p>
                <p class="text-gray-500 text-xs">Moravskoslezské Beskydy</p>
              </div>
            </div>

            <div class="info-box">
              <TrendingUp class="w-4 h-4 text-gray-500 mr-2" />
              <p class="font-medium text-gray-900 text-sm">580–750 m n. m.</p>
            </div>
          </div>
        </div>

        <!-- Kontakt -->
        <div>
          <h4 class="font-semibold mb-5 text-gray-900 text-lg">Kontakt</h4>
          <div class="space-y-4">
            <div class="contact-card">
              <Phone class="icon" />
              <div>
                <p class="label">Půjčovna, lyž. škola</p>
                <a href="tel:+420777719579" class="value hover:text-primary">+420 777 719 579</a>
                <p class="hint">8:00 – 16:00 hod</p>
              </div>
            </div>

            <div class="contact-card">
              <Mail class="icon" />
              <div>
                <p class="label">Email</p>
                <a href="mailto:info@skikuncice.cz" class="value hover:text-primary">info@skikuncice.cz</a>
              </div>
            </div>

            <div class="contact-card">
              <Map class="icon" />
              <div>
                <p class="label">Adresa</p>
                <p class="value">Staré Město pod Sněžníkem<br />788 32 Kunčice</p>
              </div>
            </div>

            <div class="contact-card">
              <Clock class="icon" />
              <div>
                <p class="label">Provozní doba</p>
                <p class="value">Denně: 8:00 – 16:00</p>
                <p class="hint">Podle sněhových podmínek</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom -->
      <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row items-center justify-between text-sm text-gray-500 gap-4">
        <p>© 2025 Ski Kunčice. Všechna práva vyhrazena.</p>
        <div class="flex items-center gap-2">
          <span>made by</span>
          <a href="https://zondy.cz" target="_blank" class="font-medium text-gray-700 hover:text-primary">Zondy</a>
        </div>
        <div class="flex gap-6">
          <a href="#" class="footer-link text-sm">Ochrana osobních údajů</a>
          <a href="#" class="footer-link text-sm">Obchodní podmínky</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>

</style>
