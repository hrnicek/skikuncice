<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Aktuální počasí a sněhové podmínky"
      subtitle="Aktuální počasí a stav sněhu v areálu"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <p>Aktuální počasí a stav sněhu v areálu.</p>
    </div>
  </AppLayout>
</template>