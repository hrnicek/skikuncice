<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { Facebook, Instagram, Youtube, MapPin, TrendingUp, Clock, Phone, Mail, Map } from 'lucide-vue-next'
import { trans } from 'laravel-vue-i18n'
</script>

<template>
  <footer class="bg-muted/50 border-t border-gray-200/60 py-24">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        
        <!-- Logo + Social -->
        <div>
          <img src="/img/logo.webp" :alt="trans('footer.logo_alt')" class="h-8 mb-6" />
          <p class="text-gray-600 text-base leading-relaxed mb-8">
            {{ trans('footer.description') }}
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
          <h4 class="font-semibold mb-5 text-gray-900 text-lg">{{ trans('footer.services.title') }}</h4>
          <ul class="space-y-3">
            <li><Link :href="route('ski-rental')" class="footer-link">{{ trans('footer.services.ski_rental') }}</Link></li>
            <li><Link :href="route('ski-school')" class="footer-link">{{ trans('footer.services.ski_school') }}</Link></li>
            <li><Link :href="route('restaurant')" class="footer-link">{{ trans('footer.services.restaurant') }}</Link></li>
            <li><Link :href="route('kids-paradise')" class="footer-link">{{ trans('footer.services.kids_paradise') }}</Link></li>
            <li><Link :href="route('cross-country-skiing')" class="footer-link">{{ trans('footer.services.cross_country_skiing') }}</Link></li>
            <li><Link :href="route('accommodation.index')" class="footer-link">{{ trans('footer.services.accommodation') }}</Link></li>
          </ul>
        </div>

        <!-- O areálu -->
        <div>
          <h4 class="font-semibold mb-5 text-gray-900 text-lg">{{ trans('footer.about.title') }}</h4>
          <ul class="space-y-3">
            <li><Link :href="route('area-map')" class="footer-link">{{ trans('footer.about.area_map') }}</Link></li>
            <li><Link :href="route('webcams')" class="footer-link">{{ trans('footer.about.webcams') }}</Link></li>
            <li><Link :href="route('operating-hours')" class="footer-link">{{ trans('footer.about.operating_hours') }}</Link></li>
          </ul>

          <div class="mt-6 space-y-3">
            <div class="info-box">
              <MapPin class="w-4 h-4 text-gray-500 mr-2" />
              <div>
                <p class="font-medium text-gray-900 text-sm">{{ trans('footer.about.coords') }}</p>
                <p class="text-gray-500 text-xs">{{ trans('footer.about.region') }}</p>
              </div>
            </div>

            <div class="info-box">
              <TrendingUp class="w-4 h-4 text-gray-500 mr-2" />
              <p class="font-medium text-gray-900 text-sm">{{ trans('footer.about.elevation') }}</p>
            </div>
          </div>
        </div>

        <!-- Kontakt -->
        <div>
          <h4 class="font-semibold mb-5 text-gray-900 text-lg">{{ trans('footer.contact.title') }}</h4>
          <div class="space-y-4">
            <div class="contact-card">
              <Phone class="icon" />
              <div>
                <p class="label">{{ trans('footer.contact.rental_school_label') }}</p>
                <a href="tel:+420777719579" class="value hover:text-primary">+420 777 719 579</a>
                <p class="hint">{{ trans('footer.contact.phone_hours') }}</p>
              </div>
            </div>

            <div class="contact-card">
              <Mail class="icon" />
              <div>
                <p class="label">{{ trans('footer.contact.email_label') }}</p>
                <a href="mailto:info@skikuncice.cz" class="value hover:text-primary">info@skikuncice.cz</a>
              </div>
            </div>

            <div class="contact-card">
              <Map class="icon" />
              <div>
                <p class="label">{{ trans('footer.contact.address_label') }}</p>
                <p class="value" v-html="trans('footer.contact.address_value_html')"></p>
              </div>
            </div>

            <div class="contact-card">
              <Clock class="icon" />
              <div>
                <p class="label">{{ trans('footer.contact.operating_hours_label') }}</p>
                <p class="value">{{ trans('footer.contact.operating_hours_value') }}</p>
                <p class="hint">{{ trans('footer.contact.operating_hours_hint') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom -->
      <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row items-center justify-between text-sm text-gray-500 gap-4">
        <p>{{ trans('footer.bottom.copyright') }}</p>
        <div class="flex items-center gap-2">
          <span>{{ trans('footer.bottom.made_by') }}</span>
          <a href="https://zondy.cz" target="_blank" class="font-medium text-gray-700 hover:text-primary">Zondy</a>
        </div>
        <div class="flex gap-6">
          <a href="#" class="footer-link text-sm">{{ trans('footer.bottom.privacy') }}</a>
          <a href="#" class="footer-link text-sm">{{ trans('footer.bottom.terms') }}</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>

</style>
