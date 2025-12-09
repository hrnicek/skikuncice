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
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-[var(--primary)]">{{ trans('tourist_services_center.hero.title') }}</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-700">{{ trans('tourist_services_center.hero.p1') }}</p>
        <p class="mt-3 text-slate-700">{{ trans('tourist_services_center.hero.p2') }}</p>
      </div>

      <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">{{ trans('tourist_services_center.facilities.title') }}</h3>
          <ul class="mt-3 space-y-2 text-slate-700">
            <li>{{ trans('tourist_services_center.facilities.i1') }}</li>
            <li>{{ trans('tourist_services_center.facilities.i2') }}</li>
            <li>{{ trans('tourist_services_center.facilities.i3') }}</li>
            <li>{{ trans('tourist_services_center.facilities.i4') }}</li>
          </ul>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">{{ trans('tourist_services_center.caravan.title') }}</h3>
          <p class="mt-3 text-slate-700">{{ trans('tourist_services_center.caravan.p1') }}</p>
          <div class="mt-4">
            <div class="rounded-xl bg-slate-50 ring-1 ring-slate-200 p-4">
              <p class="font-medium text-slate-900">{{ trans('tourist_services_center.caravan.pricing.title') }}</p>
              <ul class="mt-2 space-y-1 text-slate-700">
                <li>500&nbsp;Kč / noc</li>
                <li>3&nbsp;000&nbsp;Kč / 7 nocí (týden)</li>
                <li>12&nbsp;000&nbsp;Kč / celosezónní</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">{{ trans('tourist_services_center.operating_info.title') }}</h3>
          <ul class="mt-3 space-y-2 text-slate-700">
            <li>{{ trans('tourist_services_center.operating_info.i1') }}</li>
            <li>{{ trans('tourist_services_center.operating_info.i2') }}</li>
            <li>{{ trans('tourist_services_center.operating_info.i3') }}</li>
          </ul>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6 md:col-span-2 lg:col-span-3">
          <h3 class="text-xl font-semibold text-[var(--primary)]">{{ trans('tourist_services_center.reservation.title') }}</h3>
          <p class="mt-3 text-slate-700">{{ trans('tourist_services_center.reservation.p1') }}</p>
          <div class="mt-4 flex flex-wrap gap-3">
            <a href="mailto:info@skikuncice.cz" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-[var(--brand-secondary)] shadow-sm hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--brand-secondary)]">info@skikuncice.cz</a>
            <a href="tel:+420734647679" class="inline-flex items-center justify-center rounded-full px-5 py-2.5 text-sm font-semibold text-white bg-[var(--brand-secondary)] shadow-sm hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--brand-secondary)]">+420&nbsp;734&nbsp;647&nbsp;679</a>
          </div>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">{{ trans('tourist_services_center.courses_facilities.title') }}</h3>
          <p class="mt-3 text-slate-700">{{ trans('tourist_services_center.courses_facilities.p1') }}</p>
        </div>

        <div class="rounded-2xl bg-white shadow-lg ring-1 ring-black/5 p-6">
          <h3 class="text-xl font-semibold text-[var(--primary)]">{{ trans('tourist_services_center.available_services.title') }}</h3>
          <ul class="mt-3 space-y-2 text-slate-700">
            <li>{{ trans('tourist_services_center.available_services.i1') }}</li>
            <li>{{ trans('tourist_services_center.available_services.i2') }}</li>
          </ul>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
