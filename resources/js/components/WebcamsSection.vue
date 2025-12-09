<script setup lang="ts">
import { type PropType, ref, computed, onMounted, onUnmounted } from 'vue'

interface Webcam {
  name: string
  url: string | null
}

const props = defineProps({
  webcams: {
    type: Array as PropType<Webcam[]>,
    default: () => []
  },
  showTitle: {
    type: Boolean,
    default: true
  },
  intervalMs: {
    type: Number,
    default: 30000
  }
})

const tick = ref(0)
let timer: number | undefined

onMounted(() => {
  timer = window.setInterval(() => {
    tick.value++
  }, props.intervalMs)
})

onUnmounted(() => {
  if (timer) window.clearInterval(timer)
})

const srcWithArg = (url: string | null) => {
  if (!url) return null
  try {
    const u = new URL(url)
    u.searchParams.set('arg', String(tick.value))
    return u.toString()
  } catch {
    return `${url}${url.includes('?') ? '&' : '?'}arg=${tick.value}`
  }
}

const isContain = (name: string) => name.toLowerCase().includes('parkovi')
const imgClass = (name: string) => isContain(name) ? 'object-contain' : 'object-cover'
const hasWebcams = computed(() => props.webcams && props.webcams.length > 0)
</script>

<template>
  <div class="space-y-6">
    <div v-if="props.showTitle" class="text-center space-y-2">
      <h2 class="text-3xl font-bold">Webkamery</h2>
      <p class="text-gray-500">Živé záběry ze skiareálu a okolí</p>
    </div>

    <div v-if="hasWebcams" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div v-for="(webcam, index) in props.webcams" :key="index" class="rounded-2xl border ring-1 ring-[var(--primary)]/10 bg-white/60 dark:bg-gray-800/60 backdrop-blur p-4 transition hover:ring-[var(--primary)]/20">
        <div class="space-y-3">
          <h3 class="text-lg font-semibold">{{ webcam.name }}</h3>
          <div class="relative w-full aspect-video rounded-xl overflow-hidden bg-black/10">
            <img
              v-if="webcam.url"
              :src="srcWithArg(webcam.url)"
              :class="['absolute inset-0 w-full h-full', imgClass(webcam.name)]"
              alt=""
              decoding="async"
              loading="lazy"
            />
            <div v-else class="absolute inset-0 flex flex-col items-center justify-center gap-2">
              <UIcon name="i-heroicons-camera" class="w-16 h-16 text-gray-400" />
              <span class="text-sm text-gray-500">Kamera není momentálně dostupná</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-else class="text-center py-12 text-gray-500">
      <UIcon name="i-heroicons-video-camera-slash" class="w-12 h-12 mx-auto mb-2 opacity-50" />
      <p>Momentálně nejsou k dispozici žádné webkamery.</p>
    </div>
  </div>
</template>
