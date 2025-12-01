<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('tourist_services_center.page_header.title')"
      :subtitle="trans('tourist_services_center.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="rounded-2xl bg-white/80 shadow-xl ring-1 ring-black/5 p-6 md:p-8">
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-[var(--primary)]">Centrum služeb turistům a karavanům</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-700">Centrum služeb se nachází u nástupní stanice vleku Hájovna. Poskytuje kompletní sociální zázemí včetně sprch, restauraci, slunečnou terasu se závětřím s výhledem na dětské hřiště a dětský vlek a dětský koutek.</p>
        <p class="mt-3 text-slate-700">Výše uvedených sociálních zařízení mohou využívat karavanisté i mimo běžnou provozní dobu Centra.</p>
      </div>

      <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">Zázemí a vybavení</h3>
          <ul class="mt-3 space-y-2 text-slate-700">
            <li>Sprchy a kompletní sociální zázemí</li>
            <li>Restaurace přímo v Centru služeb</li>
            <li>Slunečná terasa se závětřím s výhledem na dětské hřiště a dětský vlek</li>
            <li>Dětský koutek</li>
          </ul>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">Karavan stání a přípojky</h3>
          <p class="mt-3 text-slate-700">Před Centrem služeb jsou vyhrazena stání s <span class="font-medium">16&nbsp;přípojkami elektrické energie</span> pro karavany.</p>
          <div class="mt-4">
            <div class="rounded-xl bg-slate-50 ring-1 ring-slate-200 p-4">
              <p class="font-medium text-slate-900">Ceník parkovacího místa u elektrické přípojky</p>
              <ul class="mt-2 space-y-1 text-slate-700">
                <li>500&nbsp;Kč / noc</li>
                <li>3&nbsp;000&nbsp;Kč / 7 nocí (týden)</li>
                <li>12&nbsp;000&nbsp;Kč / celosezónní</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">Provozní informace</h3>
          <ul class="mt-3 space-y-2 text-slate-700">
            <li>Klíče od sociálek a sprch k vyzvednutí od <span class="font-medium">8:30 do 16:00</span> na pokladně areálu</li>
            <li>Vratná záloha <span class="font-medium">100&nbsp;Kč / klíč</span></li>
            <li>Elektřina dle spotřeby <span class="font-medium">10&nbsp;Kč / kW</span></li>
          </ul>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6 md:col-span-2 lg:col-span-3">
          <h3 class="text-xl font-semibold text-[var(--primary)]">Rezervace karavan stání</h3>
          <p class="mt-3 text-slate-700">Parkovací místo pro karavan rezervujte emailem nebo telefonicky.</p>
          <div class="mt-4 flex flex-wrap gap-3">
            <a href="mailto:info@skikuncice.cz" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-[var(--brand-secondary)] shadow-sm hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--brand-secondary)]">info@skikuncice.cz</a>
            <a href="tel:+420734647679" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-[var(--brand-secondary)] shadow-sm hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--brand-secondary)]">+420&nbsp;734&nbsp;647&nbsp;679</a>
          </div>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">Zázemí pro kurzy</h3>
          <p class="mt-3 text-slate-700">Další milou službou jsou vytápěné převlékárny s uzamykatelnými skříňkami a lyžárny pro lyžařské kurzy u nástupních stanic lanovky a vleků.</p>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">Dostupné služby</h3>
          <ul class="mt-3 space-y-2 text-slate-700">
            <li>Lyžařská škola</li>
            <li>Půjčovna lyžařského a snowboardového vybavení</li>
          </ul>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
