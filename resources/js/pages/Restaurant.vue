<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { trans } from 'laravel-vue-i18n';
import type { RestaurantMenu } from '@/types';

defineProps<{
  foodMenu?: RestaurantMenu | null;
  drinksMenu?: RestaurantMenu | null;
}>();
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('restaurant.page_header.title')"
      :subtitle="trans('restaurant.page_header.subtitle')"
    />

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <nav aria-label="Navigace sekcí" class="sticky top-2 z-20 mb-6">
        <div class="flex flex-wrap gap-2 rounded-full bg-card/80 p-2 shadow ring-1 ring-black/5 border">
          <a href="#rumaru" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">{{ trans('restaurant.nav.rumaru') }}</a>
          <a href="#hajovna" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">{{ trans('restaurant.nav.hajovna') }}</a>
          <a href="#kulatak" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">{{ trans('restaurant.nav.kulatak') }}</a>
          <a href="#hours" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">{{ trans('restaurant.nav.hours') }}</a>
          <a href="#facilities" class="inline-flex items-center rounded-full bg-primary/10 px-3 py-2 text-sm font-medium text-primary transition hover:bg-primary/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">{{ trans('restaurant.nav.facilities') }}</a>
        </div>
      </nav>

      <Card id="downloads" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
        <CardHeader>
          <CardTitle class="text-xl font-semibold text-foreground">{{ trans('restaurant.downloads.title') }}</CardTitle>
        </CardHeader>
        <CardContent>
          <div class="grid gap-4 md:grid-cols-1">
            <div class="rounded-lg border p-4">
              <div class="text-sm font-semibold text-foreground">{{ trans('restaurant.rumaru.title') }}</div>
              <div class="mt-3 flex flex-wrap gap-2">
                <a v-if="foodMenu?.download_url" :aria-label="trans('restaurant.buttons.food_menu_aria')" :href="foodMenu.download_url" target="_blank" download class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">{{ trans('restaurant.buttons.food_menu') }}</a>
                <span v-else class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm opacity-50 pointer-events-none">{{ trans('restaurant.buttons.food_menu') }}</span>
                <a v-if="drinksMenu?.download_url" :aria-label="trans('restaurant.buttons.drinks_menu_aria')" :href="drinksMenu.download_url" target="_blank" download class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">{{ trans('restaurant.buttons.drinks_menu') }}</a>
                <span v-else class="inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold text-white bg-brand-secondary shadow-sm opacity-50 pointer-events-none">{{ trans('restaurant.buttons.drinks_menu') }}</span>
              </div>
            </div>
          </div>
        </CardContent>
      </Card>
      <div class="rounded-lg bg-card/80 shadow-xl ring-1 ring-black/5 p-6 md:p-8 border">
        <div class="flex items-center gap-4">
          <img src="/img/icons/restaurace.png" alt="Restaurace" class="h-10 w-10" />
          <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground">{{ trans('restaurant.intro.title') }}</h2>
        </div>
        <p class="mt-4 text-lg leading-relaxed text-foreground/80">{{ trans('restaurant.intro.p1') }}</p>
        <div class="mt-6 overflow-hidden rounded-lg ring-1 ring-border">
          <img src="/img/services/restaurace.jpg" :alt="trans('restaurant.alt.area_restaurant')" class="h-64 w-full object-cover" />
        </div>
      </div>

      <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <Card id="rumaru" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">{{ trans('restaurant.rumaru.title') }}</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>{{ trans('restaurant.rumaru.p1') }}</p>
            <div class="mt-3">
              <p class="font-medium text-foreground">{{ trans('restaurant.rumaru.menu.title') }}</p>
              <ul class="mt-2 space-y-1">
                <li>{{ trans('restaurant.rumaru.menu.i1') }}</li>
                <li>{{ trans('restaurant.rumaru.menu.i2') }}</li>
                <li>{{ trans('restaurant.rumaru.menu.i3') }}</li>
                <li>{{ trans('restaurant.rumaru.menu.i4') }}</li>
              </ul>
            </div>
            <p class="mt-3">{{ trans('restaurant.rumaru.p2') }}</p>
            <div class="mt-4 flex flex-wrap gap-3">
              <a v-if="foodMenu?.download_url" :aria-label="trans('restaurant.buttons.food_menu_aria')" :href="foodMenu.download_url" target="_blank" download class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">{{ trans('restaurant.buttons.food_menu') }}</a>
              <span v-else class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm opacity-50 pointer-events-none">{{ trans('restaurant.buttons.food_menu') }}</span>
              <a v-if="drinksMenu?.download_url" :aria-label="trans('restaurant.buttons.drinks_menu_aria')" :href="drinksMenu.download_url" target="_blank" download class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">{{ trans('restaurant.buttons.drinks_menu') }}</a>
              <span v-else class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm opacity-50 pointer-events-none">{{ trans('restaurant.buttons.drinks_menu') }}</span>
            </div>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/services/restaurace.jpg" :alt="trans('restaurant.alt.rumaru')" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/home/restaurace.jpg" :alt="trans('restaurant.alt.interior')" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
          </CardContent>
        </Card>

        <Card id="hajovna" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">{{ trans('restaurant.hajovna.title') }}</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>{{ trans('restaurant.hajovna.p1') }}</p>
            <p class="mt-3">{{ trans('restaurant.hajovna.p2') }}</p>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/hero-winter.jpg" :alt="trans('restaurant.alt.terasa_hajovna')" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/cta-skoly.jpg" :alt="trans('restaurant.alt.view_kids_lift')" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
          </CardContent>
        </Card>

        <Card id="kulatak" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">{{ trans('restaurant.kulatak.title') }}</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>{{ trans('restaurant.kulatak.p1') }}</p>
            <p class="mt-3">{{ trans('restaurant.kulatak.p2') }}</p>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/hero-winter.jpg" :alt="trans('restaurant.alt.kulatak_winter')" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/hero-summer.jpg" :alt="trans('restaurant.alt.kulatak_summer')" class="h-36 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
          </CardContent>
        </Card>

        <Card id="hours" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 md:col-span-2 lg:col-span-3 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">{{ trans('restaurant.hours.title') }}</CardTitle>
          </CardHeader>
          <CardContent>
            <div class="grid gap-4 md:grid-cols-3">
              <div class="rounded-lg bg-card ring-1 ring-border p-4">
                <p class="font-semibold text-foreground">{{ trans('restaurant.hours.rumaru.title') }}</p>
                <p class="mt-1 text-foreground/80">{{ trans('restaurant.hours.rumaru.value') }}</p>
              </div>
              <div class="rounded-lg bg-card ring-1 ring-border p-4">
                <p class="font-semibold text-foreground">{{ trans('restaurant.hours.hajovna.title') }}</p>
                <p class="mt-1 text-foreground/80">{{ trans('restaurant.hours.hajovna.value') }}</p>
              </div>
              <div class="rounded-lg bg-card ring-1 ring-border p-4">
                <p class="font-semibold text-foreground">{{ trans('restaurant.hours.kulatak.title') }}</p>
                <p class="mt-1 text-foreground/80">{{ trans('restaurant.hours.kulatak.value') }}</p>
              </div>
            </div>
          </CardContent>
        </Card>

        <Card id="facilities" class="scroll-mt-24 rounded-lg shadow-lg ring-1 ring-black/5 md:col-span-2 lg:col-span-3 border">
          <CardHeader>
            <CardTitle class="text-xl font-semibold text-foreground">{{ trans('restaurant.facilities.title') }}</CardTitle>
          </CardHeader>
          <CardContent class="text-foreground/80">
            <p>{{ trans('restaurant.facilities.p1') }}</p>
            <p class="mt-3">{{ trans('restaurant.facilities.p2') }}</p>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/services/restaurace.jpg" :alt="trans('restaurant.alt.facility_station')" class="h-56 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
              <div class="overflow-hidden rounded-lg ring-1 ring-border">
                <img src="/img/pizza.avif" :alt="trans('restaurant.alt.food')" class="h-56 w-full object-cover transition duration-300 hover:scale-[1.02]" loading="lazy" decoding="async" />
              </div>
            </div>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="tel:+420777719579" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">+420&nbsp;777&nbsp;719&nbsp;579</a>
              <a href="mailto:info@skikuncice.cz" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-brand-secondary shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">info@skikuncice.cz</a>
            </div>
          </CardContent>
        </Card>
      </div>
      
      </div>
  </AppLayout>
</template>
