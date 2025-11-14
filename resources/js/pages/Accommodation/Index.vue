<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('accommodation.index.page_header.title')"
      :subtitle="trans('accommodation.index.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <p>{{ trans('accommodation.index.content') }}</p>
    </div>
  </AppLayout>
</template>
