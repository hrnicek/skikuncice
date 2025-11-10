<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Dětský snowpark"
      subtitle="Dětský ráj v areálu Hájovna"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">
      <!-- Hero Section -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">Dětský ráj v areálu Hájovna</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Bezpečné a zábavné prostředí pro vaše děti. Dětský lanový vlek se spoustou zvířátek a projížděček, lanová pyramida, houpačky, klouzačky, trampolína a také hrací koutek v teple Centra služeb.
        </p>
      </div>

      <!-- Main Features -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-pink-100 to-purple-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-pink-200 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">Dětský lanový vlek</h3>
          <p class="text-gray-700">Se spoustou zvířátek a projížděček pro bezpečnou zábavu</p>
        </div>

        <div class="bg-gradient-to-br from-blue-100 to-cyan-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">Lanová pyramida</h3>
          <p class="text-gray-700">Lezecká výzva pro odvážné děti</p>
        </div>

        <div class="bg-gradient-to-br from-green-100 to-emerald-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-green-200 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l.707.707A1 1 0 0012.414 11H13a4 4 0 014 4v1a1 1 0 01-1 1H8a1 1 0 01-1-1v-1a4 4 0 014-4h.586a1 1 0 00.707-.293l.707-.707A1 1 0 0111.414 9H13m-4 2h4" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">Houpačky a klouzačky</h3>
          <p class="text-gray-700">Klasické hry pro všechny věkové kategorie</p>
        </div>

        <div class="bg-gradient-to-br from-yellow-100 to-orange-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">Trampolína</h3>
          <p class="text-gray-700">Skákání a zábava pro aktivní děti</p>
        </div>

        <div class="bg-gradient-to-br from-purple-100 to-indigo-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">Hrací koutek</h3>
          <p class="text-gray-700">V teple Centra služeb pro chladné dny</p>
        </div>

        <div class="bg-gradient-to-br from-red-100 to-pink-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-red-200 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">Občerstvení</h3>
          <p class="text-gray-700">Hranolky, párky v rohlíku, pitíčka, fidorky a další laskominy</p>
        </div>
      </div>

      <!-- Info Section -->
      <div class="bg-gradient-to-r from-primary/5 to-secondary/5 rounded-md p-8">
        <div class="text-center">
          <h2 class="text-2xl font-semibold text-primary mb-4">Bezpečné prostředí pro vaše děti</h2>
          <p class="text-gray-700 leading-relaxed max-w-4xl mx-auto">
            Všechny atrakce jsou pravidelně kontrolovány a udržovány v bezpečném stavu. Naši instruktoři dohlížejí na bezpečnost dětí a jsou připraveni pomoci kdykoliv je potřeba. Rodiče mohou sledovat své děti z bezprostřední blízkosti nebo si odpočinout v přilehlých restauracích.
          </p>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center bg-primary text-white rounded-md p-8">
        <h3 class="text-2xl font-semibold mb-4">Přiveďte své děti do Dětského ráje!</h3>
        <p class="text-lg mb-6 text-primary-foreground/90">
          Zatímco vy si užíváte lyžování, vaše děti se skvěle baví v bezpečném prostředí s profesionálním dohledem.
        </p>
        <a href="/kontakt" class="inline-flex items-center px-6 py-3 bg-white text-primary font-semibold rounded-md hover:bg-gray-50 transition-colors">
          Kontaktovat nás
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </AppLayout>
</template>