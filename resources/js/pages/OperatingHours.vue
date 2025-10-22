<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
</script>

<template>
  <AppLayout>
    <PageHeader
      title="Provozní doba"
      subtitle="Informace o otevíracích hodinách areálu"
    />
    <div class="container mx-auto px-4 py-8">
      <p>Informace o otevíracích hodinách areálu.</p>
    </div>
  </AppLayout>
</template>