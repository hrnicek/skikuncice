<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import PageHeader from '@/components/PageHeader.vue';
import WebcamsSection from '@/components/WebcamsSection.vue';
import { trans } from 'laravel-vue-i18n';
import { type PropType, onMounted, onUnmounted } from 'vue';
import { router } from '@inertiajs/vue3';

interface Webcam {
  name: string
  url: string | null
}

defineProps({
  webcams: {
    type: Array as PropType<Webcam[]>,
    default: () => []
  }
})

let pollId: number | undefined

onMounted(() => {
  pollId = window.setInterval(() => {
    router.reload({ only: ['webcams'] })
  }, 30000)
})

onUnmounted(() => {
  if (pollId) window.clearInterval(pollId)
})
</script>

<template>
  <AppLayout>
    <PageHeader
      :title="trans('webcams.page_header.title')"
      :subtitle="trans('webcams.page_header.subtitle')"
    />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <WebcamsSection :webcams="webcams" :show-title="false" />
    </div>
  </AppLayout>
</template>
