<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Mapa areálu"
      subtitle="Interaktivní mapa lyžařského areálu"
    />
    <div class="container my-16">
      <img src="/img/SKI-MAPA-2019.jpg" alt="Mapa areálu SKI Kunčice" class="w-full h-auto rounded-md border" />
    </div>
  </AppLayout>
</template>