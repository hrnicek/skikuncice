<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('ski_bus.page_header.title')"
      :subtitle="trans('ski_bus.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">
      <!-- Hero Section -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">{{ trans('ski_bus.hero.title') }}</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          {{ trans('ski_bus.hero.subtitle') }}
        </p>
      </div>

      <!-- Status Card -->
      <div class="bg-gradient-to-r from-red-50 to-orange-50 border-l-4 border-red-400 p-8 rounded-md">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <svg class="h-8 w-8 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-semibold text-red-800">{{ trans('ski_bus.status.title') }}</h3>
            <p class="text-red-700 mt-1">
              {{ trans('ski_bus.status.subtitle') }}
            </p>
          </div>
        </div>
      </div>

      <!-- Service Description -->
      <div class="bg-white rounded-md shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-primary mb-6">{{ trans('ski_bus.service_description.title') }}</h2>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold">1</div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_bus.service_description.s1.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_bus.service_description.s1.subtitle') }}</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold">2</div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_bus.service_description.s2.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_bus.service_description.s2.subtitle') }}</p>
              </div>
            </div>
          </div>

          <div class="space-y-4">
            <div class="flex items-start">
              <div class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold">3</div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_bus.service_description.s3.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_bus.service_description.s3.subtitle') }}</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold">4</div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_bus.service_description.s4.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_bus.service_description.s4.subtitle') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Benefits -->
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-primary to-primary/80 text-white rounded-md p-6 shadow-lg">
          <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">{{ trans('ski_bus.benefits.b1.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('ski_bus.benefits.b1.subtitle') }}</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-md p-6 shadow-lg">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">{{ trans('ski_bus.benefits.b2.title') }}</h3>
          <p class="text-gray-700">{{ trans('ski_bus.benefits.b2.subtitle') }}</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-md p-6 shadow-lg">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">{{ trans('ski_bus.benefits.b3.title') }}</h3>
          <p class="text-gray-700">{{ trans('ski_bus.benefits.b3.subtitle') }}</p>
        </div>
      </div>

      <!-- Contact CTA -->
      <div class="text-center bg-primary text-white rounded-md p-8">
        <h3 class="text-2xl font-semibold mb-4">{{ trans('ski_bus.cta.title') }}</h3>
        <p class="text-lg mb-6 text-primary-foreground/90">
          {{ trans('ski_bus.cta.subtitle') }}
        </p>
        <a href="/kontakt" class="inline-flex items-center px-6 py-3 bg-white text-primary font-semibold rounded-md hover:bg-gray-50 transition-colors">
          {{ trans('ski_bus.cta.button') }}
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </AppLayout>
</template>
