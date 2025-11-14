<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Check, Settings, Phone, Mail, MountainSnow, Waves, Package } from 'lucide-vue-next';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('ski_rental.page_header.title')"
      :subtitle="trans('ski_rental.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">

      <!-- Main Content -->
      <div class="bg-white rounded-md shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-primary mb-6">{{ trans('ski_rental.main_content.title') }}</h2>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                <Check class="w-6 h-6 text-primary" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_rental.main_content.s1.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_rental.main_content.s1.subtitle') }}</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                <Settings class="w-6 h-6 text-primary" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_rental.main_content.s2.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_rental.main_content.s2.subtitle') }}</p>
              </div>
            </div>
          </div>

          <div class="space-y-4">
            <div class="flex items-start">
              <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                <Phone class="w-6 h-6 text-primary" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_rental.main_content.s3.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_rental.main_content.s3.subtitle') }}</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                <Mail class="w-6 h-6 text-primary" />
              </div>
              <div>
                <h3 class="text-lg font-semibold text-primary">{{ trans('ski_rental.main_content.s4.title') }}</h3>
                <p class="text-gray-700">{{ trans('ski_rental.main_content.s4.subtitle') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Equipment Types -->
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mb-4">
            <MountainSnow class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">{{ trans('ski_rental.equipment.e1.title') }}</h3>
          <p class="text-gray-700">{{ trans('ski_rental.equipment.e1.subtitle') }}</p>
        </div>

        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-green-200 rounded-full flex items-center justify-center mb-4">
            <Waves class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">{{ trans('ski_rental.equipment.e2.title') }}</h3>
          <p class="text-gray-700">{{ trans('ski_rental.equipment.e2.subtitle') }}</p>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-md p-6 shadow-lg">
          <div class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mb-4">
            <Package class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-semibold text-primary mb-2">{{ trans('ski_rental.equipment.e3.title') }}</h3>
          <p class="text-gray-700">{{ trans('ski_rental.equipment.e3.subtitle') }}</p>
        </div>
      </div>

      <!-- Contact CTA -->
      <div class="text-center bg-primary text-white rounded-md p-8">
        <h3 class="text-2xl font-semibold mb-4">{{ trans('ski_rental.cta.title') }}</h3>
        <p class="text-lg mb-6 text-primary-foreground/90">
          {{ trans('ski_rental.cta.subtitle') }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="tel:+420724837139" class="inline-flex items-center px-6 py-3 bg-white text-primary font-semibold rounded-md hover:bg-gray-50 transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            +420 724 837 139
          </a>
          <a href="mailto:kuncice@newmanschool.cz" class="inline-flex items-center px-6 py-3 bg-secondary text-primary font-semibold rounded-md hover:bg-secondary/90 transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            {{ trans('ski_rental.cta.email_button') }}
          </a>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
