<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
import { ref } from 'vue';
import VueEasyLightbox from 'vue-easy-lightbox';

const imgs = [
  '/img/bezky-trasy/trasa1_1.webp',
  '/img/bezky-trasy/Trasa2.webp',
  '/img/bezky-trasy/trasa3.webp',
];
const visible = ref(false);
const index = ref(0);
function showImg(i: number) {
  index.value = i;
  visible.value = true;
}
function hide() {
  visible.value = false;
}
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('cross_country_skiing.page_header.title')"
      :subtitle="trans('cross_country_skiing.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-10">
      <div class="rounded-lg bg-card/80 shadow-xl ring-1 ring-black/5 p-6 md:p-8 border">
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground">Zázemí pro běžkaře ve skiareálu Kunčice</h2>
        <p class="mt-4 text-lg leading-relaxed text-foreground/80">Pokud vyrážíte z našeho skiareálu, můžete se na upravenou lyžařskou stopu pohodlně vyvézt čtyřsedačkovou lanovkou. V Centru služeb pro vás máme vyhřívané převlékárny, toalety i sprchy. K občerstvení využijte naši vynikající restauraci. Osobní věci, které na cestu nebudete potřebovat, si bezpečně uzamknete ve skříňkách.</p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="rounded-lg bg-card shadow-lg ring-1 ring-black/5 p-6 border">
          <h3 class="text-xl font-semibold text-foreground">Komfortní zázemí</h3>
          <ul class="mt-3 space-y-2 text-foreground/80">
            <li>Vyhřívané převlékárny</li>
            <li>Toalety a sprchy</li>
            <li>Uzamykatelné skříňky</li>
          </ul>
        </div>
        <div class="rounded-lg bg-card shadow-lg ring-1 ring-black/5 p-6 border">
          <h3 class="text-xl font-semibold text-foreground">Přístup na trasy</h3>
          <ul class="mt-3 space-y-2 text-foreground/80">
            <li>Výjezd na stopu čtyřsedačkovou lanovkou</li>
            <li>Napojení na upravené běžecké stopy</li>
            <li>Start přímo z areálu Kunčice</li>
          </ul>
        </div>
        <div class="rounded-lg bg-card shadow-lg ring-1 ring-black/5 p-6 border">
          <h3 class="text-xl font-semibold text-foreground">Občerstvení</h3>
          <ul class="mt-3 space-y-2 text-foreground/80">
            <li>Vynikající restaurace v Centru služeb</li>
            <li>Teplé nápoje a rychlé občerstvení</li>
            <li>Příjemné posezení před i po výletu</li>
          </ul>
        </div>
      </div>

      <div class="flex flex-wrap gap-3">
        <Link href="/centrum-sluzeb-turistum" class="inline-flex items-center rounded-lg bg-primary text-primary-foreground px-4 py-2 font-medium shadow transition hover:bg-primary/90">Centrum služeb</Link>
        <Link href="/restaurace" class="inline-flex items-center rounded-lg bg-brand-secondary text-white px-4 py-2 font-medium shadow transition hover:bg-brand-secondary/90">Restaurace</Link>
      </div>

      <div class="rounded-lg bg-card p-6 md:p-8 shadow-lg border">
        <h3 class="text-xl md:text-2xl font-semibold text-foreground">Jantarová běžka</h3>
        <p class="mt-3 text-foreground/80">Každoročně město Staré Město a polské Stronie Śląskie pořádají turistickou akci Jantarová běžka.</p>
        <div class="mt-4">
          <Link href="/kalendar-akci" class="inline-flex items-center rounded-lg bg-primary text-primary-foreground px-4 py-2 font-medium shadow transition hover:bg-primary/90">Kalendář akcí</Link>
        </div>
      </div>

      <div class="space-y-6">
        <h3 class="text-2xl font-semibold text-foreground">Běžecké trasy</h3>
        <div class="grid gap-6 md:grid-cols-3">
          <div class="rounded-lg bg-card shadow-lg ring-1 ring-black/5 p-4 border">
            <img :src="imgs[0]" alt="1. trasa – 24,5 km" class="w-full h-auto rounded-lg shadow cursor-zoom-in" @click="showImg(0)" />
            <div class="mt-3">
              <h4 class="text-lg font-semibold text-foreground">1. trasa</h4>
              <p class="text-foreground/80">24,5 km</p>
            </div>
          </div>
          <div class="rounded-lg bg-card shadow-lg ring-1 ring-black/5 p-4 border">
            <img :src="imgs[1]" alt="2. trasa – 15 km" class="w-full h-auto rounded-lg shadow cursor-zoom-in" @click="showImg(1)" />
            <div class="mt-3">
              <h4 class="text-lg font-semibold text-foreground">2. trasa</h4>
              <p class="text-foreground/80">15 km</p>
            </div>
          </div>
          <div class="rounded-lg bg-card shadow-lg ring-1 ring-black/5 p-4 border">
            <img :src="imgs[2]" alt="3. trasa – 9,5 km" class="w-full h-auto rounded-lg shadow cursor-zoom-in" @click="showImg(2)" />
            <div class="mt-3">
              <h4 class="text-lg font-semibold text-foreground">3. trasa</h4>
              <p class="text-foreground/80">9,5 km</p>
            </div>
          </div>
        </div>
      </div>

      <VueEasyLightbox :visible="visible" :imgs="imgs" :index="index" @hide="hide" />
    </div>
  </AppLayout>
</template>
