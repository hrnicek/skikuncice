<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue'
import PageHeader from '@/components/PageHeader.vue'
import { Phone, Mail, MapPin } from 'lucide-vue-next'
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Kontakt"
      subtitle="Spojte se s námi"
    />
    
    <div class="container mx-auto section-spacing max-w-4xl mt-8 md:mt-16 px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 mb-12 md:mb-16">
        <div class="space-y-6 md:space-y-8">
          <div>
            <h2 class="text-xl md:text-2xl font-bold text-neutral-900 mb-4 md:mb-6">SKI areál Kunčice</h2>

            <div class="space-y-4">
              <div>
                <h3 class="text-base md:text-lg font-semibold text-neutral-900 mb-2">SKITECH s.r.o.</h3>
                <div class="flex items-start gap-3 text-neutral-600">
                  <MapPin class="size-5 mt-0.5 text-primary flex-shrink-0" />
                  <div class="min-w-0">
                    <p class="text-sm md:text-base">Kunčice 56, Staré Město pod Sněžníkem, 78832</p>
                    <p class="text-xs md:text-sm mt-1">GPS: 50°11'16.044"N, 16°56'21.372"E</p>
                    <p class="text-xs md:text-sm">IČ: 26827182, DIČ: CZ 26827182</p>
                  </div>
                </div>
              </div>
              
              <div class="space-y-2">
                <div class="flex items-center gap-3">
                  <Mail class="size-4 text-primary" />
                  <a href="mailto:skikuncice@seznam.cz" class="text-primary hover:underline">
                    skikuncice@seznam.cz
                  </a>
                </div>
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
          <h3 class="text-base md:text-lg font-semibold text-neutral-900 mb-4 md:mb-6">Telefonní kontakty</h3>
          <div class="space-y-3 md:space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-neutral-200 gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420778536037" class="font-medium text-neutral-900 hover:text-primary break-all">
                  +420 778 536 037
                </a>
              </div>
              <span class="text-sm text-neutral-600">Lyžařské kurzy</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-neutral-200 gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420777719579" class="font-medium text-neutral-900 hover:text-primary break-all">
                  +420 777 719 579
                </a>
              </div>
              <span class="text-sm text-neutral-600">Recepce 8:00-16:00</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-neutral-200 gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420724837139" class="font-medium text-neutral-900 hover:text-primary break-all">
                  +420 724 837 139
                </a>
              </div>
              <span class="text-sm text-neutral-600">Lyžařská škola</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-neutral-200 gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420734647679" class="font-medium text-neutral-900 hover:text-primary break-all">
                  +420 734 647 679
                </a>
              </div>
              <span class="text-sm text-neutral-600">Ubytování</span>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 gap-2">
              <div class="flex items-center gap-3">
                <Phone class="size-4 text-primary flex-shrink-0" />
                <a href="tel:+420739524093" class="font-medium text-neutral-900 hover:text-primary break-all">
                  +420 739 524 093
                </a>
              </div>
              <span class="text-sm text-neutral-600">Hospoda</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Services Section -->
      <div class="space-y-6">
        <h3 class="text-lg md:text-xl font-semibold text-neutral-900 mb-4 md:mb-6">Specializované služby</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
          <!-- Ski School & Rental -->
          <div class="border border-neutral-200 rounded-lg p-6 hover:border-primary/30 transition-colors">
            <div class="flex flex-col sm:flex-row items-start gap-4">
              <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-white text-lg">⛷</span>
              </div>
              <div class="flex-1 min-w-0">
                <h4 class="font-semibold text-neutral-900 mb-2">Lyžařská škola a půjčovna</h4>
                <div class="space-y-2 text-sm">
                  <p class="font-medium text-neutral-800">NEWMAN SCHOOL</p>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <Phone class="size-3 text-neutral-500 flex-shrink-0" />
                      <a href="tel:+420724837139" class="text-primary hover:underline break-all">
                        +420 724 837 139
                      </a>
                    </div>
                    <div class="flex items-center gap-2">
                      <Mail class="size-3 text-neutral-500 flex-shrink-0" />
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
          <div class="border border-neutral-200 rounded-lg p-6 hover:border-primary/30 transition-colors">
            <div class="flex flex-col sm:flex-row items-start gap-4">
              <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-white text-lg">🏠</span>
              </div>
              <div class="flex-1 min-w-0">
                <h4 class="font-semibold text-neutral-900 mb-2">Ubytování</h4>
                <div class="space-y-2 text-sm">
                  <p class="font-medium text-neutral-800">Rezervace ubytování</p>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <Phone class="size-3 text-neutral-500 flex-shrink-0" />
                      <a href="tel:+420734647679" class="text-primary hover:underline break-all">
                        +420 734 647 679
                      </a>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="size-3 flex-shrink-0"></span>
                      <a href="#" class="text-primary hover:underline">
                        Přehled ubytování >>
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
      <div class="border border-neutral-200 rounded-lg p-6 md:p-8 mt-8">
        <h3 class="text-lg md:text-xl font-semibold text-neutral-900 mb-4 md:mb-6 text-center">Provozní informace</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
          <div class="text-center">
            <div class="w-12 h-12 bg-neutral-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-primary text-lg">⏰</span>
            </div>
            <h4 class="font-medium text-neutral-900 mb-2">Provozní doba</h4>
            <div class="text-sm text-neutral-600 space-y-1">
              <p>Dle sněhových podmínek</p>
              <p>Recepce: 8:00 - 16:00</p>
            </div>
          </div>
          <div class="text-center">
            <div class="w-12 h-12 bg-neutral-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-primary text-lg">🚗</span>
            </div>
            <h4 class="font-medium text-neutral-900 mb-2">Parkování</h4>
            <div class="text-sm text-neutral-600 space-y-1">
              <p>Zdarma u areálu</p>
              <p>Dostatečná kapacita</p>
            </div>
          </div>
          <div class="text-center">
            <div class="w-12 h-12 bg-neutral-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-primary text-lg">🍽️</span>
            </div>
            <h4 class="font-medium text-neutral-900 mb-2">Restaurace</h4>
            <div class="text-sm text-neutral-600 space-y-1">
              <p>Teplé občerstvení</p>
              <p class="break-all">Tel: +420 739 524 093</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>