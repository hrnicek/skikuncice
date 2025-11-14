<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('operating_hours.page_header.title')"
      :subtitle="trans('operating_hours.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">
      <!-- Hero Section -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">{{ trans('operating_hours.hero.title') }}</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          {{ trans('operating_hours.hero.subtitle') }}
        </p>
      </div>

      <!-- Main Services -->
      <div class="bg-white rounded-md shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-primary mb-6">{{ trans('operating_hours.main_services.title') }}</h2>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="space-y-4">
            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">{{ trans('operating_hours.main_services.s1.title') }}</h3>
              <p class="text-gray-700"><strong>{{ trans('operating_hours.main_services.daily') }}:</strong> 8:30 - 16:00</p>
            </div>

            <div class="border-l-4 border-secondary pl-4">
              <h3 class="text-xl font-semibold text-primary">{{ trans('operating_hours.main_services.s2.title') }}</h3>
              <p class="text-gray-700"><strong>{{ trans('operating_hours.main_services.wed_sat') }}:</strong> 17:30 - 20:00 - {{ trans('operating_hours.main_services.disclaimer') }}</p>
            </div>

            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">{{ trans('operating_hours.main_services.s3.title') }}</h3>
              <p class="text-gray-700"><strong>{{ trans('operating_hours.main_services.daily') }}:</strong> 8:00 - 16:15</p>
            </div>
          </div>

          <div class="space-y-4">
            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">{{ trans('operating_hours.main_services.s4.title') }}</h3>
              <p class="text-gray-700"><strong>{{ trans('operating_hours.main_services.daily') }}:</strong> 8:30 - 16:00</p>
            </div>

            <div class="border-l-4 border-primary pl-4">
              <h3 class="text-xl font-semibold text-primary">{{ trans('operating_hours.main_services.s5.title') }}</h3>
              <p class="text-gray-700"><strong>{{ trans('operating_hours.main_services.daily') }}:</strong> 8:30 - 16:00</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Restaurants -->
      <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-md p-8">
        <h2 class="text-2xl font-semibold text-primary mb-6">{{ trans('operating_hours.restaurants.title') }}</h2>
        <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="bg-white rounded-md p-6 shadow-sm">
            <h3 class="text-xl font-semibold text-primary mb-3">{{ trans('operating_hours.restaurants.r1.title') }}</h3>
            <p class="text-gray-700"><strong>{{ trans('operating_hours.restaurants.ski_season_only') }}</strong></p>
            <p class="text-gray-700">{{ trans('operating_hours.restaurants.daily') }}: 8:30 - 16:00</p>
          </div>

          <div class="bg-white rounded-md p-6 shadow-sm">
            <h3 class="text-xl font-semibold text-primary mb-3">{{ trans('operating_hours.restaurants.r2.title') }}</h3>
            <p class="text-gray-700"><strong>{{ trans('operating_hours.restaurants.mon_fri') }}:</strong> 11:00 - 15:00</p>
            <p class="text-gray-700"><strong>{{ trans('operating_hours.restaurants.sat_sun_closed') }}</strong></p>
          </div>

          <div class="bg-white rounded-md p-6 shadow-sm">
            <h3 class="text-xl font-semibold text-primary mb-3">{{ trans('operating_hours.restaurants.r3.title') }}</h3>
            <p class="text-gray-700"><strong>{{ trans('operating_hours.restaurants.ski_season_only') }}</strong></p>
            <p class="text-gray-700">{{ trans('operating_hours.restaurants.daily') }}: 9:00 - 15:30</p>
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
            <h3 class="text-sm font-medium text-yellow-800">{{ trans('operating_hours.important_notes.title') }}</h3>
            <div class="mt-2 text-sm text-yellow-700">
              <p>{{ trans('operating_hours.important_notes.content') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
