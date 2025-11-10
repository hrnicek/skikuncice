<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Provozní doba"
      subtitle="Informace o otevíracích hodinách areálu"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">
      <!-- Hero Section -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">Provozní doby všech služeb v areálu</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Aktuální informace o otevíracích hodinách všech služeb v Skiareálu Kunčice. Provozní doby se mohou měnit podle sezóny a aktuálních podmínek.
        </p>
      </div>

      <!-- Main Services -->
      <div class="bg-white rounded-md shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-primary mb-6">Hlavní služby</h2>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="space-y-4">
            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">Lanovka a vleky</h3>
              <p class="text-gray-700"><strong>Denně:</strong> 8:30 - 16:00</p>
            </div>

            <div class="border-l-4 border-secondary pl-4">
              <h3 class="text-xl font-semibold text-primary">Večerní lyžování</h3>
              <p class="text-gray-700"><strong>Středa, sobota:</strong> 17:30 - 20:00 - dle aktuální situace</p>
            </div>

            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">Pokladny</h3>
              <p class="text-gray-700"><strong>Denně:</strong> 8:00 - 16:15</p>
            </div>
          </div>

          <div class="space-y-4">
            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">Centrum služeb</h3>
              <p class="text-gray-700"><strong>Denně:</strong> 8:30 - 16:00</p>
            </div>

            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">Škola a půjčovna</h3>
              <p class="text-gray-700"><strong>Denně:</strong> 8:30 - 16:00</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Restaurants -->
      <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-md p-8">
        <h2 class="text-2xl font-semibold text-primary mb-6">Restaurace a občerstvení</h2>
        <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="bg-white rounded-md p-6 shadow-sm">
            <h3 class="text-xl font-semibold text-primary mb-3">Restaurace Hájovna</h3>
            <p class="text-gray-700"><strong>Jen lyžařská sezóna</strong></p>
            <p class="text-gray-700">Denně: 8:30 - 16:00</p>
          </div>

          <div class="bg-white rounded-md p-6 shadow-sm">
            <h3 class="text-xl font-semibold text-primary mb-3">Restaurace U Rumařů</h3>
            <p class="text-gray-700"><strong>Pondělí - pátek:</strong> 11:00 - 15:00</p>
            <p class="text-gray-700"><strong>SOBOTA A NEDĚLE: ZAVŘENO</strong></p>
          </div>

          <div class="bg-white rounded-md p-6 shadow-sm">
            <h3 class="text-xl font-semibold text-primary mb-3">Skibar Kulaťák</h3>
            <p class="text-gray-700"><strong>Jen lyžařská sezóna</strong></p>
            <p class="text-gray-700">Denně: 9:00 - 15:30</p>
          </div>
        </div>
      </div>

      <!-- Important Notes -->
      <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-md">
        <div class="flex">
          <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-3">
            <h3 class="text-sm font-medium text-yellow-800">Důležité upozornění</h3>
            <div class="mt-2 text-sm text-yellow-700">
              <p>Provozní doby se mohou měnit v závislosti na počasí, sněhových podmínkách a aktuální situaci. Doporučujeme sledovat aktuální informace na našich webových stránkách nebo sociálních sítích.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>