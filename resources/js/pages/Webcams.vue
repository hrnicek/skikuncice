<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Webkamery"
      subtitle="Živé záběry z webkamer v areálu"
    />
    <div class="container mx-auto px-4 py-8">
      <p>Živé záběry z webkamer v areálu.</p>
    </div>
  </AppLayout>
</template>