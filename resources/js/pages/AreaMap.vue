<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import { trans } from 'laravel-vue-i18n';
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('area_map.page_header.title')"
      :subtitle="trans('area_map.page_header.subtitle')"
    />
    <div class="container my-16">
      <img src="/img/SKI-MAPA-2019.jpg" :alt="trans('area_map.map_alt')" class="w-full h-auto rounded-md border" />
    </div>
  </AppLayout>
</template>
