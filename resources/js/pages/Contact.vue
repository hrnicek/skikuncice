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
    
    <div class="container mx-auto section-spacing max-w-4xl mt-8 md:mt-16 px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 mb-12 md:mb-16">
        <div class="space-y-6 md:space-y-8">
          <div>
            <h2 class="text-xl md:text-2xl font-bold text-foreground mb-4 md:mb-6">{{ trans('contact.ski_areal.title') }}</h2>

            <div class="space-y-4">
              <div>
                <h3 class="text-base md:text-lg font-semibold text-foreground mb-2">{{ trans('contact.ski_areal.company') }}</h3>
                <div class="flex items-start gap-3 text-foreground/80">
                  <MapPin class="size-5 mt-0.5 text-primary flex-shrink-0" />
                  <div class="min-w-0">
                    <p class="text-sm md:text-base">{{ trans('contact.ski_areal.address') }}</p>
                    <p class="text-xs md:text-sm mt-1">{{ trans('contact.ski_areal.gps') }}</p>
                    <p class="text-xs md:text-sm">{{ trans('contact.ski_areal.tax_info') }}</p>
                  </div>
                </div>
              </div>

              <div class="space-y-2">
                <div class="flex items-center gap-3">
                  <Mail class="size-4 text-primary" />
                  <a href="mailto:info@skikuncice.cz" class="text-primary hover:underline">
                    info@skikuncice.cz
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h3 class="text-base md:text-lg font-semibold text-foreground mb-4 md:mb-6">{{ trans('contact.phone_contacts.title') }}</h3>
          <div class="space-y-3 md:space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420778536037" class="font-medium text-foreground hover:text-primary break-all">
                  +420 778 536 037
                </a>
              </div>
              <span class="text-sm text-foreground/80">{{ trans('contact.phone_contacts.c1') }}</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420777719579" class="font-medium text-foreground hover:text-primary break-all">
                  +420 777 719 579
                </a>
              </div>
              <span class="text-sm text-foreground/80">{{ trans('contact.phone_contacts.c2') }}</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420724837139" class="font-medium text-foreground hover:text-primary break-all">
                  +420 724 837 139
                </a>
              </div>
              <span class="text-sm text-foreground/80">{{ trans('contact.phone_contacts.c3') }}</span>
            </div>


            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420739524093" class="font-medium text-foreground hover:text-primary break-all">
                  +420 739 524 093
                </a>
              </div>
              <span class="text-sm text-foreground/80">{{ trans('contact.phone_contacts.c5') }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Services Section -->
      <div class="space-y-6">
        <h3 class="text-lg md:text-xl font-semibold text-foreground mb-4 md:mb-6">{{ trans('contact.specialized_services.title') }}</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
          <!-- Ski School & Rental -->
          <div class="border rounded-lg p-6 hover:border-primary/30 transition-colors">
            <div class="flex flex-col sm:flex-row items-start gap-4">
              <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-primary-foreground text-lg">⛷</span>
              </div>
              <div class="flex-1 min-w-0">
                <h4 class="font-semibold text-foreground mb-2">{{ trans('contact.specialized_services.s1.title') }}</h4>
                <div class="space-y-2 text-sm">
                  <p class="font-medium text-foreground/90">{{ trans('contact.specialized_services.s1.company') }}</p>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <Phone class="size-3 text-foreground/60 flex-shrink-0" />
                      <a href="tel:+420724837139" class="text-primary hover:underline break-all">
                        +420 724 837 139
                      </a>
                    </div>
                    <div class="flex items-center gap-2">
                      <Mail class="size-3 text-foreground/60 flex-shrink-0" />
                      <a href="mailto:kuncice@newmanschool.cz" class="text-primary hover:underline break-all">
                        kuncice@newmanschool.cz
                      </a>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="size-3 flex-shrink-0"></span>
                      <a href="https://www.newmanschool.cz" target="_blank" class="text-primary hover:underline break-all">
                        www.newmanschool.cz
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Accommodation -->
          <div class="border rounded-lg p-6 hover:border-primary/30 transition-colors">
            <div class="flex flex-col sm:flex-row items-start gap-4">
              <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-primary-foreground text-lg">🏠</span>
              </div>
              <div class="flex-1 min-w-0">
                <h4 class="font-semibold text-foreground mb-2">{{ trans('contact.specialized_services.s2.title') }}</h4>
                <div class="space-y-2 text-sm">
                  <p class="font-medium text-foreground/90">{{ trans('contact.specialized_services.s2.subtitle') }}</p>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <Phone class="size-3 text-foreground/60 flex-shrink-0" />
                      <a href="tel:+420734647679" class="text-primary hover:underline break-all">
                        +420 734 647 679
                      </a>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="size-3 flex-shrink-0"></span>
                      <a href="#" class="text-primary hover:underline">
                        {{ trans('contact.specialized_services.s2.link') }}
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Operating Information -->
      <div class="border rounded-lg p-6 md:p-8 mt-8 mb-8">
        <h3 class="text-lg md:text-xl font-semibold text-foreground mb-4 md:mb-6 text-center">{{ trans('contact.operating_info.title') }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
          <div class="text-center">
            <div class="w-12 h-12 bg-card rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-primary text-lg">⏰</span>
            </div>
            <h4 class="font-medium text-foreground mb-2">{{ trans('contact.operating_info.i1.title') }}</h4>
            <div class="text-sm text-foreground/80 space-y-1">
              <p>{{ trans('contact.operating_info.i1.p1') }}</p>
              <p>{{ trans('contact.operating_info.i1.p2') }}</p>
            </div>
          </div>
          <div class="text-center">
            <div class="w-12 h-12 bg-card rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-primary text-lg">🚗</span>
            </div>
            <h4 class="font-medium text-foreground mb-2">{{ trans('contact.operating_info.i2.title') }}</h4>
            <div class="text-sm text-foreground/80 space-y-1">
              <p>{{ trans('contact.operating_info.i2.p1') }}</p>
              <p>{{ trans('contact.operating_info.i2.p2') }}</p>
            </div>
          </div>
          <div class="text-center">
            <div class="w-12 h-12 bg-card rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-primary text-lg">🍽️</span>
            </div>
            <h4 class="font-medium text-foreground mb-2">{{ trans('contact.operating_info.i3.title') }}</h4>
            <div class="text-sm text-foreground/80 space-y-1">
              <p>{{ trans('contact.operating_info.i3.p1') }}</p>
              <p class="break-all">{{ trans('contact.operating_info.i3.p2') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
