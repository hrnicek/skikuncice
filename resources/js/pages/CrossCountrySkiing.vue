<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('cross_country_skiing.page_header.title')"
      :subtitle="trans('cross_country_skiing.page_header.subtitle')"
    />
    <div class="container">
      <div>
        <p>
          {{ trans('cross_country_skiing.content') }}
        </p>
      </div>
    </div>
  </AppLayout>
</template>
