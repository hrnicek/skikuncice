<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('about.page_header.title')"
      :subtitle="trans('about.page_header.subtitle')"
    />
    <div class="container my-16 space-y-12">
      <!-- Hero Section -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-primary mb-4">{{ trans('about.hero.title') }}</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed" v-html="trans('about.hero.description')"></p>
      </div>

      <!-- Main Content Card -->
      <div class="bg-white rounded-md shadow-lg p-8 md:p-12">
        <h2 class="text-3xl font-semibold text-primary mb-6">{{ trans('about.main_content.title') }}</h2>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="space-y-4">
            <p class="text-gray-700 leading-relaxed">
              {{ trans('about.main_content.p1') }}
            </p>
            <p class="text-gray-700 leading-relaxed">
              {{ trans('about.main_content.p2') }}
            </p>
          </div>
          <div class="space-y-4">
            <p class="text-gray-700 leading-relaxed">
              {{ trans('about.main_content.p3') }}
            </p>
            <p class="text-gray-700 leading-relaxed">
              {{ trans('about.main_content.p4') }}
            </p>
            <p class="text-gray-700 leading-relaxed font-medium">
              {{ trans('about.main_content.p5') }}
            </p>
          </div>
        </div>
      </div>

      <!-- Services Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">{{ trans('about.services.s1.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('about.services.s1.description') }}</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">{{ trans('about.services.s2.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('about.services.s2.description') }}</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">{{ trans('about.services.s3.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('about.services.s3.description') }}</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">{{ trans('about.services.s4.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('about.services.s4.description') }}</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">{{ trans('about.services.s5.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('about.services.s5.description') }}</p>
        </div>

        <div class="bg-primary text-white rounded-md p-6 shadow-lg">
          <h3 class="text-xl font-semibold mb-3">{{ trans('about.services.s6.title') }}</h3>
          <p class="text-primary-foreground/90">{{ trans('about.services.s6.description') }}</p>
        </div>
      </div>

      <!-- Restaurant Section -->
      <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-md p-8 md:p-12">
        <h3 class="text-2xl font-semibold text-primary mb-4">{{ trans('about.restaurant.title') }}</h3>
        <p class="text-gray-700 leading-relaxed mb-4">
          {{ trans('about.restaurant.p1') }}
        </p>
        <p class="text-gray-700 leading-relaxed">
          {{ trans('about.restaurant.p2') }}
        </p>
      </div>

      <!-- Call to Action -->
      <div class="text-center bg-primary text-white rounded-md p-8 md:p-12">
        <h3 class="text-2xl font-semibold mb-4">{{ trans('about.cta.title') }}</h3>
        <p class="text-lg mb-6 text-primary-foreground/90">
          {{ trans('about.cta.p1') }}
        </p>
        <p class="text-xl font-medium">{{ trans('about.cta.p2') }}</p>
        <p class="mt-4 text-primary-foreground/80">{{ trans('about.cta.p3') }}</p>
      </div>
    </div>
  </AppLayout>
</template>
