<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('restaurant.page_header.title')"
      :subtitle="trans('restaurant.page_header.subtitle')"
    />

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      </div>
  </AppLayout>
</template>
