<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue'
import PageHeader from '@/components/PageHeader.vue'
import { Phone, Mail, MapPin } from 'lucide-vue-next'
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('contact.page_header.title')"
      :subtitle="trans('contact.page_header.subtitle')"
    />
    
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
        
        <!-- Left Column: Primary Info -->
        <div class="space-y-10">
          
          <!-- Ski Area Info -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 hover:shadow-md transition-shadow duration-300">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
              <span class="w-10 h-10 rounded-lg bg-[var(--primary)]/10 flex items-center justify-center text-[var(--primary)]">
                <MapPin class="w-5 h-5" />
              </span>
              {{ trans('contact.ski_areal.title') }}
            </h2>

            <div class="space-y-6">
              <div>
                <h3 class="font-semibold text-lg text-gray-900 mb-2">{{ trans('contact.ski_areal.company') }}</h3>
                <div class="text-gray-600 space-y-1 leading-relaxed">
                  <p>{{ trans('contact.ski_areal.address') }}</p>
                  <p class="text-sm font-mono text-gray-500 mt-2 bg-gray-50 inline-block px-2 py-1 rounded">{{ trans('contact.ski_areal.gps') }}</p>
                  <p class="text-sm text-gray-400 mt-1">{{ trans('contact.ski_areal.tax_info') }}</p>
                </div>
              </div>

               <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                  <div class="w-10 h-10 rounded-full bg-[var(--brand-secondary)]/10 flex items-center justify-center text-[var(--brand-secondary)] flex-shrink-0">
                    <Mail class="w-5 h-5" />
                  </div>
                  <a href="mailto:info@skikuncice.cz" class="text-lg font-medium text-gray-900 hover:text-[var(--brand-secondary)] transition-colors">
                    info@skikuncice.cz
                  </a>
                </div>
            </div>
          </div>

          <!-- Phone Contacts -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 hover:shadow-md transition-shadow duration-300">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
               <span class="w-10 h-10 rounded-lg bg-[var(--brand-secondary)]/10 flex items-center justify-center text-[var(--brand-secondary)]">
                <Phone class="w-5 h-5" />
              </span>
              {{ trans('contact.phone_contacts.title') }}
            </h2>
            
            <div class="divide-y divide-gray-100">
              <div v-for="(phone, index) in [
                { number: '+420 778 536 037', label: trans('contact.phone_contacts.c1') },
                { number: '+420 777 719 579', label: trans('contact.phone_contacts.c2') },
                { number: '+420 724 837 139', label: trans('contact.phone_contacts.c3') },
                { number: '+420 739 524 093', label: trans('contact.phone_contacts.c5') }
              ]" :key="index" class="py-4 first:pt-0 last:pb-0 flex flex-col sm:flex-row sm:items-center justify-between gap-2 group">
                <a :href="'tel:' + phone.number.replace(/\s/g, '')" class="text-lg font-medium text-gray-900 group-hover:text-[var(--primary)] transition-colors">
                  {{ phone.number }}
                </a>
                <span class="text-sm text-gray-500 font-medium bg-gray-50 px-3 py-1 rounded-full group-hover:bg-gray-100 transition-colors">
                  {{ phone.label }}
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Services & Operations -->
        <div class="space-y-10">
          
          <!-- Services -->
          <div>
            <h3 class="text-xl font-bold text-gray-900 mb-6">{{ trans('contact.specialized_services.title') }}</h3>
            <div class="grid grid-cols-1 gap-6">
              
              <!-- Ski School -->
              <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-start gap-5 hover:border-[var(--brand-secondary)]/30 hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                  <span class="text-2xl">⛷</span>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-gray-900 text-lg mb-1">{{ trans('contact.specialized_services.s1.title') }}</h4>
                  <p class="text-sm text-gray-500 mb-3">{{ trans('contact.specialized_services.s1.company') }}</p>
                  
                  <div class="space-y-2">
                     <a href="tel:+420724837139" class="flex items-center gap-2 text-gray-700 hover:text-[var(--brand-secondary)] transition-colors text-sm font-medium">
                      <Phone class="w-4 h-4 text-gray-400" /> +420 724 837 139
                    </a>
                    <a href="mailto:kuncice@newmanschool.cz" class="flex items-center gap-2 text-gray-700 hover:text-[var(--brand-secondary)] transition-colors text-sm font-medium">
                      <Mail class="w-4 h-4 text-gray-400" /> kuncice@newmanschool.cz
                    </a>
                    <a href="https://www.newmanschool.cz" target="_blank" class="flex items-center gap-2 text-[var(--brand-secondary)] hover:text-[var(--primary)] transition-colors text-sm font-medium">
                      <span class="w-4 h-4">🌐</span> www.newmanschool.cz
                    </a>
                  </div>
                </div>
              </div>

               <!-- Accommodation -->
              <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-start gap-5 hover:border-[var(--brand-secondary)]/30 hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                  <span class="text-2xl">🏠</span>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-gray-900 text-lg mb-1">{{ trans('contact.specialized_services.s2.title') }}</h4>
                  <p class="text-sm text-gray-500 mb-3">{{ trans('contact.specialized_services.s2.subtitle') }}</p>
                  
                  <div class="space-y-2">
                     <a href="tel:+420734647679" class="flex items-center gap-2 text-gray-700 hover:text-[var(--brand-secondary)] transition-colors text-sm font-medium">
                      <Phone class="w-4 h-4 text-gray-400" /> +420 734 647 679
                    </a>
                     <a href="#" class="flex items-center gap-2 text-[var(--brand-secondary)] hover:text-[var(--primary)] transition-colors text-sm font-medium">
                      {{ trans('contact.specialized_services.s2.link') }}
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Operating Info -->
          <div>
            <h3 class="text-xl font-bold text-gray-900 mb-6">{{ trans('contact.operating_info.title') }}</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
              
              <div class="bg-gray-50 rounded-xl p-5 text-center hover:bg-white hover:shadow-md transition-all duration-300 border border-transparent hover:border-gray-100">
                <div class="text-2xl mb-3">⏰</div>
                <h4 class="font-bold text-gray-900 text-sm mb-2">{{ trans('contact.operating_info.i1.title') }}</h4>
                <div class="text-xs text-gray-500 space-y-1">
                  <p>{{ trans('contact.operating_info.i1.p1') }}</p>
                  <p>{{ trans('contact.operating_info.i1.p2') }}</p>
                </div>
              </div>

               <div class="bg-gray-50 rounded-xl p-5 text-center hover:bg-white hover:shadow-md transition-all duration-300 border border-transparent hover:border-gray-100">
                <div class="text-2xl mb-3">🚗</div>
                <h4 class="font-bold text-gray-900 text-sm mb-2">{{ trans('contact.operating_info.i2.title') }}</h4>
                <div class="text-xs text-gray-500 space-y-1">
                  <p>{{ trans('contact.operating_info.i2.p1') }}</p>
                  <p>{{ trans('contact.operating_info.i2.p2') }}</p>
                </div>
              </div>

               <div class="bg-gray-50 rounded-xl p-5 text-center hover:bg-white hover:shadow-md transition-all duration-300 border border-transparent hover:border-gray-100">
                <div class="text-2xl mb-3">🍽️</div>
                <h4 class="font-bold text-gray-900 text-sm mb-2">{{ trans('contact.operating_info.i3.title') }}</h4>
                <div class="text-xs text-gray-500 space-y-1">
                  <p>{{ trans('contact.operating_info.i3.p1') }}</p>
                  <p class="truncate" :title="trans('contact.operating_info.i3.p2')">{{ trans('contact.operating_info.i3.p2') }}</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </AppLayout>
</template>
