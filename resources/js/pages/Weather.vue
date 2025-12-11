<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import WebcamsSection from '@/components/WebcamsSection.vue'
import { type PropType, onMounted, onUnmounted } from 'vue'
import { trans } from 'laravel-vue-i18n'

interface Webcam {
  name: string
  url: string | null
}

const props = defineProps({
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

const formatTemp = (temp: number) => Math.round(temp)
const formatDate = (date: string) => {
  return new Date(date).toLocaleDateString('cs-CZ', {
    weekday: 'long',
    day: 'numeric',
    month: 'numeric'
  })
}
</script>

<template>
  <Head :title="trans('weather.page_header.title')" />
  
  <AppLayout>
        <div class="w-screen relative h-[600px] bg-[url('/img/hero-winter.webp')] bg-cover bg-opacity-50 bg-center mb-16">
          <div class="absolute inset-0 bg-black/50 z-10"></div>
          <div class="flex justify-center">
            <div class="relative z-20">
              <iframe src="https://www.meteoblue.com/cs/po%C4%8Das%C3%AD/widget/three/kun%c4%8dice_%c4%8cesko_3072534?geoloc=fixed&nocurrent=0&noforecast=0&days=7&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=dark&user_key=07543320119c5036&embed_key=4102834d91735495&sig=a084f0c1e20c21e1e9d6e121ea1c53ab1ac5e09c437de69bd057fbdd72b27c89" frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 805px;height: 594px;border: 0;overflow: hidden;"></iframe>
            </div>
          </div>
            <div class="py-2 bg-black w-full text-center">
                <a href="https://www.meteoblue.com/cs/po%C4%8Das%C3%AD/t%C3%BDden/index" class="text-sm text-white" target="_blank" rel="noopener"><span class="text-gray-200 text-xs mr-4">Zdroj: </span> <span class="underline text-white">meteoblue</span></a>
              </div>
        </div>

        <div class="container">
          <WebcamsSection :webcams="props.webcams" />
        </div>
  </AppLayout>
</template>
